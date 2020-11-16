<?php


require_once ("db_connect.php"); //引入基本資料檔

$account=$_POST["account"];
$password=$_POST["password"];


$sql="SELECT * FROM users WHERE  account ='$account'";
$result=$conn->query($sql);

if($result->num_rows >0){
    $row = $result->fetch_assoc();
    if($password == $row["password"]){
        $userData=array(
            "account"=>$account
        );
        $_SESSION["user"]=$userData;
        $data=array(
            "status"=>1,
            "message"=>"登入成功"
        );
    }else{
        $data=array(
            "status"=>0,
            "message"=>"密碼錯誤"
        );
    }

}else{
    $data=array(
        "status"=>0,
        "message"=>"帳號不存在"
    );
}
echo json_encode($data);



//$data=array(
//    "account"=>$account,
//    "password"=>$password
//);
//
//echo json_encode($data);