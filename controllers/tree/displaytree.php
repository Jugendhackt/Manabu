<?php
$uid = $_SESSION['UID'];
$allSubjects = $pdo->query('SELECT id, name FROM subject;'); // get all ids of the $subjects
$subjRes = $allSubjects->fetchAll(PDO::FETCH_COLUMN);
$allGrades = $pdo->prepare('SELECT grade, weight FROM grade WHERE SID = :sid AND UID = :uid'); // get all grades from a user to a $subject
$allGrades->bindParam('uid', $_SESSION['uid']);
foreach ($subjRes as $subjectid) {
  $allGrades->bindParam('sid',$subjectid);
}
$smarty->display('tree.tpl');
// got grades and subject
