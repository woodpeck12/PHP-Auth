<?php
use core\Auth;

require ('../bootstrap.php');

if(!Auth::getUser()){
    header('location:./login.php');
}

$title='main page';
$login=$_SESSION['email'];

require ('./header.php');

?>


