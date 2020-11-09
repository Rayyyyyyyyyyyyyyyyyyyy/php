<?php
session_start();
//$_SESSION["America"]="Washton D.C";
$nationData=array(
    "capital"=>"Taipei",
    "population"=>"2300萬"
);

$_SESSION["Taiwan"]=$nationData;

echo "Session set successgully!!<br>";