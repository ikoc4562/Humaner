<?php
include "header.php";

$sql = $db->query("select * from about");
$about = $sql->fetchAll();
?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(images/about-banner.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">About us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                <div class="spacer-20"></div>

                <div class="row">

                	<div class="col-md-6 col-sm-6">
                    <p><?=$about[0]['contents']?></p>
                   	</div>

                    <div class="col-md-6 col-sm-6">
                    <img class="lazy-image" src="images/<?=$about[0]['about_image']?>" data-src="images/<?=$about[0]['about_image']?>" alt="">
                    </div>

               	</div>

                <div class="spacer-30"></div>

                <div class="spacer-20"></div>
                <div class="row">

                    <?php
                    $sql = $db->query('select * from about');
                    $abouts = $sql->fetchAll();

                    ?>

                    <div class="col-md-4 col-sm-4">
                    	<div class="grid-item grid-staff-item">
                            <div class="grid-item-inner">
                              	<div class="grid-item-content">
                                    <h3>Our Mission
                                    </h3>
                                	<p><?=$about[0]['mission']?></p>
                              	</div>
                            </div>
                       	</div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="grid-item grid-staff-item">
                            <div class="grid-item-inner">
                                <div class="grid-item-content">
                                    <h3>Our Vision
                                    </h3>
                                    <p><?=$about[0]['vision']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="grid-item grid-staff-item">
                            <div class="grid-item-inner">
                                <div class="grid-item-content">
                                    <h3>Our Values
                                    </h3>
                                    <p><?=$about[0]['values2']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="spacer-20"></div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
