<?php
$uid = 1;//$_SESSION['UID'];
$allSubjects = $pdo->query('SELECT id, name FROM subject;'); // get all ids of the $subjects
$subjRes = $allSubjects->fetchAll(PDO::FETCH_COLUMN);
$allGrades = $pdo->prepare('SELECT grade, weight FROM grade WHERE SID = :sid AND UID = :uid'); // get all grades from a user to a $subject
$allGrades->bindParam('uid', $uid);
$subjectsArray = array();
foreach ($subjRes as $subjectid) {
  $allGrades->bindParam('sid', $subjectid);
  $allGrades->execute();
  $subjectsArray[$subjectid]['id']= $subjectid;
  $subjectsArray[$subjectid] = $allGrades->fetchAll(PDO::FETCH_ASSOC);
  // got entries to subject $ subjectid
}
// var_dump($subjectsArray);
echo '
<div style="text-align: center; margin-top: 50vh;background-color: rgba(0, 0, 0,0); padding: 10 10 10 10; box-sshadow: 2px 2px 2px;">
<div><a href="">Mathe</a></div>
<div>Note: 1,3</div>
</div>';

$smarty->assign('pageTitle', 'Fächerübersicht');
$smarty->assign('subjects',$subjectsArray);
$smarty->display('tree.tpl');
// got grades and subject
