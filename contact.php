<?php
include "header.php";
$sql = $db->query('select * from contactinfo ');
$contactinfo = $sql->fetchAll();
$msg=0;
if (@$_POST['isSave']) {
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
{
$secret = '6LcyqSEaAAAAAPQikYJKAMwlKiSdDH9Xr14W96Sv';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if($responseData->success)
{
    $sql = $db->prepare('insert into mesajlar set isim=:isim, email=:email, mesaj=:mesaj,phone=:phone');
    $sql->execute([
        'isim' => $_POST['isim'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'mesaj' => $_POST['mesaj']
    ]);
    $msg=1;
    ?>
    <meta http-equiv="refresh" content="3; url=contact.php">
    <?php
}

}else
{
    $errMsg = 'ReCaptcha verification failed, please try again.';
}

}
?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(images/contact-banner.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Contact us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                <?php
                if ($msg==1) {
                    ?>
                    <br>
                    <div class="alert alert-success" role="alert">
                        Your message has been sent successfully!
                    </div>
                    <?php
                }
                ?>
                <?php
                if (isset($errMsg)) {
                    ?>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        <?=$errMsg?>
                    </div>
                    <?php
                }
                ?>
            	<div class="row padding-tb20">

                	<div class="col-md-3 col-sm-3 col-xs-6 ">

                    	<h4 class="block-title">Our Locations</h4>
                    </div>
                	<div class="col-md-6 col-sm-6 col-xs-9">
                        <address>
                            <?php
                            echo $contactinfo[0]['address']

                            ?>

                            <br><br>
                            <strong>Phone:</strong> <?php
                            echo $contactinfo[0]['phone']

                            ?><br>
                        </address>
                    </div>

                </div>
            </div>
            <div class="spacer-75">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 content-block">
                <?php echo $contactinfo[0]['googlemaps']?>
                </div>
            </div>

            <div class="spacer-75"></div>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-12 content-block">
                    	<form method="post" >
                            <input type="hidden" name="isSave" value="1">
                        	<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text"  name="isim"  class="form-control input-lg" placeholder="Name*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="phone"  class="form-control input-lg" placeholder="Phone number" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email"   name="email"  class="form-control input-lg" placeholder="Email*" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <textarea cols="6" rows="7"  name="mesaj" class="form-control input-lg" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LcyqSEaAAAAABnR_WMmeRagJhQWg6Mu2DpmAJhR" aria-required="true"></div>
                                    <input type="submit" class="btn btn-primary btn-lg pull-right" >
                              	</div>
                           	</div>
                		</form>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>

                    <!-- Sidebar -->
                </div>
            </div>
        </div>
    </div>
        <?php
include "footer.php";
?>
