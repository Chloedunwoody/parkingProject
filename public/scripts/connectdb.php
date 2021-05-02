<?php
$host = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'root';
$db   = 'parking';

$dbcon = new PDO("mysql:host=$host;dbname=parking", $dbuser, $dbpass);
if (!$dbcon) {
    die('Unable to connect: ' . mysqli_connect_error());
}

