<?php
require '../bootstrap.php';

use core\PdoConnection;
use core\Auth;



$pdo = PdoConnection::connect(require ('../config/config.php'));

if(Auth::checkLogin($pdo,$_POST['email'],$_POST['password'])){
    $_SESSION['email'] = $_POST['email'];
    header('location:../view/login.php');
}
else {
    header('location:../view/index.php');
}





