<?php
require_once ("db_connect.php"); //引入基本資料檔

$now = date('Y-m-d H:i:s');

$stmt =$conn->prepare("INSERT INTO users(
name, height, weight, phone, email, create_time, valid, birth_date)
VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param('sddsssis',
    $name,
    $height,
    $weight,
    $phone,
    $email,
    $create_time,
    $valid,
    $birth_date);

$name="Jonny";
$height="174";
$weight="75";
$phone="09451434";
$email="JJJJ@mail.com";
$create_time=$now;
$valid=1;
$birth_date="1996-09-09";
$stmt->execute();

$name="kenny";
$height="154";
$weight="45";
$phone="094546434";
$email="rqwr@mail.com";
$create_time=$now;
$valid=1;
$birth_date="1998-10-29";
$stmt->execute();

$name="Bonny";
$height="174";
$weight="60";
$phone="094546434";
$email="asqwrqwr@mail.com";
$create_time=$now;
$valid=1;
$birth_date="1990-11-09";
$stmt->execute();

$conn->close();



$stmt->close();