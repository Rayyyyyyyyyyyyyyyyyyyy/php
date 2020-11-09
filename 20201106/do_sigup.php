<?php



if(!isset($_POST["name"])){
    echo "不要亂來";
    exit();
}

require_once ("db_connect.php"); //引入基本資料檔

$account=$_POST["name"];

$sql="SELECT account FROM users WHERE account='$account'";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo "有了";
    exit();
}



$name=$_POST["name"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

if($password!=$repassword){
    echo "不一樣";
}


$stmt=$conn->prepare("INSERT INTO users(account, password) VALUES(?, ?)");
$stmt->bind_param('ss', $user_account, $user_password);

$user_account=$account;
$user_password=$password;
$stmt->execute();
