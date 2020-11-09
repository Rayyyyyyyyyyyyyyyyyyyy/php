<?php
require_once ("new.php"); //引入基本資料檔

$sql="SELECT member.* FROM member
JOIN job ON member.id = job.id";

$result=$connect->query($sql);


$sql_job="SELECT * FROM job";
$result_job=$connect->query($sql_job);

$array_job=array();


if($result_job->num_rows > 0){
    while ($row_job=$result_job->fetch_assoc()){
        array_push($array_job, $row_job["name"]);
    }
}

if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()) {

        echo $row["name"]."的職業是: ".
            $array_job[$row["job"]-1]."<br>";


    }
}