
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
                    <br>
                    <ul class="sort-destination isotope gallery-items" data-sort-id="gallery">
                        <?php
                        $sql = $db->query('select * from articles where is_deleted=0');
                        $causes = $sql->fetchAll();
                        foreach ($causes as $cause){
                            $date = new DateTime($cause['publish_date']);

                            ?>
                        <li class="col-md-4 col-sm-6 grid-item event-grid-item education format-standard">
                        	<div class="grid-item-inner">
                                <a href="news-detail.php?id=<?=$cause[0]?>" class="media-box">
                                    <img src="images/<?=$cause[3]?>" alt="">
                                </a>
                                <div class="grid-item-content">
                                    <span class="event-date">
                                        <span class="date"><?=$date->format('d')?></span>
                                        <span class="month"><?=$date->format('M')?></span>
                                        <span class="year"><?=$date->format('Y')?></span>
                                    </span>
                                    <span class="meta-data"><?=$date->format('l')?>, <?=$date->format('H:i')?></span>
                                    <h3 class="post-title"><a href="news-detail.php?id=<?=$cause[0]?>"><?=$cause[1]?></a></h3>
                                </div>
                           	</div>
                        </li>
                            <?php
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
