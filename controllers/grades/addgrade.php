<?php
$smarty->assign('pageTitle', 'Note hinzufügen');
$subjects = $pdo->query('SELECT `name` FROM `subject`;'); //$datenbankverbinungsobjekt->();
$s = $subjects->fetchAll(PDO::FETCH_COLUMN);
$smarty->assign('subjects', $s);
$smarty->display('insert_grade.tpl');