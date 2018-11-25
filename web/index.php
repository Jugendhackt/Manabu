<?php

// setup smarty
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
// setup finished

$smarty->assign('pageTitle', 'Hallo Welt');
$smarty->display('index.tpl');

header('Location: login.php');