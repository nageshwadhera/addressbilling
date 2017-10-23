<?php
    include ("connection.php");
    session_start();
    //STARTING SESSION
    $_SESSION["nagesh"]=$_REQUEST["user"];
        //FETCHING ROWS
    $qry = "select * from user where username='".$_REQUEST["user"]."'";
    $result1=mysqli_query($conn,$qry);
    $count=0;
    while($row=mysqli_fetch_array($result1))
    {
        $count=$count+1;
    }
    $flag=0;
    if($count>0)
    {
        $flag=1;
    }
    else {
        $s = "insert into user values('" . $_REQUEST["fname"] . "' ,'" . $_REQUEST["lname"] . "','" . $_REQUEST["user"] . "','" . $_REQUEST["pwd"] . "')";

        $result1 = mysqli_query($conn, $s);
        echo "<script>window.alert('HEY CONGRATULATIONS, YOU ARE REGISTERED')</script>";
        echo "<script>document.location.href=\"home.php\"</script>";
    }
    if($flag)
    {
        echo "<script>window.alert('User already Registered')</script>";
       echo "<script>document.location.href=\"index.php\"</script>";
    }
    $conn->close();
?>