<?php
    //TO CHECK WHETHER THE PROJECT IS GETTING CONNECTED TO DATABASE OR NOT
    $conn = mysqli_connect("localhost", "root",NULL,"nagesh");
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>