<?php

if(isset($_POST['submitGrade'])) {
    $grade = $_POST['grade'];
    $weight = $_POST['weight'];
    $name = $_POST['subject'];
    $uid = $_SESSION['uid'];

    $selSID = $pdo->prepare("SELECT `ID` FROM subject WHERE `name` = :name");
    $selSID->execute(array('name' => $name));
    $sid = $selSID->fetch(PDO::FETCH_COLUMN);

    $insGrade = $pdo->prepare("INSERT INTO grade (`grade`, `weight`, `SID`, `UID`) VALUES (:grade, :weight, :sid, :uid)");
    $insGrade->bindParam('grade', $grade);
    $insGrade->bindParam('weight', $weight);
    $insGrade->bindParam('sid', $sid);
    $insGrade->bindParam('uid', $uid);
    $insGrade->execute();
    header('Location: tree.php');
} else {
    $smarty->assign('pageTitle', 'Note hinzufügen');
    $subjects = $pdo->query('SELECT `name` FROM `subject`;'); //$datenbankverbinungsobjekt->();
    $s = $subjects->fetchAll(PDO::FETCH_COLUMN);
    $smarty->assign('subjects', $s);
    $smarty->display('insert_grade.tpl');
}