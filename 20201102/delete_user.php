    <?php
//        require_once ("db_connect.php");
$sql="DELETE FROM users WHERE id=24";
if($conn->query($sql)===TRUE){
    echo "不見了";
}else{
    "歪了".$conn->error;
}
    $conn->close();

//知道就好 不要亂刪