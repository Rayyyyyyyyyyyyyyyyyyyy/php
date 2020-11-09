<?php
session_start();


if(isset($_POST["account"]) && isset($_POST["password"])){
    require_once ("db_connect.php"); //引入基本資料檔
    $account=$_POST["account"];
    $password=$_POST["password"];
    $sql="SELECT * FROM users WHERE account='$account'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
//        echo $row["account"]."<br>";
//        echo $row["password"];
        if($password==$row["password"]){
            $userData=array(
                "account"=>$account
            );
            $_SESSION["user"]=$userData;
            unset($_SESSION["user_error"]);
            header("Location: dashboard.php");
            echo "你來了?出去!!";
        }else{
            echo "密碼不對";
            $_SESSION["user_error"]="密碼不對";
            header("Location: login.php");
        }
    }else{
        echo "你誰啊 我不認識";
        $_SESSION["user_error"]="帳號不存在";
        header("Location: login.php");
        exit();
    }
}else{
    echo "想幹嘛?";
}