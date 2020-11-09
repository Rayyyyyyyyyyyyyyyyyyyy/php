<?php
require_once ("new.php"); //引入基本資料檔


$sql="SELECT * FROM member ";
$result=$connect->query($sql);
$row=$result->fetch_assoc();
$birthday=$row["birth_date"];


function birthday($mydate){
    $birth=$mydate;
    list($by,$bm,$bd)=explode('-',$birth);
    $cm=date('n');
    $cd=date('j');
    $age=date('Y')-$by-1;
    if ($cm>$bm || $cm==$bm && $cd>$bd) $age++;
    return $age;
}


echo birthday($birthday);
