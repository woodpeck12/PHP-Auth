<?php
require '../bootstrap.php';

use core\PdoConnection;
use core\Auth;



if($_POST['password'] != $_POST['repassword']) {
    $_SESSION['error']='password  not match';
    header("location:../view/register.php");
    die();
}

$pdo = PdoConnection::connect(require ('../config/config.php'));

if(!Auth::registerUser($pdo,$_POST['email'],$_POST['password'])){
    header("location:../view/register.php");
}
else{
    $_SESSION['email']=$_POST['email'];
    header("location:../view/index.php");
}






