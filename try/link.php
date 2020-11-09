<?php
require_once ("new.php"); //引入基本資料檔

if(!isset($_GET["page"])){
    $page=1;
} else{
    $page=$_GET["page"];
}

$member_page=5;
$start=($page-1)*$member_page;


$sql="SELECT member.* FROM member
JOIN hobby 
ON member.hobby1 = hobby.id 
AND member.hobby2 = hobby.id 
OR member.hobby3 = hobby.id
JOIN job ON member.job = job.id
JOIN photo ON member.photo = photo.id
LIMIT $start, $member_page";

$result=$connect->query($sql);


$sql_member="SELECT member.id FROM member";
$result_member=$connect->query($sql_member);
$total_member=$result_member->num_rows;


$total_page=floor($total_member/$member_page)+1;
if($total_member%$member_page==0)$total_page=$total_page-1;

$first_member=($page-1)*$member_page+1;

$last_member=$page*$member_page;
if($last_member>=$total_member)$last_member=$total_member;





$sql_hobby="SELECT * FROM hobby";
$result_hobby=$connect->query($sql_hobby);

$array_hobby=array();


$sql_job="SELECT * FROM job";
$result_job=$connect->query($sql_job);

$array_job=array();


$sql_photo="SELECT * FROM photo";
$result_photo=$connect->query($sql_photo);

$array_photo=array();


if($result_hobby->num_rows > 0){
    while ($row_hobby=$result_hobby->fetch_assoc()){
        array_push($array_hobby, $row_hobby["name"]);
    }
}
if($result_job->num_rows > 0){
    while ($row_job=$result_job->fetch_assoc()){
        array_push($array_job, $row_job["name"]);
    }
}

if($result_photo->num_rows >0){
    while ($row_photo=$result_photo->fetch_assoc()){
        array_push($array_photo, $row_photo["name"]);
    }
}

function birthday($mydate){
    $birth=$mydate;
    list($by,$bm,$bd)=explode('-',$birth);
    $cm=date('n');
    $cd=date('j');
    $age=date('Y')-$by-1;
    if ($cm>$bm || $cm==$bm && $cd>$bd) $age++;
    return $age;
}





?>