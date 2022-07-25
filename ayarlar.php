<?php

//error_reporting(0);

$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "humaner";
try {
    $db = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }




/*
$username = "U4396391";
$password = "aVvHub#4bMZ*5JC";
$hostname = "rdbms.strato.de";
$dbname = "DB4396391";

$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "humaner";
*/
?>

