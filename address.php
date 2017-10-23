<?php
    include ("connection.php");
    session_start();
    include ("json1.php");
    $_REQUEST["fname"].=" ";
    //IF THERE ARE RIGHT CREDENTIALS THEN ONLY THE ADDRESS WOULD BE ADD ELSE IT WILL REDIRECT TO ELSE PART
    if ($jsond->status == 'OK') {

        $qry = "insert into address values('" . $_REQUEST["fname"].=$_REQUEST["lname"] . "','" . $_REQUEST["addr"] . "','" . $_REQUEST["contact"] . "','" . $_SESSION["nagesh"] . "','" . $jsond->results[0]->geometry->location->lat . "','" . $jsond->results[0]->geometry->location->lng ."','".$jsond->results[0]->formatted_address."')";
        $result = mysqli_query($conn,$qry);
        echo "<pre>";
       header("location:list.php?add=");
        echo "</pre>";
    }
    else{
        echo "<script>";
        echo "window.alert('Wrong Address')";
        echo "<script>document.location.href=\"home.php\"</script>";
        echo "</script>";

    }
    $conn->close();
?>