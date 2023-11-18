<?php
// deletecookie
// setcookie('theme','',time()-1);
session_start();
unset($_SESSION['user']);
