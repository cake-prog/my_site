<?php


 //mysqli_connect
$host = '127.0.0.1';
$db = 'site';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new \PDO($dsn, $user, $pass, $options);
//$connect_user = mysqli_connect('localhost', 'root', '', 'site');


