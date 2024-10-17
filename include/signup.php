<?php
session_start();
require_once 'connect.php';

$nick = $_POST['nick'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_return = $_POST['password_return'];

if($password === $password_return){
    $password = md5($password);
    mysqli_query($connect , "INSERT INTO `user` (`id`, `nick`, `email`, `password`) VALUES (NULL, '$nick', '$email', '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../entrance.php');

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../authorization.php');
}

