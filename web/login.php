<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
require  __DIR__ . '/../db/dbcon.php';
session_start();

if(!$_SESSION['logged_in']) {

    if (!empty($_GET['param'])) $param = $_GET['param'];
    else $param = '';

    switch ($param) {
        case 'login':
            // process login:
            $user = $_POST['user'];
            $passwd = $_POST['passwd'];

            $prepLogin = $pdo->prepare("SELECT `passwd`, `nick`, `permissions`, `ID` FROM `user` WHERE `nick` = :nick");
            $prepLogin->execute(array(':nick' => $user));
            $res = $prepLogin->fetch(PDO::FETCH_ASSOC);
            $dbPass = $res['passwd'];
            $dbUser = $res['nick'];
            $permissions = $res['permissions'];
            $UID = $res['ID'];

            if (password_verify($passwd, $dbPass)) {
                $_SESSION['logged_in'] = true;
                $_SESSION['uid'] = $UID;
                header('Location: tree.php');
            } else {
                $smarty->assign('pageTitle', 'Anmeldung fehlgeschlagen');
                $smarty->display('login_failed.tpl');
            }

            break;
        default: // show login login form
            $smarty->assign('pageTitle', 'Anmelden');
            $smarty->display('login_form.tpl');
            break;
    }
} else header('Location: tree.php');
