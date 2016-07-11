<?php
/**
 * logout.php
 * Description: Logout page for the Filespace application
 * Purpose: To log the user out of the filespace application and destroy session variables
 * Created by: James Lampkin
 */

session_start();
unset($_SESSION);
session_destroy();
header('Location: login.php');

?>