<?php


        //LOGIN CHECK THAT WHETHER A USER ENTERED RIGHT CREDENTIALS OR NOT
        include("connection.php");
        $c = 0;
        $sql = "SELECT * FROM user WHERE username='" . $_REQUEST["user"] . "' and password='" . $_REQUEST["pwd"] . "'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $c += 1;
        }
        if ($c >= 1) {
            session_start();
            $_SESSION['nagesh'] = $_REQUEST['user'];
            header('Location:home.php');


        } else {
            echo "<script>window.alert('Enter Correct Password')</script>";
            echo "<script>document.location.href=\"index.php\"</script>";
        }
        $conn->close();

?>