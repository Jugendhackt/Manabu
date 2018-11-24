<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
require  __DIR__ . '/../db/dbcon.php';
session_start();


if (!empty($_GET['param'])) $param = $_GET['param'];
else $param = '';

switch ($param) {
  case 'login':
    // process login:
    $user = $_POST['user'];
    $passwd = $_POST['passwd'];

    $prepLogin = $pdo->prepare("SELECT `passwd`, `nick`, `permissions` FROM `User` WHERE `nick` = :nick");
    $prepLogin->execute(array(':nick' => $user));
    $res = $prepLogin->fetch();

    $dbPass = $res['passwd'];
    $dbUser = $res['nick'];
    $permissions = $res['permissions'];

    if(password_verify($passwd, $dbPass) && $user == $dbUser) {
        $_SESSION['logged_in'] = true;
        header('Location: tree.php');
    } else {
        $smarty->display('login_failed.tpl');
    }

    break;
  default: // show login login form
    $smarty->assign('pageTitle', 'Anmelden');
    $smarty->display('login_form.tpl');
    break;
}
