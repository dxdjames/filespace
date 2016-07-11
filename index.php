<?php
/**
 * index.php
 * Description: Filespace application home page.
 * Purpose: Home page where users can view their home folder and subfolders.
 * Created by: James Lampkin
 */

// initialize session and check to see if user is logged in. Redirect to login page if not.
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}

?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->

<!-- begin navigation bar -->
<nav>
    <div class="container">
        <!-- application home link in the top left corner -->
        <a href="index.php" class="application-home">Filespace</a>

        <!-- begin navigation menu in the top right corner -->
        <div class="nav-top">
            <a>Welcome <?php echo $_SESSION['userfname']; ?>!</a>
            <div class="dropdown">
                <a href="#">
                    <i class="fa fa-bars fa-fw fa-2x nav-gear" aria-hidden="true"></i>
                </a>
                <div class="dropdown-content">
                    <div class="caret-up"></div>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-item">
                            <a href="#">
                                <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
                                About
                            </a>
                        </div>
                        <div class="dropdown-menu-item">
                            <a href="#">
                                <i class="fa fa-cogs fa-2x" aria-hidden="true"></i>
                                Options
                            </a>
                        </div>
                        <div class="dropdown-menu-item">
                            <a href="#">
                                <i class="fa fa-power-off fa-2x" aria-hidden="true"></i>
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end navigation menu in the top right corner -->
    </div>
</nav>

<div class="container">
    <h1>Other content</h1>
</div>

</body>
</html>

