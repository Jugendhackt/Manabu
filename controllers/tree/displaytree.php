<?php
$uid = $_SESSION['UID'];
$pdo->prepare('SELECT subject.name as sName, weight, grade FROM grade LEFT JOIN subject on SID = subject.ID WHERE UID = :uid;');
$getusersG = $pdo->bindParam('uid', $uid);
$getusersG->execute();
// got grades and subject
