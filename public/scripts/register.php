<?php

include_once 'connectdb.php';
global $dbcon;
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$pass = md5($pass);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$query = "INSERT INTO parking.user_tbl (firstName, lastName,userName, password, email) VALUES(?,?,?,?,?)";
$stmt = $dbcon->prepare($query);
$stmt->execute([$firstName,$lastName,$user,$pass,$email]);
if($stmt){
    $_SESSION['username'] = $user;
    header("location: entry.php");
}
$dbcon = null;
?>
