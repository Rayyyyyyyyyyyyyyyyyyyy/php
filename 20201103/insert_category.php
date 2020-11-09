<?php
require_once ("db_connect.php");

$stmt =$conn->prepare("INSERT INTO category(name) VALUES(?)");

$stmt->bind_param('s', $name);

$name='apple';
$stmt->execute();
$name='ball';
$stmt->execute();
$name='cat';
$stmt->execute();
$name='dog';
$stmt->execute();
$name='egg';
$stmt->execute();
$name='fish';
$stmt->execute();
$name='girl';
$stmt->execute();
$name='hat';
$stmt->execute();







$conn->close();
