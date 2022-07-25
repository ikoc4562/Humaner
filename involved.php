<?php
include "header.php";

$sql = $db->query("select * from about");
$about = $sql->fetchAll();
?>
<style>
    .yeni{
        font: inherit;
        font-size: 14px;
        font-family: Arial, Verdana, sans-serif;
    }
</style>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(images/get-involved-inner-banner.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Get involved</h1>
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

                	<div class="yeni">
                        <p style="font-weight: bold">HUMANER IS A VOICE FOR THE EU REFUGEES YEARNING FOR A SUSTAINABLE FUTURE.</p>
                        <p>Together we can be HUMANE and make a difference …</p>
                    <p>
                        <b>Join us</b>
                        <br>
                        <ul>
                            <li><a href="joinus.php">Become an intern or volunteer</a></li>
                            <li>Support our mission by donating</li>
                            <li>Start a fundraiser</li>
                        </ul>
                        <br>
                        <div class="widget footer_widget">
                            <p>Follow us:</p>
                            <ul class="social-icons-rounded social-icons-colored">
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
                                }?>
                            </ul>
                        </div>
                        <br>
                      <br align="center">
                        <p style="font-weight: bold">RAISE MONEY FOR HUMANER</p>
                        HELP MAKING A BRIGHT FUTURE FOR REFUGEES
                        <br>
                        Invite your friends and family to join you in supporting HumaneR
                        <br>
                        START FUNDRAISING
                        </div>
                    </p>
                   	</div>

               	</div>

                <div class="spacer-30"></div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
