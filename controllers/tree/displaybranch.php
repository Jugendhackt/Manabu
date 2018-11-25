<?php
if (!isset($_GET['sid'])) {
  throw new Exception('no sid given');
} else {
  $sid = $_GET['sid'];
}
$smarty->assign('pageTitle', 'Fach');
$gets=$pdo->prepare('SELECT subject.name AS name, grade.grade FROM grade LEFT JOIN subject ON SID = subject.ID WHERE `SID` = :sid AND uid = :uid;');
$gets->bindParam('sid', $sid);
$gets->bindParam('uid', $_SESSION['uid']);
$gets->execute();
$subjectsGrades = $gets->fetchAll(PDO::FETCH_ASSOC);
var_dump($subjectsGrades);

//$smarty->asign('subjectname', $subjectsGrades[0]);
$smarty->display('displaybranch.tpl');
