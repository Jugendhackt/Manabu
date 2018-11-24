<?php

$driver = 'mysql';
$host = 'b.google.de';
$dbname = 'manabu';
$dsn = "$driver:host=$host;dbname=$dbname";

$user = 'root';
$pswd = 'root';

$pdo = new PDO($dsn, $user, $pswd);
