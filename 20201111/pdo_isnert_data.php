<?php
require_once "PDO_connect.php";

$sql="INSERT INTO users(name, phone, email)VALUES(?,?,?)";
$stmt=$db_host->prepare($sql);
$name="Jill";
$phone="0914564616";
$email="jill@test.com";
$stmt->execute([$name, $phone, $email]);
echo "這是新的";