<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
require  __DIR__ . '/../db/dbcon.php';
session_start();
if($_SESSION['logged_in']) {
    if(isset($_GET['param'])) {
        $param = $_GET['param'];
    } else {
        $param = '';
    }

    switch($param) {
        case "edit-grade":
            break;
        case "addgrade":
            require __DIR__ . '/../controllers/grades/addgrade.php';
            break;
        case "edit": // update ka + grades
            require __DIR__ . '/../controllers/grades/editgrade.php';
            break;
        case 'detailSubject':
            require __DIR__ . '/../controllers/tree/displaybranch.php';
            break;
        default:
            require __DIR__ . '/../controllers/tree/displaytree.php';
            break;
    }
} else {
    $smarty->assign('pageTitle', 'Nicht eingeloggt');
    $smarty->display('not_logged_in.tpl');
}
