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
    <div class="page-banner parallax" style="background-image:url(images/os.jpg);">
        <div class="container">
            <div class="page-banner-text">
                <h1 class="block-title">Story Behind HumaneR</h1>
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
                    <p style="font-weight: bold">
                        Story Behind HumaneR
                    </p>
                    <p>
                        A feeling to be humane from the core of our heart and in our work-ethics was the premise in the making of HumaneR.
                    </p>
                    <p>
                        An undying thirst to settle down, an unflinching commitment to work, resilience to continue whatever be the circumstances, such is the spirit of the people we work with and they are called Refugees. They are ready to use all the energy they have in turn for any commitment that can show them a glorious tomorrow. The story of many refugees who are moving with or without the families trying to find shelter and hoping this new home will give them a roof that will stay on them, a beginning that can help them integrate and a chance to start a fresh and build a sustainable future.
                    </p>
                        During the process of new interactions, we ran into some unique set of talented professionals who were doctors, professors, cyber security specialists and many more. Despite great education, to our surprise they were doing some odd jobs to make ends meet. Our curiosity made us delve more into the problem when we met one cardio-surgeon importing olives from Greece and selling them in the Netherlands instead of treating people in the hospitals. We decided to interview these professionals and got to know that this jobless set of people were none other than the hapless ‘Refugees’. A person of high calibre, master’s degree or a doctorate, who was once a charm in his/her land is today sitting jobless and un-noticed in one of the Asylum seeker centres (AZCs ) of the Netherlands… Is this he/she dreamt of? Absolutely NOT!!!
<p>
                        Meeting the refugees was a coincidence but it gave some like-minded people a mission to make world a better place. It’s said that ‘Practice is better than preaching’ and journey of 1000 miles begins with a single step, and we have taken our first step by creating HumaneR. It has brought together refugees across the Netherlands under one voice and mission, as it is built by the refugees and for the refugees. We want to ensure that this practice stays ongoing and goes widespread.
</p>
                    <p>
                        HumaneR has committed itself to make Netherlands a country where refugees will not be deprived of possibilities rather it will be a country to give them a new safe, secure and self-sustaining tomorrow.  It aims to provide nation-wide awareness for the need of sustainable employment. It focuses on helping refugees who are being referred as a burden to the nation to become self-reliant. We have collaborated with government and small, medium and large businesses to explore their needs and upgrade the skills of the untapped refugee talent to make them ready for the job-market. We also emphasize on nurturing talent and creating entrepreneurs out of them by giving them training and coaching in collaboration with our partners. The movement has just started, we need support and collaborators to make this initiative a success.
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
