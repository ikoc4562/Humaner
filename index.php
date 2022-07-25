<?php
include "header.php";
$sql = $db->query("select * from about");
$about = $sql->fetchAll();
?>
<!-- Hero Area -->
    <div class="hero-area">
        <!-- Start Hero Slider -->
        <div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
            <ul class="slides">
                <?php
                $sql = $db->query('select * from slider where is_deleted=0');
                $sliders = $sql->fetchAll();
                foreach ($sliders as $slider){
                ?>
                <li class="parallax" style="background-image:url('images/<?=$slider['picture']?>')">
                    <div class="flex-caption">
                        <div class="container">
                            <div class="flex-caption-table">
                                <div class="flex-caption-cell">
                                    <div class="flex-caption-text">
                                        <h2><?=$slider['title']?></h2>
                                        <p><?=$slider['text']?>..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!-- End Hero Slider
         https://www.paypal.com/donate?hosted_button_id=PAAVFFTZYM9EG
         Isa KOC
         Muvotech.com
         -->
    </div>

    <div class="featured-links row">
    	<a href="" class="featured-link col-md-4 col-sm-4">
        	<span>View our causes</span>
        	<strong>Donate now</strong>
        </a>
    	<a href="joinus.php" class="featured-link col-md-4 col-sm-4">
        	<span>Become a volunteer</span>
        	<strong>Join us now</strong>
        </a>
    	<a href="involved.php" class="featured-link col-md-4 col-sm-4">
        	<span>View our events</span>
        	<strong>Get involved</strong>
        </a>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
            <div class="featured-texts row">
                <?php $sql = $db->query('select * from about_counter ');
                $about_counts = $sql->fetchAll();
                foreach ($about_counts as $about){

                ?>
            	<div class="featured-text col-md-3 col-sm-3">
                	<span><?=$about['title']?></span>
                    <strong><?=$about['complete']?></strong>
                </div>
                    <?php
                } ?>

            </div>
            <div class="parallax parallax6 padding-tb100" style="background-image:url(images/migration-3129387_1920.jpg)">
            	<div class="container">
                    <div class="parallax-text-block pull-right">
                        <h3 align="center">Who Are We?</h3>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Founded in 2020, HumaneR specializes in creating a sustainable living for the refugees across Europe. Amidst the pandemic, when the world is facing the most chaotic times in history HumaneR put its foot forward to make the refugees self-reliant during the difficult times.
</p>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are trusted by governments, Corporate, Businesses, Relief organizations and refugees alike. Our work enables the refugee community to protect their future and make it secure. We work hand in hand with our partner organizations in creating a road map for the refugees to upskill them in terms of skill or knowledge gap or to remove the language barrier altogether.
                        </p>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our unique preposition that holds us as ONE is our endeavour to start HumaneR with the Refugees. They are the ones running it for themselves and to support others like them. It is “BY the refugees and FOR the refugees” We train them to become entrepreneurs or work as freelancers or we help them find jobs. We are helping them set up small businesses and pave the path for self-reliance.
    Are you with us in it?

</p>
                        <a href="" class="btn btn-primary">Donate</a>
                    </div>
               	</div>
            </div>

            <div class="padding-tb75 padding-b0" id="success">
                <div class="container">
                	<div class="text-align-center">
                       	<h2 class="block-title block-title-center">Some of the success stories</h2>
                    </div>
                </div>
                <div class="carousel-wrapper">
                    <div class="row">
                        <ul class="owl-carousel carousel-fw" id="stories-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                            <?php
                            $sql = $db->query('select * from stories where is_deleted=0 order by id desc');
                            $stories = $sql->fetchAll();
                            foreach ($stories as $story){
                            ?>
                            <li class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="images/<?=$story['picture']?>" alt="" class="img-responsive">
                                    </div>

                                    <div class="col-md-6">
                                    	<div class="story-slider-content">
                                    		<div class="story-slider-table">
                                    			<div class="story-slider-cell">
                                                    <blockquote>
                                                        <h3><?=$story['title']?></h3>
                                                        <p><?=$story['text']?></p>
                                                    </blockquote>
                                                    <!--<a href="#" class="btn btn-primary">View full story</a>-->
                                              	</div>
                                           	</div>
                                      	</div>
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
            <!-- Partner Carousel -->
            <div class="partner-carousel">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3 col-sm-3">
                            <h2 class="block-title">Our Sponsors</h2>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="partners-slider" data-columns="5" data-autoplay="5000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="3" data-items-mobile="2">

                                        <?php
                                        $sql = $db->query('select * from partners where isdeleted=0');
                                        $partners = $sql->fetchAll();
                                        foreach ($partners as $partner){
                                            ?>
                                        <li class="item"><a href="<?=$partner['link']?>"><img src="images/<?=$partner['picture']?>" alt=""></a></li>

                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   	</div>
                </div>
           	</div>

            <div class="padding-tb75 lgray-bg">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-4 col-sm-4">
                       		<h2 class="block-title">Latest News & Articles</h2>
                        </div>

                        <div class="col-md-8 col-sm-8">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="news-slider" data-columns="2" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                        <?php
                                         $sql = $db->query('select * from articles where is_deleted=0  order by id desc limit 2');
                                         $blogs = $sql->fetchAll();
                                         foreach ($blogs as $blog){
                                        ?>

                                        <li class="item">
                                            <div class="grid-item blog-grid-item format-standard">
                                                <div class="grid-item-inner">
                                                    <a href="news-detail.php?id=<?=$blog[0]?>" class="media-box">
                                                        <img src="images/<?=$blog['picture']?>" alt="">
                                                    </a>
                                                    <div class="grid-item-content">
                                                        <h3 class="post-title"><a href="news-detail.php?id=<?=$blog[0]?>"><?=$blog['title']?></a></h3>
                                                        <span class="meta-data">Posted <?=$blog['publish_date']?></span>
                                                    </div>
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
                </div>
            </div>

            <div class="accent-bg padding-tb20 cta-fw">
    			<div class="container">
                    <a href="joinus.php" class="btn btn-default btn-ghost btn-light btn-rounded pull-right">Become a volunteer</a>
                    <h4>Let's start doing your bit for the world. Join us as a Volunteer</h4>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";
?>
