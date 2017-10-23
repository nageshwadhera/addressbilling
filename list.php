<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body  style="background-image:url('images/back.jpg');">
    <?php
        session_start();
        include ("connection.php");
        include ("header2.php");
        if(!isset($_SESSION['nagesh']))
        {
            header("location:index.php");
        }
    ?>
    <div class="container">
        <!-- ADDRESS LIST-->
    <?php
        $user=$_SESSION['nagesh'];
        $qry = "select * from address where user='".$user."'";
        $result=mysqli_query($conn,$qry);
        echo "<center>";
        echo "<table name='one' class='table table-bordered table-responsive' style='color: #0f0f0f; font-size: large; margin-top: 10px; font-family: Georgia;'>";
        echo "<tr>";
        echo "<th>";
        echo "NAME";
        echo "</th>";
        echo "<th>";
        echo "ADDRESS";
        echo "</th>";
        echo "<th>";
        echo "PHONE NUMBER";
        echo "</th>";

        echo "<th>";
        echo "LATITUDE";
        echo "</th>";
        echo "<th>";
        echo "LONGITUDE";
        echo "</th>";

        echo "<th>";
        echo "STREET VIEW";
        echo "</th>";

        echo "<th>";
        echo "ADDRESS";
        echo "</th>";

        echo "<th>";
        echo "WALK SCORE";
        echo "</th>";
        echo "</tr>";

        while($data=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>";
            echo $data[0];
            echo "</td>";
            echo "<td>";
            echo $data[1];
            echo "</td>";
            echo "<td>";
            echo $data[2];
            echo "</td>";
            echo "<td>";
            echo $data[4];
            echo "</td>";
            echo "<td>";
            echo $data[5];
            echo "</td>";
            echo "<td><a href='map.php?add=$data[1]'>Street View</a></td>";
            echo "<td><a href='list.php?add=$data[1]'>Full Address</a></td>";
            echo "<td><a href='walkscore.php?address=$data[1]&latitude=$data[4]&longitude=$data[5]'>Walk Score</a></td>";
            echo "</tr>";
        }
        echo "</center>";
        $conn->close();
    ?>
    <?php
    if($_REQUEST['add']=='')
    {

    }
    else {
        include("json.php");
        if($jsond->status=='OK') {
            $address1 = $jsond->results[0]->formatted_address;
            echo "<td>";
            echo "<textarea style='background: transparent'rows='3' cols='30' readonly>$address1</textarea>";
            echo "</td>";
        }
    }
    ?>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-pI3kTVEHbAldIS8bulxJGMd4u6VvLz4&callback=initialize">
    </script>

</div>

</body>
</html>
