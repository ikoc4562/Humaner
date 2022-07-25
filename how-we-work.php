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
    <div class="page-banner parallax" style="background-image:url(images/hww.jpg);">
        <div class="container">
            <div class="page-banner-text">
                <h1 class="block-title">How We Work</h1>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div id="main-container">
        <div class="container">
            <div class="spacer-20"></div>

            <div class="row">

                <div class="yeni">
                    <p style="font-weight: bold">
                        How We Work
                    </p>
<ul>
    <li>
        We work towards bringing a CHANGE that can EMPOWER refugees across Europe.
    </li>
    <li>
        Our humane approach and professional connections help us in moving towards our goal.
    </li>
    <li>
        We ENABLE policymakers today to build a SUSTAINABLE tomorrow first at the local level and then at European level.
    </li>
    <li>
        Our team together with our partners, and refugees themselves works towards building the right framework towards a level playing field for everyone including refugees.
    </li>
    <li>
        We IGNITE the spark of SELF-RELIANCE to setup a sustainable society.
    </li>
    <li>
        Our commitment to help the refugees in bridging their skill gap, to make them job ready and make them independent is our first step towards an inclusive society.
    </li>
</ul>

                </div>

            </div>

        </div>
</div>
</div>
<?php
include "footer.php";
?>
