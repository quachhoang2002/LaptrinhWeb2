<?php session_start();
session_destroy();
setcookie('remember',null,-1,'/');
header('location:login-form.php');