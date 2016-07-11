<?php
/**
 * login.php
 * Description: Login page for the filespace application.
 * Purpose: To allow users to login to the application.
 * Created by: James Lampkin
 */

// This needs to be changed. As of now it simply sets loggedin to true and sends user to the home page.
// initialize session
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['userfname'] = "James";
$_SESSION['userlname'] = "Lampkin";

// The home variable holds the users home folder, where all of the users files are stored.
$_SESSION['home'] = 'james';
header('Location: index.php');
?>