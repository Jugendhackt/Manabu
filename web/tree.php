<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../incs/smartyimport.php';
require  __DIR__ . '/../db/dbcon.php';
session_start();


if(isset($_GET['param'])) {
    $param = $_GET['param'];
} else {
    $param = '';
}

switch($param) {
    case "edit-grade":
        break;
    case "addgrade":
        break;
    default:
        break;
}
