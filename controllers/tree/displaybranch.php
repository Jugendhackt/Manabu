<?php
if (!isset($_GET['sid'])) {
  throw new Exception('no sid given');
} else {
  $sid = $_GET['sid'];
}
$smarty->assign('pageTitle', 'Fach');
$gets=$pdo->prepare('SELECT subject.name AS name, grade.grade, weight FROM grade LEFT JOIN subject ON SID = subject.ID WHERE `SID` = :sid AND uid = :uid;');
$gets->bindParam('sid', $sid);
$gets->bindParam('uid', $_SESSION['uid']);
$gets->execute();
$subjectsGrades = $gets->fetchAll(PDO::FETCH_ASSOC);
if (empty($subjectsGrades)) {
  throw new Exception('InvalidArgumentException');
} else {
  $smarty->assign('grades', $subjectsGrades);
  $smarty->assign('subjectname', $subjectsGrades[0]['name']);
  $devider = 0;
  $average1 = 0.0;
  foreach ($subjectsGrades as $grade) {
    $average1 +=  $grade['weight'] * $grade['grade'];
    $devider += $grade['weight'];
  }
  $average = $average1/$devider;
  $smarty->assign('average', $average);
}
$smarty->display('displaybranch.tpl');
