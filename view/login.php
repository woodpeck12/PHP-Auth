<?php
require('../bootstrap.php');

use core\Auth;

if(Auth::getUser()){
    echo('already login');
    die();
}

?>

<?php
    if(isset($_SESSION['error'])) {
        $count = strlen($_SESSION['error']);

        if ($count > 0) {
            require './error.php';
            $_SESSION['error'] = '';
        }
    }
?>






<html >
<head>
    <title>
        User login page
    </title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container">
    <form class="form-signin" action="../core/actlogin.php"  method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <a href="./register.php" class="btn btn-lg btn-primary btn-block" role="button">Register</a>


</div> <!-- /container -->


</body>


</html>


