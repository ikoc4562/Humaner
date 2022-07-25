<?php
include "header.php";
?>
    <!-- Hero Area -->
    <div class="hero-area">
        <div class="page-banner parallax" style="background-image:url(images/blogbanner-1.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">News & Articles</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                    <?php
                    $sql = $db->prepare('select * from articles where id=:id  ');
                    $sql->execute([
                        'id'=>$_GET['id'],
                    ]);
                    $causes = $sql->fetchAll();
                    $date = new DateTime($causes['publish_date']);


                    ?>
                	<div class="col-md-12 content-block">
                    	<h3><?=$causes[0][1]?></h3>
                    	<div class="post-media">
                        	<img src="images/<?=$causes[0][3]?>" alt="">
                        </div>
                        <div class="row">
                        	<div class="col-md-6 col-sm-6">
                                <span class="event-date">
                            <span class="date"><?=$date->format('d')?></span>
                                        <span class="month"><?=$date->format('M')?></span>
                                        <span class="year"><?=$date->format('Y')?></span>
                                </span>
                                <span class="meta-data"><?=$date->format('l')?>, <?=$date->format('H:i')?></span>
                      		</div>
                        </div>
                        <div class="spacer-20"></div>
                      	<p class="lead"><?=$causes[0][2]?></p>
                    </div>

                    <!-- Sidebar -->
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
