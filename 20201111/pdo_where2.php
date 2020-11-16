<?php
require_once "PDO_connect.php";
$stmt=$db_host->prepare("SELECT * FROM users WHERE name=?");

try{
    $stmt->execute(["Jonny"]);
    while ($row=$stmt->fetch()){
        echo "接收到的資料: <pre>";
        print_r($row["name"]);
        echo "</pre>";
    }
}catch (PDOException $e){
    echo "想幹嘛? 不給你<br/>";
    echo "Error: ".$e->getMessage()."<br/>";
    $db_host=NULL;
    exit;
}