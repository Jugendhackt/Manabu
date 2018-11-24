<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
if (!empty($_GET['param'])) {
  $param = $__GET['param'];
} else {
  $param = '';
}

switch ($param) {
  case 'login':
  // process login:
  break;
  default: // show login login form
  $smarty->assign('pageTitle', 'Anmelden');
  $smarty->display('login_form.tpl');
}
