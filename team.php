<?php
include "header.php";
?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(images/team-banner.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Our team</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<h2>Management Team</h2>
                <div class="spacer-20"></div>
                <div class="row">


                    <?php
                    $sql = $db->query('select * from teams where isdeleted=0');
                    $teams = $sql->fetchAll();
                    foreach ($teams as $team) {
                    ?>
                    <div class="col-md-3 col-sm-3">
                        <div class="grid-item grid-staff-item">
                            <div class="grid-item-inner">
                                <div class="media-box" style="display: flex;
  flex-direction: column;
  justify-content: center;  /* Centering y-axis */
  align-items :center;">
                                    <img src="images/<?= $team['image'] ?>" alt="" style="height: 200px">
                                </div>
                                <div class="grid-item-content" style="max-height: 300px;overflow: scroll;min-height: 300px">
                                    <h3><?= $team['name'] ?></h3>
                                    <span class="meta-data"><?= $team['title'] ?></span>
                                    <ul class="social-icons-rounded social-icons-colored">
                                        <?php
                                        if ($team['facebook'])
                                        {
                                        ?>
                                        <li class="facebook"><a href="<?= $team['facebook'] ?>"><i
                                                        class="fa fa-facebook"></i></a></li>
                                        <?php
                                        }
                                            ?>
                                        <?php
                                        if ($team['twitter']){
                                        ?>
                                            <li class="twitter"><a href="<?=$team['twitter']?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php
                                        }
                                            ?>
                                        <?php
                                        if ($team['linkedin']){
                                        ?>
                                            <li class="linkedin"><a href="<?=$team['linkedin']?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($team['instagram']){
                                        ?>
                                            <li class="instagram"><a href="<?=$team['instagram']?>"><i class="fa fa-instagram"></i></a></li>
                                        <?php
                                        }
                                        ?>
                                        </ul><p><?=$team['explanation']?></p>
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
           	<div class="lgray-bg padding-tb75">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <h2 class="block-title">Our Staff &amp; Volunteers</h2>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="row">

                                <?php
                                //$sql = $db->query('select * from staff_volunteers where isdeleted=0');
                                //$volunteers = $sql->fetchAll();
                               // foreach ($volunteers as $volunteer){
                                ?>
                                <!--<div class="col-ms-4 col-sm-4 col-xs-4">
                                    <ul class="carets">
                                        <li></li>
                                    </ul>
                                </div>--->
                                <?php
                               // } ?>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-wrapper">
                        <div class="row">

                                <?php
                                $sql = $db->query('select * from staff_volunteers where isdeleted=0');
                                $volunteers = $sql->fetchAll();
                                foreach ($volunteers as $volunteer){
                                ?>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="grid-item grid-staff-item">
                                            <div class="grid-item-inner">
                                                <div class="media-box" style="display: flex;
  flex-direction: column;
  justify-content: center;  /* Centering y-axis */
  align-items :center;">
                                                    <img src="images/<?= $volunteer['image'] ?>" alt="" style="height: 200px">
                                                </div>
                                                <div class="grid-item-content" style="max-height: 300px;overflow: scroll;min-height: 300px">
                                                    <h3><?= $volunteer['name'] ?></h3>
                                                    <ul class="social-icons-rounded social-icons-colored">
                                                        <?php
                                                        if ($volunteer['link'])
                                                        {
                                                            ?>
                                                            <li class=""><a href="<?= $volunteer['link'] ?>"><i
                                                                            class="fa fa-link"></i></a></li>
                                                            <?php
                                                        }
                                                        ?>

                                                    </ul>
                                                    <p><?=$volunteer['title']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                } ?>


                        </div>
                    </div>
                </div>
           	</div>
        </div>
    </div>
<?php
include "footer.php";
?>
