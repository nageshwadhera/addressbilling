<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
<?php
    session_start();
    include ('header2.php');
    if(!isset($_SESSION['nagesh']))
    {
        header("location:index.php");
    }
?>

<?php
        //WALKSCORE CODE FOR FETCHING
     function getWalkScore($lat, $lon, $address) {
      $address=urlencode($address);
      $url = "http://api.walkscore.com/score?format=json&address=$address";
      $url .= "&lat=$lat&lon=$lon&wsapikey=3902d25a5823751d4226bdac69738126";
      $str = @file_get_contents($url);
      return $str;
     }

     $lat = $_REQUEST["latitude"] ;
     $lon = $_REQUEST["longitude"];
     $address =stripslashes($_REQUEST["address"]);
     $json = getWalkScore($lat,$lon,$address);
     $walkscore=json_decode($json);
     if((int)($walkscore->walkscore)>=0&&(int)($walkscore->walkscore)<=100)
     {
         $output="<h2 style='font-family: Georgia ;padding-top:10%; '><marquee direction='ltr' behaviour=''> HEY ".$_SESSION['nagesh']." WALKSCORE OF ".$address." is ".$walkscore->walkscore."<span class='glyphicon glyphicon-heart glyphicon-heart-empty'></span> </marquee></h2>";
         echo $output;
     }
     else{

         header("location:home.php");
     }


    ?>
</div>
<div class="container">
    <a href="list.php?add=" ><button class="btn btn-success" style="margin-top: 50px; margin-left: 20px">back<span class="glyphicon glyphicon-backward"></span> </button></a>
</div>
</body>
</html>
