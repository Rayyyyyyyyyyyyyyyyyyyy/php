<?php

session_start();//在此頁啟用session

unset($_SESSION['action_result']);

if(isset($_POST['delete_id'])){//確認是否有收到前台傳來的member_id陣列
    require_once("new.php");
    $page = $_POST['originPage'];//抓取原先所在的頁面地址
    $member_id = $_POST['delete_id'];//抓取delete_id陣列
    $_SESSION['action_result'] = "修改完成: <br>";
    foreach ($member_id as $value){
        $sql = "SELECT * FROM member WHERE id=$value";
        $result = $connect->query($sql);
        if($result->num_rows<1){
            $_SESSION['action_error']="操作錯誤01，請重試";//如果沒抓到資料，在session中存入錯誤訊息
            header("Location: $page");//跳轉回原先頁面
        }else{
            $member = $result->fetch_assoc();
            //確認valid的值，選擇進行刪除或復原
            ($member['valid']==0)? $sql_delete = "UPDATE member SET valid=1 WHERE id=$value" : $sql_delete = "UPDATE member SET valid=0 WHERE id=$value";
            if($connect->query($sql_delete)==TRUE){
                //若成功，回傳影響的資料
                $_SESSION['action_result'] .= "id:".$member['id']." 姓名: ".$member['name']."<br>";
                //將錯誤訊息清空
                unset($_SESSION['action_error']);
                header("Location: $page");
            }else{
                $_SESSION['action_error']="操作錯誤02，請重試";
                header("Location: $page");
            }
        }
    }
}else{
    $page = $_POST['originPage'];//抓取原先所在的頁面地址
    $_SESSION['action_error']="操作錯誤03，請重試";
    header("Location: $page");
}

////
////PDO version
////
//if(isset($_POST['delete_id'])) {
//    require_once("PDO_connect.php");
//    $member_id = $_POST['delete_id'][0];
//    $page = $_POST['delete_id'][1];
//    $sql = "SELECT * FROM member WHERE id=$member_id";
//
//    $stmt = $db_host->prepare($sql);
//
//    try {
//        $stmt->execute();
//        $rowCount = $stmt->rowCount();
//        if ($rowCount < 1) {
//            $_SESSION['action_error'] = "操作錯誤01，請重試";
//            header("Location: order_manage.php");
//        } else {
//            $member = $stmt->fetch();
//            $sql_delete = "UPDATE member SET valid=? WHERE id=?";
//            $stmt = $db_host->prepare($sql_delete);
//            try {
//                $member['valid'] == 0 ? $stmt->execute(["1", $member_id]) : $stmt->execute(["0", $member_id]);
//                $_SESSION['action_result'] = "修改完成 <br>影響內容： id:" . $member['id'] . " 姓名: " . $member['name'];
//                unset($_SESSION['action_error']);
//                header("Location: order_manage.php?page=$page");
//            } catch (PDOException $e) {
//                $_SESSION['action_error'] = "操作錯誤02，請重試";
//                header("Location: order_manage.php");
//                echo "error: " . $e->getMessage();
//                $db_host = NULL;
//                exit;
//            }
//        }
//    } catch (PDOException $e) {
//        $_SESSION['action_error'] = "操作錯誤03，請重試";
//        header("Location: order_manage.php");
//        echo "預處理陳述式執行失敗! <br>";
//        echo "error :" . $e->getMessage() . "<br>";
//        $db_host = NULL;
//        exit;
//    }
//}



?>
