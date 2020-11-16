<?php

require_once ("new.php"); //引入基本資料檔


if($_FILES["myFile"]["error"]==0){
    if(move_uploaded_file($_FILES["myFile"]["tmp_name"],
        "./img/".$_FILES["myFile"]["name"])){
        echo "Upload success";

    }else{
        "fail!!";
    }

}
echo "<br>";

//可以把黨名寫入資料庫
echo $_FILES["myFile"]["name"];
//配合insert


//echo "Here is some more debugging info";
//print_r($_FILES);



$new_name=$_FILES["myFile"]['name'];

$stmt =$connect->prepare("INSERT INTO photo(name) VALUES(?)");
$stmt->bind_param('s', $name);
$name="$new_name";
$stmt->execute();
