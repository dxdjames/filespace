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
        <a href="index.php" class="application-home">Filespace</a>
    </div>
</nav>

</body>
</html>
