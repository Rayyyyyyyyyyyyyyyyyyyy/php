<?php

require_once ("new.php"); //引入基本資料檔

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$pas=$_POST['pas'];
$birth_date=$_POST['birth_date'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$about=$_POST['about'];



$sqlup="UPDATE member SET 
name='$name',
pas='$pas', 
birth_date='$birth_date', 
phone='$phone', 
address='$address', 
email='$email', 
about='$about' 
WHERE id=$id";
$connect->query($sqlup);




$hobby1=$_POST['hobby1'];

$sql_member1="SELECT * FROM member WHERE id=$id";
$result_member1=$connect->query($sql_member1);
$row_member1=$result_member1->fetch_assoc();
$hobby_id1=$row_member1['hobby1'];


$sql_hobbyup1="UPDATE hobby SET name='$hobby1' WHERE id=$hobby_id1";
$result_hobbyup1=$connect->query($sql_hobbyup1);




$hobby2=$_POST['hobby2'];

$sql_member2="SELECT * FROM member WHERE id=$id";
$result_member2=$connect->query($sql_member2);
$row_member2=$result_member2->fetch_assoc();
$hobby_id2=$row_member2['hobby2'];

if($hobby_id2=="62"){
    $stmt2 =$connect->prepare("INSERT INTO hobby(name) VALUES(?)");
    $stmt2->bind_param('s', $hobbyname2);
    $hobbyname2=$hobby2;
    $stmt2->execute();
    

    $sqlhappy2="SELECT * FROM hobby WHERE name='$hobby2'";
    $resulthappy2=$connect->query($sqlhappy2);
    $row_happy2=$resulthappy2->fetch_assoc();
    $happy2=$row_happy2['id'];
    
 

    $sql_hobbyup2="UPDATE member SET hobby2='$happy2' WHERE id=$id";
    $r2 = $connect->query($sql_hobbyup2);
   
}else{
    $sql_hobbyup2="UPDATE hobby SET name='$hobby2' WHERE id=$hobby_id2";
    $result_hobbyup2=$connect->query($sql_hobbyup2);
    
}


$hobby3=$_POST['hobby3'];


$sql_member3="SELECT * FROM member WHERE id=$id";
$result_member3=$connect->query($sql_member3);
$row_member3=$result_member3->fetch_assoc();
$hobby_id3=$row_member3['hobby3'];

if($hobby_id3=="62"){
    $stmt3 =$connect->prepare("INSERT INTO hobby(name) VALUES(?)");
    $stmt3->bind_param('s', $hobbyname3);
    $hobbyname3=$hobby3;
    $stmt3->execute();
    

    $sqlhappy3="SELECT * FROM hobby WHERE name='$hobby3'";
    $resulthappy3=$connect->query($sqlhappy3);
    $row_happy3=$resulthappy3->fetch_assoc();
    $happy3=$row_happy3['id'];
    
 

    $sql_hobbyup3="UPDATE member SET hobby3='$happy3' WHERE id=$id";
    $r3 = $connect->query($sql_hobbyup3);
   
}else{
    
$sql_hobbyup3="UPDATE hobby SET name='$hobby3' WHERE id=$hobby_id3";
$result_hobbyup3=$connect->query($sql_hobbyup3);
    
}





$job=$_POST['job'];
$sql_job="SELECT * FROM member WHERE id=$id";
$result_job=$connect->query($sql_job);
$row_job=$result_job->fetch_assoc();
$job_id=$row_job['job'];

$sql_job="UPDATE job SET name='$job' WHERE id=$job_id";
$result_job=$connect->query($sql_job);








echo "<script> alert('更新成功');history.go(-2); </script>";


$connect->close();
