<?php
include "header.php";
?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(images/team-banner.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">SPONSORS</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<h2>Sponsors</h2>
                <div class="spacer-20"></div>
                <div class="row">


                    <?php
                    $sql = $db->query('select * from partners where isdeleted=0');
                    $teams = $sql->fetchAll();
                    foreach ($teams as $team) {
                        ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="grid-item grid-staff-item">
                                <div class="grid-item-inner">
                                    <div class="media-box"><img src="images/<?=$team['picture']?>" alt="">
                                    </div>
                                    <div class="grid-item-content">
                                        <h3><?=$team['title']?></h3>
                                        <ul class="social-icons-rounded social-icons-colored">
                                            <li class="link"><a href="<?=$team['link']?>"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>


                </div>
           	</div>
         	<div class="spacer-75"></div>
        </div>
    </div>
<?php
include "footer.php";
?>
