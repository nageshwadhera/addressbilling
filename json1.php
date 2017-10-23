<?php

$Parsing =$_REQUEST["addr"];
$address = str_replace(' ', '+', $Parsing);
$jsonf = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');
$jsond = json_decode($jsonf);
?>

