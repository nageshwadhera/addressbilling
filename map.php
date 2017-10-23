<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Street View</title>
  <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="maps.css">
</head>
<body>

<div class="container">
    <?php
    session_start();
    include ("header2.php");
    if(!isset($_SESSION['nagesh']))
    {
        header("location:index.php");
    }
    ?>
    <div>
        <center><h2 style="font-family: Georgia;">STREET VIEW</h2></center>
    </div>
    <!-- MAP SIDE-->
<div id="side1" class="embed-responsive" style="height: 300px;"></div>
    <!-- STREET VIEW SIDE-->
<div id="side2" class="embed-responsive" style="height: 300px;"></div>
    <!-- STREET VIEW CODE-->
<?php
include ("json.php");
if ($jsond->status == 'OK') {
    $latitude = $jsond->results[0]->geometry->location->lat;
    $longitude = $jsond->results[0]->geometry->location->lng;
}

if ($jsond->status == 'OK') {
    if (count($jsond->status) > 1) {
        echo "multiple add found";
    }
    if (count($jsond->status) == 1) {
        if (isset($jsond->results[0]->formatted_address)) {
            if ($jsond->results[0]->formatted_address) {
                ?>
                <script>
                    function initialize() {
                        var fenway = {lat: <?php echo $latitude?>, lng:<?php echo $longitude?>};
                        var map = new google.maps.Map(document.getElementById('side1'), {
                            center: fenway,
                            zoom: 14
                        });
                        var panorama = new google.maps.StreetViewPanorama(
                            document.getElementById('side2'), {
                                position: fenway,
                                pov: {
                                    heading: 34,
                                    pitch: 10
                                }
                            });
                        map.setStreetView(panorama);
                    }
                </script>

                <?php
            }
        } else {
            echo "Wrong ";
        }
    }
} else {
    echo "Not Found";
}
?>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-pI3kTVEHbAldIS8bulxJGMd4u6VvLz4&callback=initialize">
</script>
</div>
    <div class="container">
        <a href="list.php?add=" ><button class="btn btn-success" style="margin-top: 50px; margin-left: 20px">back<span class="glyphicon glyphicon-backward"></span> </button></a>
    </div>
</body>
</html>