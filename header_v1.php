<?php
include "ayarlar.php";
$sql = $db->query("select * from about");
$about = $sql->fetchAll();
?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    This site is made by https://muvotech.com
      ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$about[0]['title']?></title>
    <meta name="description" content="Humaner">
    <meta name="keywords" content="">
    <meta name="author" content="MuvoTech">
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
    <link href="vendor/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="vendor/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print">
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
    <!-- Color Style -->
    <link href="colors/color1.css" rel="stylesheet" type="text/css">
    <!-- SCRIPTS
      ================================================== -->
    <script src="js/modernizr.js"></script><!-- Modernizr -->
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>

</head>
<body class="home header-style2">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Topbar -->
    <header class="topbar">
        <div class="container">
            <ul class="social-icons topmenu pull-right">
                <?php
                            $sql=$db->prepare("select * from social_media where is_deleted=:isd");
                            $sql->execute(
                                [
                                    'isd'=>0
                                ]
                            );
                            $socials = $sql->fetchAll();
                foreach ($socials as $social){
                ?>
                <li class="<?=$social['title']?>"><a href="<?=$social['link']?>"><i class="fa fa-<?=$social['title']?>"></i></a></li>
                    <?php
                }
                ?>
            </ul>
            <?php
            $sql = $db->query("select * from contactinfo");

            $contactinfo = $sql->fetchAll();
            ?>
            <div class="header-info-col">
                <i class="fa fa-headphones"></i> <strong><?=$contactinfo[0]['phone']?></strong>
            </div>
            <div class="header-info-col">
                <i class="fa fa-envelope-o"></i> <strong><?=$contactinfo[0]['email']?></strong>
            </div>
        </div>
    </header>
    <!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a href="index.php" class="default-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo"></a>
                    <a href="index.php" class="default-retina-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo" width="199" height="30"></a>
                    <a href="index.php" class="sticky-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo"></a>
                    <a href="index.php" class="sticky-retina-logo"><img src="images/<?=$about[0]['logo']?>" alt="Logo" width="199" height="30"></a>
                </div>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="about.php">About Us</a>
                        <ul>
                            <li><a href="about.php">Introduction</a></li>
                            <li><a href="team.php">Team</a></li>
                            <!--<li><a href="our-impact.php">Our Impact</a></li
                            <li><a href="careers.php">Careers</a></li>>-->
                        </ul>
                    </li>
                    <li><a href="forrefugees.php">For the refugees</a>
                    <li><a href="involved.php">Get involved</a>

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
                    <li><a href="partners.php">Partners</a>
                    <li><a href="resources.php">Resources</a>

                    <li><a href="contact.php">Contact</a></li>

               </ul>
           </div>
       </header>
   </div>
