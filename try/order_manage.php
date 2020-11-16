<?php

//啟動session
session_start();

require_once ("new.php"); //引入基本資料檔


//確認是否有get page資訊
if(!isset($_GET["page"])){
    $page=1;
}
else{$page=$_GET["page"];}

//設定一頁幾項
$item_page=5;
//計算第一項id
$start=($page-1)*$item_page;

//網頁顯示用sql指令
// $sql = "SELECT order_list.*, member.id AS member_id, member.name AS member_name, main_product.id AS product_id, main_product.name AS product_name, main_product.price AS product_price 
// FROM order_list 
// JOIN member ON order_list.member_id = member.id 
// JOIN main_product ON order_list.product_id = main_product.id 
// ORDER BY order_list.id 
// LIMIT $start, $item_page";

//實作sql陣列
//將原本的文句解構
$sqlStart = "SELECT order_list.*, member.id AS member_id, member.name AS member_name, main_product.id AS product_id, main_product.name AS product_name, main_product.price AS product_price 
FROM order_list JOIN member ON order_list.member_id = member.id JOIN main_product ON order_list.product_id = main_product.id ";
$sqlWhere="";
$sqlSearch="";
$sqlOrderBy = " ORDER BY order_list.id "; //預設以id排序，後續尚可針對此處增強功能
$sqlOrder=" ASC"; //預設升冪排列，可後續增強功能
$sqlEnd = "  LIMIT $start, $item_page";

if(isset($_GET['searchArea'])){ //如果有設定搜尋字串則加入此段
    if($_GET['searchArea']!=""){ $sqlSearch =" and (member.name LIKE '%".$_GET['searchArea']."%' or main_product.name LIKE '%".$_GET['searchArea']."%')"; }
}

if(isset($_GET['gender'])){ //如果有選擇性別
    if($_GET['gender']!=2){ $sqlWhere .= " and gender = ".$_GET['gender']; }
}

if(isset($_GET['ifSingle'])){ //如果有選擇人數
    if($_GET['ifSingle']!=0){ $_GET['ifSingle']==1 ? $sqlWhere .= " and people = 1" : $sqlWhere .= " and people > 1"; }
}

//把sql字串接起來
//where 1=1 永遠為true，用來sql injection自己，用意是省去串接字串時判斷要不要加and的工作
$sqlFilter = $sqlStart." WHERE 1=1 ".$sqlWhere.$sqlSearch.$sqlOrderBy.$sqlOrder.$sqlEnd;

//網頁顯示結果
$result=$connect->query($sqlFilter);

//抓符合條件總數
$sql_allOrder = $sqlStart." WHERE 1=1 ".$sqlWhere.$sqlSearch.$sqlOrderBy;
$result_allOrder = $connect->query($sql_allOrder);
$total_item = $result_allOrder->num_rows;

//抓會員清單
$sql_member= "SELECT member.id FROM member";
$result_member=$connect->query($sql_member);
$total_member=$result_member->num_rows;

//計算總頁數
$total_page=floor($total_item/$item_page)+1;
if($total_item%$item_page==0)$total_page=$total_page-1;

if(isset($_SESSION['auto_jump'])){
    unset($_SESSION['auto_jump']);
    $location = $_SERVER['PHP_SELF']."?page=".$total_page;
    header("Location: $location");
}

if($page>$total_page){
   $page = $total_page;
   header("refresh");
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>訂單管理</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="csslink.css">
</head>

<body>
    <div class="d-flex">
        <aside class="d-flex flex-column left text-center" style="min-height: 100vh">
            <div class="hi">
                <p>HI 管理者</p>
                <div class="line"></div>
            </div>
            <div class="select d-flex flex-column">
                <a href="">
                    <div class="box">
                        <figure class="svg">
                            <img src="img/user.svg" alt="">
                        </figure>
                        <p>會員資料</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <figure class="svg">
                            <img src="img/Order.svg" alt="">
                        </figure>
                        <p>訂單管理</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <figure class="svg">
                            <img src="img/shop.svg" alt="">
                        </figure>
                        <p>商品</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <figure class="svg">
                            <img src="img/coupon.svg" alt="">
                        </figure>
                        <p>優惠券</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <figure class="svg">
                            <img src="img/schdule.svg" alt="">
                        </figure>
                        <p>行程</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <figure class="svg">
                            <img src="img/team.svg" alt="">
                        </figure>
                        <p>揪團</p>
                    </div>
                </a>
                <form action="">
                    <button type="button" class="btn btn-info">登出</button>
                </form>
            </div>
        </aside>
        <div id="replace_main" class="w-100">
        <div class="d-flex flex-column">
            <header class="navbar navbar-expand-lg navbar-dark mb-4 color">
                <div class="collapse navbar-collapse row">
                    <div class="col-4 my-1">
                        <form class="form-inline ml-auto" id="urlForm" method="get" action="">
                            <input class="form-control" type="text" name="searchArea" id="searchArea" placeholder="請輸入關鍵字" aria-label="Search" 
                            <?php
                                if(isset($_GET['searchArea'])){?>
                                    value="<?= $_GET['searchArea']?>"  <?php
                                }
                            ?> >
                            <button class="btn btn-outline-white btn-md my-0 ml-sm-2 text-white" type="submit">搜尋</button>
                        </form>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-outline-warning btn-md my-0 ml-sm-2" onclick="javascript:location.href='order_manage.php'">重設條件</button>
                    </div>
                    <div class="col-12 my-1">
                        <div class="form-check form-check-inline">
                            <input form="urlForm" class="form-check-input" type="radio" name="gender" id="genderFilter1" value="2"
                            <?php
                                if(isset($_GET['gender'])){
                                    if($_GET['gender']==2){ ?>
                                    checked
                                    <?php }
                                }
                            ?> >
                            <label class="form-check-label text-white" for="genderFilter1">全部</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input form="urlForm"  class="form-check-input" type="radio" name="gender" id="genderFilter2" value="1"
                            <?php
                                if(isset($_GET['gender'])){
                                    if($_GET['gender']==1){ ?>
                                    checked
                                    <?php }
                                }
                            ?> >
                            <label class="form-check-label text-white" for="genderFilter2">男</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input form="urlForm"  class="form-check-input" type="radio" name="gender" id="genderFilter3" value="0"
                            <?php
                                if(isset($_GET['gender'])){
                                    if($_GET['gender']==0){ ?>
                                    checked
                                    <?php }
                                }
                            ?> >
                            <label class="form-check-label text-white" for="genderFilter3">女</label>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="form-check form-check-inline">
                            <input form="urlForm"  class="form-check-input" type="radio" name="ifSingle" id="ifSingleFilter1" value="0"
                            <?php
                                if(isset($_GET['ifSingle'])){
                                    if($_GET['ifSingle']==0){ ?>
                                    checked
                                    <?php }
                                }
                            ?> >
                            <label class="form-check-label text-white" for="ifSingleFilter1">全部</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input form="urlForm"  class="form-check-input" type="radio" name="ifSingle" id="ifSingleFilter2" value="1"
                            <?php
                                if(isset($_GET['ifSingle'])){
                                    if($_GET['ifSingle']==1){ ?>
                                    checked
                                    <?php }
                                }
                            ?> >
                            <label class="form-check-label text-white" for="ifSingleFilter2">單人</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input form="urlForm"  class="form-check-input" type="radio" name="ifSingle" id="ifSingleFilter3" value="2"
                            <?php
                                if(isset($_GET['ifSingle'])){
                                    if($_GET['ifSingle']==2){ ?>
                                    checked
                                    <?php }
                                }
                            ?> >
                            <label class="form-check-label text-white" for="ifSingleFilter3">團體</label>
                        </div>
                    </div>
                </div>
            </header>
                <div class="d-flex justify-content-start" style="margin-bottom:15px ">
                    <button type="button" class="new btn" id="new" onclick="get_new('create_item.php')">新增</button>
                    <!-- 用form把按鈕包起來，並設定id，就可讓按鈕抓取外部設定同樣id的input元件值 -->
                    <form id="form_multi_delete" action="do_delete.php" method="post">
                        <input type="hidden" name="originPage" value="<?=$_SERVER['REQUEST_URI']?>">
                        <button type="submit" class="del btn" id="multi_delete" onclick="return confirm('確定要進行批次刪除？')">刪除</button>
                    </form>
                    <div class="text-right w-100">共 <?= $total_item ?> 項</div>
                </div>
                <?php //顯示回傳的session，用來確認修改的內容
                if(isset($_SESSION['action_result'])){
                    ?> <div>
                    <?php
                        echo $_SESSION['action_result'];
                        unset($_SESSION['action_result']);
                        ?>
                    </div>
                    <?php } ?>
                <table class="table text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="row" width="50">  </th>
                        <th scope="row">編號</th>
                        <th scope="row">時間</th>
                        <th scope="row">訂購者id</th>
                        <th scope="row">訂購者</th>
                        <th scope="row">商品id</th>
                        <th scope="row" width="150">商品</th>
                        <th scope="row">人數</th>
                        <th scope="row">單價</th>
                        <th scope="row">總價</th>
                        <th scope="row">付款</th>
                        <th scope="row">   </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr <?php
                        if($row['valid']==0) echo 'style="background: #FFB5B5"'
                        ?>>
                        <td class="align-middle">
                        <!--把所有check box加上form="form_id"的屬性，就可以在外部控制  -->
                        <!-- 設定判斷式，若valid==0 不可選  -->
                            <input form="form_multi_delete" name="delete_id[]" value="<?=$row["id"]?>" id="<?=$row["id"]?>" type="checkbox"
                                <?php
                                if($row["valid"]==0) echo "disabled";
                            ?>>
                        </td>
                        <td class="align-middle"><?=$row["id"]?></td>
                        <td class="align-middle"><?= str_replace(" ","<br>",$row["order_time"]) ?></td>
                        <td class="align-middle"><?=$row["member_id"]?></td>
                        <td class="align-middle"><?=$row["member_name"]?></td>
                        <td class="align-middle"><?=$row["product_id"]?></td>
                        <td class="align-middle text-wrap"><?=$row["product_name"]?></td>
                        <td class="align-middle"><?=$row["people"]?></td>
                        <td class="align-middle"><?=$row["product_price"]?></td>
                        <td class="align-middle"><?= $row["product_price"]*$row["people"] ?></td>
                        <td class="align-middle"><?=$row["pay_check"]?></td>
                        <td  class="align-middle">
                            <div class="d-flex flex-column twobtn">
                                <button type="button" class="btn change" onclick="goPage(1)">修改</button>
                                <form action="do_delete.php" method="post">
                                    <!-- name設定為同樣的陣列，可同時傳複數值給同一變數 -->
                                    <!-- 利用type = hidden 傳設定好的隱藏值 -->
                                    <!-- $_SERVER['REQUEST_URI'] 是當下的檔案名稱跟後面?的值 -->
                                    <input type="hidden" name="delete_id[]" value="<?=$row["id"]?>">
                                    <input type="hidden" name="originPage" value="<?=$_SERVER['REQUEST_URI']?>">
                                    <!-- 用return跳出確認視窗，若否則不會動作 -->
                                    <button type="submit" class="del btn" onclick="return confirm('確定要<?php
                                    if($row['valid']==0){echo "復原 ";} else {echo "刪除 ";}
                                    echo $row['name'] ?> ？')">
                                        <!-- 用valid判斷要顯示刪除還是復原 -->
                                        <?php if($row['valid']==1){echo "刪除";}else{echo "復原";} ?></button>
                                </form>
                            </div>
                        </td>
                        <?php  }}?>
                    </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php for($i=1; $i<=$total_page; $i++){ ?>
                        <li class="page-item <?php if($i==$page)echo "active"; ?>">
                            <button class="page-link"   form="urlForm" name="page" value="<?=$i?>"> <?=$i?> </button>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
        </div>
        </div>

    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script>
        //demo小幫手
        function demoHelper(){  
            //隨機訂單
            const mainRamNum = Math.random();
            let member = document.getElementById("member_select");
            member.selectedIndex = Math.floor(mainRamNum*<?=$total_member?>);
            let product = document.getElementById("product_select");
            product.selectedIndex = Math.floor(mainRamNum*50);
            let partner = document.getElementById("num_partner");
            partner.value = Math.floor(mainRamNum*4)+1;

            //自動計算同行者
            auto_partner();

            //同行者自動填表
            let now_input = document.getElementsByClassName('partnerInfo').length;
            if(now_input<1){return };
            let nameArray = ["華勝傑", "謝佩怡", "黃瓊易", "陳俞松", "陳意富", "陳信宏", "吳夙瑄", "李柏舜", "林雅婷", "吳志峰", "葉怡婷", "林政明", "林俊吉", "陳淑慧", "鐘淑慧", "白美娟", "溫亮意", "林育輝", "洪淑臻", "李愛皓", "鄭瑋倫", "彭伊韋", "王怡君", "吳佩玲", "王建治", "袁盈秀", "李向芬", "蔡雅雯", "陳麗宜", "陳思恭", "夏則瑤", "李怡婷", "楊志文", "丁軍福", "張卓芷", "陳昱信", "陳亞伯", "謝雅琪", "陳筠珠", "袁亦瑜", "高紋任", "林家凡", "駱彥廷", "黃夢容", "趙淑娟", "林雯意", "陳慧州", "林彥貞", "郭信全","陳明皓", "黃白信", "李傑州", "賴怡如", "陳彥智", "楊怡君", "劉正和", "謝瑋婷", "陳姿伶", "林慧茹", "楊秀英", "陳瑋蘋", "陳柏奇", "游紋雪", "葉延伶", "楊惠雯", "黃思瑋", "林雅鈴", "全景伶", "邱沛綺", "葉淑敏", "王彥志", "劉雪卿", "魏宛丞", "翁心輝", "孫均嬌", "駱佳蓉", "鄂佩珊", "李如芸", "倪千昆", "陳君延", "馬采筠", "李萬蘋", "曾怡文", "陳傑憲", "王士賢", "林香杰", "夏世偉", "吳麗卿", "陳政年", "陳彥博", "茅春竹"];
            const nameNum = nameArray.length;
            for(let i=1;i<=now_input;++i){
                const ramNum = Math.random();
                let ranName = nameArray[Math.floor(ramNum*nameNum)];
                const gen = ["男","女","男","女","男","女","男","女","男","女","男","女","其他"]
                let ranGender = gen[Math.floor(ramNum*13)];
                let ranAge = Math.floor(ramNum*45);
                let ranPhone =  "09"+Math.floor(ramNum*100000000);
                let ranMail = ""+Math.random().toString(36).substring(7)+"@test.com";
                console.log(ranName+" "+ranGender+" "+ranAge+" "+ranPhone+" "+ranMail);
                let attrArray = ["partnerName","partnerGender","partnerAge","partnerPhone","partnerMail"];
                let ranArray = [ranName,ranGender,ranAge,ranPhone,ranMail];
                for(let j=0;j<5;++j){
                    let target = document.getElementById(""+attrArray[j]+i);
                    target.value = ranArray[j];
                }
            }
        }

        //替換網頁內容為新增商品
        function get_new(pageName){
            let req =new XMLHttpRequest();
            req.open("get", pageName)
            req.onload =function (){
                let content =document.getElementById("replace_main")
                content.innerHTML = this.responseText
            }
            req.send()
        }

        //reset鈕 清空partner區域
        function clear_partner(){   
            let input_area = document.getElementById('partner-area');
            let now_input = document.getElementsByClassName('partnerInfo').length;
            for(let i = now_input; i >0 ; --i){
                let nodeName = "partnerInfo" + i;
                let removePartner = document.getElementById(nodeName);
                input_area.removeChild(removePartner);
            }
        }

        //自動根據人數建立同行者表格
        function auto_partner() {  
            let num_partner = document.getElementById('num_partner').value;
            let input_area = document.getElementById('partner-area');
            let now_input = document.getElementsByClassName('partnerInfo').length;
            //抓取class為partnerInfo的數量
            //alert("num_partner = " + num_partner + " now_input = " + now_input);
            const k = num_partner-1; //計算需要的input數量
            if (k > now_input) {
                const j = k - now_input;//input計算差值
                for (let i = 1; i <= j;++i) {
                    //新增一個INFO FORM
                    let newPartnerInfo = document.createElement('div');
                    newPartnerInfo.className = "partnerInfo";
                    newPartnerInfo.id = "partnerInfo" + (now_input+i);
                    //新增一個LABEL
                    let newLabel = document.createElement('label');
                    newLabel.htmlFor = "partnerName" + (now_input+i);
                    newLabel.innerText = "同行者" + (now_input+i);
                    //新增一個row
                    let newRow = document.createElement('div');
                    newRow.className = "row";
                    //換行元素
                    let newBr = document.createElement('br');
                    //將LABEL與ROW加入INFO DIV
                    newPartnerInfo.appendChild(newLabel);
                    newPartnerInfo.appendChild(newRow);
                    newPartnerInfo.appendChild(newBr);
                    //新增一個input
                    let inputName = document.createElement('input');
                    inputName.className = "mx-1 col-2 form-control";
                    inputName.name = "people" + (now_input+i)+"[]";
                    inputName.id = "partnerName" + (now_input+i);
                    inputName.type = "text";
                    inputName.placeholder = "姓名";
                    inputName.required = true;
                    //新增性別選擇
                    let inputGender = document.createElement('select');
                    inputGender.className = "mx-1 col-2 form-control";
                    inputGender.name = "people" + (now_input+i)+"[]";
                    inputGender.id = "partnerGender" + (now_input+i);
                    //新增性別選項
                    let gender1 = document.createElement('option');
                    gender1.value = "男";
                    gender1.textContent = "男";
                    let gender2 = document.createElement('option');
                    gender2.value = "女";
                    gender2.textContent = "女";
                    let gender3 = document.createElement('option');
                    gender3.value = "其他";
                    gender3.textContent = "其他";
                    //組合性別選項
                    inputGender.appendChild(gender1);
                    inputGender.appendChild(gender2);
                    inputGender.appendChild(gender3);
                    //
                    let inputAge = document.createElement('input');
                    inputAge.className = "mx-1 col-1 form-control";
                    inputAge.name = "people" + (now_input+i)+"[]";
                    inputAge.id = "partnerAge" + (now_input+i);
                    inputAge.type = "text";
                    inputAge.placeholder = "年齡";
                    inputAge.required = true;
                    //
                    let inputPhone = document.createElement('input');
                    inputPhone.className = "mx-1 col-2 form-control";
                    inputPhone.name = "people" + (now_input+i)+"[]";
                    inputPhone.id = "partnerPhone" + (now_input+i);
                    inputPhone.type = "text";
                    inputPhone.placeholder = "電話";
                    inputPhone.required = true;
                    //
                    let inputMail = document.createElement('input');
                    inputMail.className = "mx-1 col-4 form-control";
                    inputMail.name = "people" + (now_input+i)+"[]";
                    inputMail.id = "partnerMail" + (now_input+i);
                    inputMail.type = "email";
                    inputMail.placeholder = "信箱";
                    inputMail.required = true;
                    //組合row
                    newRow.appendChild(inputName);
                    newRow.appendChild(inputGender);
                    newRow.appendChild(inputAge);
                    newRow.appendChild(inputPhone);
                    newRow.appendChild(inputMail);
                    //動態新增表單區域
                    input_area.appendChild(newPartnerInfo);
                }
            }
            if( k < now_input) {
                for(let i = now_input; i > k ; --i){
                    let nodeName = "partnerInfo" + i;
                    let removePartner = document.getElementById(nodeName);
                    input_area.removeChild(removePartner);
                }
            }
        }
    </script>
</body>
</html>
