<?php
//JSON FILE TO FETCH ADDRESS
$Parsing =$_REQUEST["add"];
$address = str_replace(' ', '+', $Parsing);
$jsonf = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');
$jsond = json_decode($jsonf);
?>

