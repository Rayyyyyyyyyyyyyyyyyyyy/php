<?php
require_once "PDO_connect.php";




$sql="INSERT INTO member(
        name,
        pas,
        gender,
        birth_date,
        phone,
        address,
        email
        )
        VALUES(?, ?, ?, ?, ?, ?, ?)";

$stmt=$db_host->prepare($sql);
$name= $_POST["name"];
$pas= $_POST["pas"];
$gender=$_POST["gender"];
$birth_date=$_POST["birth_date"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"];
$stmt->execute([$name, $pas, $gender, $birth_date, $phone, $address, $email]);



echo "<script> alert('新增了');history.go(-1);</script>";


