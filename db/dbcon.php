<?php

$driver = 'mysql';
$host = 'db.google.de';
$dbname = 'manabu';
$dsn = "$driver:host=$host;dbname=$dbname";

$user = 'root';
$pswd = 'root';

$pdo = new PDO($dsn, $user, $pswd);
