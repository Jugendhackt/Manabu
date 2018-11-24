<?php
// setup smarty
require __DIR__ . '/../vendor/autoload.php';
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/../smarty/templates');
$smarty->setCompileDir(__DIR__ . '/../smarty/templates_c');
$smarty->setConfigDir(__DIR__ . '/../smarty/config');
$smarty->setCacheDir(__DIR__ . '/../tmp/smarty/cache');
// setup finished
