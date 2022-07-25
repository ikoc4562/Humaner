<?php
include "ayarlar.php";
$sql = $db->query("select * from about");
$about = $sql->fetchAll();
?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$about[0]['title']?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS
      ================================================== -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
    <!-- Color Style -->
    <link href="colors/color1.css" rel="stylesheet" type="text/css">
    <!-- SCRIPTS
      ================================================== -->
    <script src="js/modernizr.js"></script><!-- Modernizr -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src='https://www.google.com/recaptcha/api.js'></script>


</head>
<body class="home">
<!--[if lt IE 7]>
<![endif]-->
<div class="body">
    <!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a href="index.php" class="default-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo"></a>
                    <a href="index.php" class="default-retina-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo" width="120" height="30"></a>
                    <a href="index.php" class="sticky-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo"></a>
                    <a href="index.php" class="sticky-retina-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo" width="120" height="30"></a>
                </div>
                <?php
                $sql = $db->query("select * from contactinfo");

                $contactinfo = $sql->fetchAll();
                ?>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="header-info-col"><i class="fa fa-phone"></i> <?=$contactinfo[0]['phone']?></div>
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li><a href="home">Home</a>
                    </li>
                    <li><a href="about">About Us</a>
                        <ul>
                            <li><a href="about">Who We Are</a></li>
                            <li><a href="story-behind-humaner">Story Behind HumaneR</a></li>
                            <li><a href="how-we-work">How We Work</a></li>
                            <li><a href="team">Our Team</a></li>
                            <!--<li><a href="our-impact.php">Our Impact</a></li
                            <li><a href="careers.php">Careers</a></li>>-->
                        </ul>
                    </li>
                    <li><a href="forrefugees">For the refugees</a></li>
                    <li><a href="involved">Get involved</a></li>

                        <!--
                        <li><a href="causes-grid.php">Causes</a>
                        </li>
                        <li><a href="">Events</a>
                            <ul>
                                <li><a href="events-grid.php">Events</a></li>
                                <li><a href="events-calendar.php">Events Calendar</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a>

                        </li>

                       <li><a href="blog-grid.php">Blog</a>
                       </li>-->

                    <li><a href="">Partners</a>
                        <ul>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Coaches & Mentors</a></li>
                            <li><a href="#">Language Trainers</a></li>
                            <li><a href="partners">Sponsors</a></li>
                            <li><a href="#">Supporters</a></li>
                        </ul>
                    </li>
                    <li><a href="">Resources</a>
                        <ul>
                            <li><a href="news">News & Articles</a></li>
                            <li><a href="index#success">Real People Real Stories</a></li>
                        </ul>
                    </li>
                    <li><a href="contact">Contact</a></li>

                </ul>
            </div>
        </header>
    </div>
