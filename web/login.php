<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
require  __DIR__ . '/../db/dbcon.php';


if (!empty($_GET['param'])) $param = $_GET['param'];
else $param = '';

switch ($param) {
  case 'login':
    // process login:
    $user = $_POST['user'];
    $passwd = $_POST['passwd'];

    echo $user, $passwd;

    $prepLogin = $pdo->prepare("SELECT `passwd`, `permissions` FROM `User` WHERE `nick` = :nick");
    $prepLogin->execute(array(':nick' => $user));
    $res = $prepLogin->fetch();

    break;
  default: // show login login form
    $smarty->assign('pageTitle', 'Anmelden');
    $smarty->display('login_form.tpl');
    break;
}
