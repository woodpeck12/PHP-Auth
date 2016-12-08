<html lang="en">
<head>
    <title><?= $title ?></title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Testing</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
               <!-- <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Loged as:<?=$login?></a></li>
                <li><a href="../core/actLogout.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>