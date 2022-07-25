<?php include "ayarlar.php";
?>
<?php
$sql = $db->query('select * from about ');
$about = $sql->fetchAll();


$sql2 = $db->query('select * from contactinfo');
$contactinfo = $sql2->fetchAll();
?>
<!-- Site Footer -->
<div class="site-footer parallax parallax3" style="background-color: #1e2436">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="widget footer_widget">
                    <h4 class="widgettitle"><img src="images/<?=$about[0]['logofooter']?>" alt="" width="120px"></h4>
                    <p><?=$about[0]['mission']?></p>
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
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="widget footer_widget widget_links">
                    <h4 class="widgettitle">Blogroll</h4>
                    <ul>
                        <li><a href="joinus.php">Become a volunteer</a></li>
                        <li><a href="about.php">Our mission</a></li>
                        <li><a href="/#success">Success stories</a></li>
                        <li><a href="team.php">Meet our team</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 pull-right">
                <div class="widget footer_widget">
                    <h4 class="widgettitle">We are here</h4>
                    <div>
                        <img src="images/<?=$about[0]['about_image']?>">
                    </div>
                </div>
            </div>
        </div>
<br>
 <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="copyrights-col-left">
                            <p>&copy; 2021 HumaneR. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6"></div>
     <!--
                    <div class="copyrights-col-right">
                        <ul class="footer-menu">
                            <li><a href="privacy-policy.php">Privacy policy</a></li>
                            <li><a href="payment-terms.php">Payment terms</a></li>
                            <li><a href="refund-policy.php">Refund policy</a></li>
                        </ul>
                    </div>
                </div> -->

    </div>
</div>
<!-- Site Footer -->

<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a></div>
<script src="js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
<script src="vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- PrettyPhoto Plugin -->
<script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="js/circle-progress.js"></script> <!-- Circle Progress Bars -->
<script src='vendor/fullcalendar/lib/moment.min.js'></script><!-- Calendar Moment Function -->
<script src='vendor/fullcalendar/fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        $('#calendar').fullCalendar({
            editable: false,
            height: 'auto',
            minTime: '08:00:00',
            maxTime: '20:00:00',
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-02-22'
                },
                {
                    title: 'Long Event',
                    start: '2016-01-07',
                    end: '2016-01-12'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2015-12-31T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2015-06-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2016-02-11',
                    end: '2016-02-13'
                },
                {
                    title: 'Meeting',
                    start: '2016-01-12T10:30:00',
                    end: '2016-01-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2016-03-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2015-06-12T14:30:00',
                    className: 'venue-shop-pleu'
                }
            ]
        });

    });

</script>
</body>
</html>
