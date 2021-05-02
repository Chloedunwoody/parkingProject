<?php
include_once 'connectdb.php';
global $dbcon;
session_start();

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $pass =md5($pass);

    $query = "SELECT  * FROM parking.user_tbl WHERE userName =? AND password=?";
    $stmt = $dbcon->prepare($query);
    $stmt->execute([$user, $pass]);

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetch();

    if ($row) {
        $_SESSION['username'] = $user;
        header("location: entry.php");
        ?>
        <!--        <div style="border:1px solid #333; background-color:#fbd2d7; border-radius:5px; padding:16px;" align="center">-->
        <!--            <h4>--><?php //echo $row["id"]; ?><!--</h4>-->
        <!--            <h4>--><?php //echo $row["firstName"]; ?><!--</h4>-->
        <!--            <h4>--><?php //echo $row["lastName"]; ?><!--</h4>-->
        <!--            <h4> --><?php //echo $row["userName"]; ?><!--</h4>-->
        <!--            <h4> --><?php //echo $row["password"]; ?><!--</h4>-->
        <!--            <h4>--><?php //echo $row["email"]; ?><!--</h4>-->
        <!--        </div>-->
        <?php
    }
    else {
        $message = "Error 404: Wrong user details!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
 $dbcon = null;
 ?>