<?php
ob_start();
session_start();
include "../ayarlar.php";
$sql = $db->prepare ('select * from kullanicilar where id=:id');
$sql->execute(
    [
        'id'=>5
    ]
);
$kullanicilar = $sql->fetchAll();
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../images/<?=$kullanicilar[0]['resim']?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?=$kullanicilar[0]['email']?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Admin Paneli</li>

            <li>
                <a href="hakkinda.php">
                    <i class="fa fa-home"></i> <span>About</span>
                </a>
            </li>
            <li>
                <a href="slider.php">
                    <i class="fa fa-image"></i> <span>Slider</span>
                </a>
            </li>
            <li>
                <a href="contactinfo.php">
                    <i class="fa fa-address-card"></i> <span>Contact Info</span>

                </a>
            </li>
            <li>
                <a href="social.php">
                    <i class="fa fa-at"></i> <span>Social Networks</span>

                </a>
            </li>

            <li>
                <a href="news.php">
                    <i class="fa fa-book"></i> <span>News & Articles</span>

                </a>
            </li>
            <!--
                       <li>
                           <a href="events.php">
                               <i class="fa fa-calendar"></i> <span>Events</span>

                           </a>
                       </li>

                       <li>
                           <a href="blogs.php">
                               <i class="fa fa-book"></i> <span>Blogs</span>

                           </a>
                       </li>
                        -->
            <li>
                <a href="teams.php">
                    <i class="fa fa-user-plus"></i> <span>Teams</span>

                </a>
            </li>
            <li>
                <a href="staff.php">
                    <i class="fa fa-user-times"></i> <span>Our Staff & Volunteers</span>

                </a>
            </li>
            <li>
                <a href="stories.php">
                    <i class="fa fa-star-o"></i> <span>Success Stories</span>

                </a>
            </li>
            <li>
                <a href="about_counter.php">
                    <i class="fa fa-clock-o"></i> <span>Counter</span>

                </a>
            </li>

            <li>
                <a href="service.php">
                    <i class="fa fa-universal-access"></i> <span>Services</span>

                </a>
            </li>
            <li>
                <a href="partners.php">
                    <i class="fa fa-hand-grab-o"></i> <span>Partners</span>

                </a>
            </li>
            <li>
                <a href="donation.php">
                    <i class="fa fa-money"></i> <span>Donations</span>

                </a>
            </li>
            <li>
                <a href="mesajlar.php">
                    <i class="fa fa-envelope"></i> <span>Messages</span>

                </a>
            </li>
            <li>
                <a href="resimgoster.php">
                    <i class="fa fa-image"></i> <span>Show Portfolio</span>

                </a>
            </li>
            <li>
                <a href="videos.php">
                    <i class="fa fa-caret-square-o-right"></i> <span>Videos</span>

                </a>
            </li>
            <li>
                <a href="users.php">
                    <i class="fa fa-user"></i> <span>Users</span>

                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

