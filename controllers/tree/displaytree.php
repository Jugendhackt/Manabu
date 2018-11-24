<?php
$uid = 1;//$_SESSION['UID'];
$allSubjects = $pdo->query('SELECT id, `name` FROM subject;'); // get all ids of the $subjects
$subjRes = $allSubjects->fetchAll(PDO::FETCH_ASSOC);
$allGrades = $pdo->prepare('SELECT SUM(grade*weight)/SUM(weight) AS average, id FROM grade WHERE SID = :sid AND UID = :uid'); // get all grades from a user to a $subject
$allGrades->bindParam('uid', $uid);
$subjectsArray = array();
foreach ($subjRes as $subject) {
  $allGrades->bindParam('sid', $subject['id']);
  $allGrades->execute();
  $subjectsArray[$subject['id']]['name']= $subject['name']; // save the name of the subject
  $subjectsArray[$subject['id']]['id'] = $subject['id'];
  $subjectsArray[$subject['id']]['grades'] = $allGrades->fetch(PDO::FETCH_ASSOC);
  // got entries to subject $ subjectid
}
//var_dump($subjectsArray); die();
$smarty->assign('pageTitle', 'Fächerübersicht');
$smarty->assign('subjectsArray',$subjectsArray);
$smarty->display('tree.tpl');
// got grades and subject
