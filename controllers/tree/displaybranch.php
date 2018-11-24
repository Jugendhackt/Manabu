<?php
if (!isset($_GET['sid'])) {
  throw new Exception('no sid given');
} else {
  $sid = $_GET['sid'];
}
$smarty->assign('pageTitle', 'Fach');
$gets=$pdo->prepare('SELECT `subject.name`, `grade.grade` AS grade FROM grade LEFT JOIN subject ON SID = `subject.ID` WHERE `SID` = :sid AND uid = :uid;');
$gets->bindParam('sid', $sid);
$gets->bindParam('uid', $_SESSION['uid']);
$gets->execute();

$smarty->display('displaybranch.tpl');
