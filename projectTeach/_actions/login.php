<?php

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "austin@gmail.com" and $password == "password") {
    session_start();
    $_SESSION['user'] = ['name' => 'Austin'];
    header("location: ../profile.php");
} else {
    header("location: ../index.php");
}
