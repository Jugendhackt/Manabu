<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
require  __DIR__ . '/../db/dbcon.php';

// prep stmts
$pdo->prepare("SELECT `pw` ")


if (!empty($_GET['param'])) $param = $_GET['param'];
else $param = '';

switch ($param) {
  case 'login':
    // process login:
    $user = $_POST['user'];
    $passwd = $_POST['passwd'];


    

    break;
  default: // show login login form
    $smarty->assign('pageTitle', 'Anmelden');
    $smarty->display('login_form.tpl');
    break;
}
