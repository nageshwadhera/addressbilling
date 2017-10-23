<?php
session_start();
        //changing password from user table
include ("connection.php");
    $qry="update USER set firstname='".$_REQUEST['fname']."',lastname='".$_REQUEST['lname']."',password='".$_REQUEST['pwd']."' WHERE USERNAME='".$_SESSION['nagesh']."'";

    $result=mysqli_query($conn,$qry);
    header("location:home.php");
?>
