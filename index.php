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
    <title>Home</title>
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

<!-- begin navigation sidebar -->
<nav class="sidebar">
    <!-- application home link in the top left corner -->
    <h3><?php echo $_SESSION['userfname'].' '.$_SESSION['userlname']; ?></h3>
    <ul class="favs">
        <li>
            <a href="#" class="active">
                <i class="fa fa-home" aria-hidden="true"></i>
                &nbsp;Home
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-file" aria-hidden="true"></i>
                &nbsp;Documents
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-image" aria-hidden="true"></i>
                &nbsp;Pictures
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-music" aria-hidden="true"></i>
                &nbsp;Music
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-film" aria-hidden="true"></i>
                &nbsp;Movies
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-trash" aria-hidden="true"></i>
                &nbsp;Trash
            </a>
        </li>
    </ul>
    <h3>Favorites</h3>
    <a class="sidebar-button">
        <i class="fa fa-cogs"></i> Options
    </a>
    <a class="sidebar-button">
        <i class="fa fa-power-off"></i> Sign Out
    </a>
</nav>
<!-- end navigation sidebar -->

<!-- contains everything to the right of the navigation sidebar -->
<section class="top-nav">
    <!-- contains the File, Edit, View, menus etc... -->
    <div class="menubar">
        <!-- begin dropdown menu group -->
        <ul class="dropdown-menu-group">
            <li>
                <a href="#">File</a>
                <ul>
                    <li><a href="#"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a></li>
                    <li><a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download</a></li>
                    <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a></li>
                    <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Edit</a>
                <ul>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Select All</a></li>
                    <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Rename</a></li>
                    <li><a href="#"><i class="fa fa-cut" aria-hidden="true"></i> Cut</a></li>
                    <li><a href="#"><i class="fa fa-copy" aria-hidden="true"></i> Copy</a></li>
                    <li><a href="#"><i class="fa fa-paste" aria-hidden="true"></i> Paste</a></li>
                </ul>
            </li>
            <li>
                <a href="#">View</a>
                <ul>
                    <li><a href="#"><i class="fa fa-image" aria-hidden="true"></i> Large Icons</a></li>
                    <li><a href="#"><i class="fa fa-image" aria-hidden="true"></i> Medium Icons</a></li>
                    <li><a href="#"><i class="fa fa-image" aria-hidden="true"></i> Small Icons</a></li>
                    <li><a href="#"><i class="fa fa-list" aria-hidden="true"></i> List</a></li>
                    <li><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> Details</a></li>
                    <li><div class="dropdown-menu-divider"></div></li>
                    <li>
                        <a href="#">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            Show File Extensions
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li><a href="#"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> Sort by</a></li>
                </ul>
            </li>
        </ul>
        <!-- end dropdown menu group -->
        <!-- navigation buttons (back, forward, level up, etc...) -->
        <div class="nav-button-group">
            <a class="btn-nav" id="btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a class="btn-nav" id="btn-forward"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            <a class="btn-nav" id="btn-forward"><i class="fa fa-level-up" aria-hidden="true"></i></a>
        </div>
        <!-- end navigation buttons -->
        <div id="breadcrumbs">
            <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a href="#">Documents</a>
            <a href="#">Office</a>
        </div>
    </div>
    <!-- end menubar -->
    <!-- end folder navigation -->
</section>

<section class="main-content">
    <div class="container">
        <!-- begin dummy content -->
        <div class="icon icon-64">
            <img src="img/FolderIcons/PryFrenteBlack/128/ET.png" alt="Home">
            <p class="file-name">Home</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FolderIcons/PryFrenteBlack/128/ribbondoc.png" alt="Home">
            <p class="file-name">Documents</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FolderIcons/PryFrenteBlack/128/ribbonpictures.png" alt="Home">
            <p class="file-name">Pictures</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FolderIcons/PryFrenteBlack/128/ribbonmusic.png" alt="Home">
            <p class="file-name">Music</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FolderIcons/PryFrenteBlack/128/ribbonvideo.png" alt="Home">
            <p class="file-name">Movies</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/jpeg.png" alt="Home">
            <p class="file-name">Photo.jpg</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/docx_mac.png" alt="Home">
            <p class="file-name">Resume.docx</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/xlsx_mac.png" alt="Home">
            <p class="file-name">Budget.docx</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song1.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song2.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song3.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mpeg.png" alt="Home">
            <p class="file-name">Movie.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/html.png" alt="Home">
            <p class="file-name">Homepage.html</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/psd.png" alt="Home">
            <p class="file-name">Image.psd</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/jpeg.png" alt="Home">
            <p class="file-name">Photo.jpg</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/docx_mac.png" alt="Home">
            <p class="file-name">Resume.docx</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/xlsx_mac.png" alt="Home">
            <p class="file-name">Budget.docx</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song1.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song2.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song3.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mpeg.png" alt="Home">
            <p class="file-name">Movie.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/html.png" alt="Home">
            <p class="file-name">Homepage.html</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/psd.png" alt="Home">
            <p class="file-name">Image.psd</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/jpeg.png" alt="Home">
            <p class="file-name">Photo.jpg</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/docx_mac.png" alt="Home">
            <p class="file-name">Resume.docx</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/xlsx_mac.png" alt="Home">
            <p class="file-name">Budget.docx</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song1.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song2.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mp3.png" alt="Home">
            <p class="file-name">Song3.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/mpeg.png" alt="Home">
            <p class="file-name">Movie.mp3</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/html.png" alt="Home">
            <p class="file-name">Homepage.html</p>
        </div>
        <div class="icon icon-64">
            <img src="img/FileIcons/Default/128/psd.png" alt="Home">
            <p class="file-name">Image.psd</p>
        </div>
        <!-- end dummy content -->
    </div>
</section>

</body>
</html>

