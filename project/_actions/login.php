<?php
$email = $_POST['email'];
$password = $_POST['password'];

if($email == "austin@gmail.com" && $password== "password"){
    session_start();
    $_SESSION['user'] = ['name' => 'Austin'];
    header("location: ../profile.php");
}
else{
    header("location: ../index.php?incorrect=login");
}


