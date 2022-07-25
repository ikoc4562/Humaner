<?php
include "header.php";
?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(http://placehold.it/1280x400&amp;text=IMAGE+PLACEHOLDER);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Upcoming Events Calendar</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
            <div class="container">
            	<div id="calendar"></div>
           	</div>
        </div>
    </div>
    <!-- Site Footer -->
    <div class="site-footer parallax parallax3" style="background-image:url(http://placehold.it/1280x800&amp;text=IMAGE+PLACEHOLDER)">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget">
                    	<h4 class="widgettitle">About Born to Give</h4>
                        <p><img src="images/logo.png" alt=""></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <ul class="social-icons-rounded social-icons-colored">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget widget_links">
                    	<h4 class="widgettitle">Blogroll</h4>
                        <ul>
                        	<li><a href="#">Become a volunteer</a></li>
                        	<li><a href="#">Our mission</a></li>
                        	<li><a href="#">Success stories</a></li>
                        	<li><a href="#">Meet our team</a></li>
                        </ul>
                    </div>
                </div>
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget">
                    	<h4 class="widgettitle">We are on Twitter</h4>
                        <div class="twitter-widget" data-tweets-count="2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <div class="site-footer-bottom">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6 col-sm-6">
                	<div class="copyrights-col-left">
                    	<p>&copy; 2016 Born to Give. All Rights Reserved</p>
                    </div>
                </div>
            	<div class="col-md-6 col-sm-6"></div>
                	<div class="copyrights-col-right">
                    	<ul class="footer-menu">
                        	<li><a href="privacy-policy.php">Privacy policy</a></li>
                        	<li><a href="payment-terms.php">Payment terms</a></li>
                        	<li><a href="refund-policy.php">Refund policy</a></li>
                        </ul>
                    </div>
           	</div>
      	</div>
  	</div>
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a></div>
<script src='vendor/fullcalendar/lib/moment.min.js'></script><!-- Calendar Moment Function -->
<script src="js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
<script src="vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- PrettyPhoto Plugin -->
<script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="js/circle-progress.js"></script> <!-- Circle Progress Bars -->
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