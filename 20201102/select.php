<?php
require_once ("db_connect.php"); //引入基本資料檔

$sql="SELECT * FROM users";  //* 代表所有資料

$result=$conn->query($sql);
//$row=$result->fetch_assoc();
//var_dump($row);
//echo         ", 叫什麼: " .$row["name"].
//            ", 身高:".$row["height"].
//            "Cm , 體重:".$row["weight"].
//            "Kg , email:".$row["email"].
//            "<br>";
//exit;

//var_dump(); 叫出資料型態


if($result->num_rows>0){
//    echo "有東西";
    while($row=$result->fetch_assoc()){
//        var_dump($row)."<br>";
        echo 'id: '.$row["id"].
            ", 叫什麼: " .$row["name"].
            ", 身高:".$row["height"].
            "Cm , 體重:".$row["weight"].
            "Kg , email:".$row["email"].
            ", 電話幾號:".$row["phone"].
            "<br>";

    }
}
//else{
//    echo "空的阿";
//}
$conn->close();
//fetch_array()：將讀出的資料同時以數字與欄位名稱各自存一次在陣列之中，相當於同一個值會出現兩次。
//fetch_assoc()：將讀出的資料Key值設定為該欄位的欄位名稱。
//fetch_row()：將讀出的資料Key值設定為依序下去的數字。