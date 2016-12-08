<?php
require('../bootstrap.php');

use core\Auth;

if(Auth::getUser()){
   // echo('already login');
    echo(Auth::getUser());
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
        User Registration page
    </title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container">
    <form class="form-signin" action="../core/actRegister.php"  method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="repassword" id="reinputPassword" class="form-control" placeholder="Re-Password" required>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
</div> <!-- /container -->

</body>


</html>


