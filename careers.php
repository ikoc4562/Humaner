<?php
include "header.php";
?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(images/careers-banner.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Careers with us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                <div class="text-align-center">
                    <h2>Why you should join the mission</h2>
                    <div class="text-align-left">
                        <div class="spacer-50"></div>
                        <div class="row">

                            <?php
                            $sql = $db->query('select * from services where is_deleted=0');
                            $services = $sql->fetchAll();
                            foreach ($services as $service){
                            ?>

                             <div class="col-md-4">
                                <div class="icon-box ibox-border">
                                    <div class="ibox-icon">
                                        <i class="fa <?=$service['icon']?>"></i>
                                    </div>
                                    <h3><?=$service['title']?></h3>
                                    <p><?=$service['text']?></p>
                                </div>
                             </div>

                                <?php
                            } ?>

                        </div>
                        <div class="spacer-75 hidden-sm hidden-xs"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
include "footer.php";
?>
