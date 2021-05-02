<?php
//define connection
$host = 'localhost:3306';
$user = 'root';
$pass = 'root';
$db   = 'parking';

//connect
$dbcon = mysqli_connect($host,$user,$pass,$db);

//check for errors in connection
if(! $dbcon){
    die('Unable to connect') ;
}
else{
    echo 'Successfully Connected <br>';
}

//build query
$tblCreate ="
CREATE TABLE IF NOT EXISTS USER_TBL (
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
firstName VARCHAR(125),
lastName VARCHAR(125),
userName VARCHAR(125) NOT NULL,
password VARCHAR(300) NOT NULL,
email VARCHAR(125))
";

//check if tabled created

if(mysqli_query($dbcon, $tblCreate)){
    echo "Creation successful<br>";
}
else{
    echo "An error has occurred: " . $dbcon-> error;
}
//close connection
mysqli_close($dbcon);


?>

