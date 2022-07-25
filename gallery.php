<?php
include "header.php";
$sql = $db->query('select * from portfolio where is_deleted=0');
$portfolios = $sql->fetchAll();
$sql = $db->query('select * from videos where is_deleted=0');
$videos = $sql->fetchAll();
?>
?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(images/gallery-banner.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Galleries</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                <br>
                <div class="grid-filter">
                    <ul class="nav nav-pills sort-source" data-sort-id="gallery" data-option-key="filter">
                        <li data-option-value="*" class="active"><a href="#"><i class="fa fa-th"></i> <span>Show All</span></a></li>
                        <li data-option-value=".images"><a href="#"><span><i class="fa fa-image"></i> Images</span></a></li>
                        <li data-option-value=".videos"><a href="#"><span><i class="fa fa-video-camera"></i> Videos</span></a></li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="sort-destination isotope gallery-items" data-sort-id="gallery">


                        <?php foreach ($portfolios as $portfolio)
                        {
                            ?>
                            <li class="col-md-3 col-sm-3 col-xs-3 grid-item gallery-grid-item images format-image">
                                <a href="images/<?php echo $portfolio['picture']?>" class="media-box magnific-image"> <img src="images/<?php echo $portfolio['picture']?>" alt=""> </a>
                                <div class="grid-item-content">
                                    <p><?php echo $portfolio['title']?></p>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                        <?php foreach ($videos as $video)

                        {
                            ?>
                            <li class="col-md-3 col-sm-3 col-xs-3 grid-item gallery-grid-item videos format-video">
                                <a href="<?=$video['link']?>" class="media-box magnific-video"> <img src="images/<?=$video['picture']?>" alt="" height="255" width="1103"> </a>
                                <div class="grid-item-content">
                                    <p><?=$video['title']?></p>

                                </div>
                            </li>
                            <?php } ?>
                    </ul>

                </div>

            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
