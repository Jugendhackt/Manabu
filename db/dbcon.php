<?php

$driver = 'mysql';
$host = 'localhost';
$dbname = 'manabu';
$dsn = "$driver:host=$host;dbname=$dbname";

$user = 'manabu';
$pswd = 'jh18';

$pdo = new PDO($dsn, $user, $pswd);
