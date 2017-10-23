<?php
    //QUERY EXECUTED TO DELETE THE ADDRESS
    include ("connection.php");
    session_start();
    $qry = "delete from address WHERE name='".$_REQUEST["name"]."'and user='".$_SESSION['nagesh']."'";
    echo $qry;
    $result = mysqli_query($conn, $qry);
    header("location:home.php");
?>