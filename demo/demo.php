<?php 
require_once ("new.php"); //引入基本資料檔

if(!isset($_GET["page"])){
    $page=1;
} else{
    $page=$_GET["page"];
}


$member_page=5;
$start=($page-1)*$member_page;



if(isset($_GET['search_text'])){
    $search=$_GET['search_text'];

      
    $sql="SELECT member.* FROM member 
    WHERE valid=1 AND (name LIKE '%".$search."%' OR address LIKE '%".$search."%' OR birth_date LIKE '%".$search."%' OR gender LIKE '%".$search."%') LIMIT $start, $member_page";
    
   
}else{
    $sql="SELECT member.* FROM member
    JOIN hobby 
    ON member.hobby1 = hobby.id 
    AND member.hobby2 = hobby.id 
    OR member.hobby3 = hobby.id
    JOIN job ON member.job = job.id
    JOIN photo ON member.photo = photo.id
    WHERE valid=1 
    LIMIT $start, $member_page";
}
$result=$connect->query($sql);



if(isset($search)){
    $sql_member="SELECT member.* FROM member 
    WHERE valid=1 AND (name LIKE '%".$search."%' OR address LIKE '%".$search."%' OR birth_date LIKE '%".$search."%' OR gender LIKE '%".$search."%')";

}else{
    $sql_member="SELECT member.id FROM member WHERE valid=1";

}

$result_member=$connect->query($sql_member);
$total_member=$result_member->num_rows;

$total_page=floor($total_member/$member_page)+1;
if($total_member%$member_page==0)$total_page=$total_page-1;

$first_member=($page-1)*$member_page+1;

$last_member=$page*$member_page;
if($last_member>=$total_member)$last_member=$total_member;


$sql_hobby="SELECT * FROM hobby";
$result_hobby=$connect->query($sql_hobby);

$array_hobby=array();


$sql_job="SELECT * FROM job";
$result_job=$connect->query($sql_job);

$array_job=array();


$sql_photo="SELECT * FROM photo";
$result_photo=$connect->query($sql_photo);

$array_photo=array();


if($result_hobby->num_rows > 0){
    while ($row_hobby=$result_hobby->fetch_assoc()){
        array_push($array_hobby, $row_hobby["name"]);
    }
}
if($result_job->num_rows > 0){
    while ($row_job=$result_job->fetch_assoc()){
        array_push($array_job, $row_job["name"]);
    }
}

if($result_photo->num_rows >0){
    while ($row_photo=$result_photo->fetch_assoc()){
        array_push($array_photo, $row_photo["name"]);
    }
}

function birthday($mydate){
    $birth=$mydate;
    list($by,$bm,$bd)=explode('-',$birth);
    $cm=date('n');
    $cd=date('j');
    $age=date('Y')-$by-1;
    if ($cm>$bm || $cm==$bm && $cd>$bd) $age++;
    return $age;
} ?>

<!doctype html>
<html lang="en">
<head>
    <title>demo</title>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="csslink.css">

    <style>

    </style>
</head>
<body>

    <div class="d-flex">

        <aside class="d-flex flex-column  left text-center">
            <div class="hi">
                <p>HI 管理者</p>
                <div class="line"></div>
            </div>

            <div class="select d-flex flex-column">

                <a href="demo.php">
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
                    <input type="submit" name="button" class="btn btn-info" id="log_out" value="登出">
                </form>
            </div>
        </aside>

        <div class="d-flex flex-column">
                <header class="navbar navbar-expand-lg navbar-dark indigo mb-4 color" style="width: 1375px">
                    <div class="collapse navbar-collapse row d-flex" >
                        <form class="col-4 my-1 d-flex" method="get" action="">
                           
                    
                     
                            <input type="text" id="search_text" class="form-control" name="search_text" placeholder="請輸入搜尋文字" 
                            <?php
                                if(isset($_GET['search_text'])){?>
                                    value="<?= $_GET['search_text']?>"  <?php
                                }
                            ?> >
                  
                            <button type="submit" class="btn btn-primary my-1 mx-2">搜尋</button> 
                         
                        
                            
                        </form>
                         
                    </div>
                        
                </header>
                <div id="search_result"></div>
            <span id="change">
                <div class="d-flex justify-content-between" style="margin-bottom:15px;   height: 40px; ">

                    <div class="d-flex">
                            <input type="submit" name="button"  class="new btn" id="get_new" onclick="newmember()" value="新增">
                    
                        <form action="do_delete.php" id="form_multi_delete" method="post">
                            <input type="hidden" name="originPage" value="<?=$_SERVER['REQUEST_URI']?>">
                            <button type="submit" class="del btn" id="multi_delete" onclick="return confirm('確定要進行批次刪除？')">刪除</button>
                        </form>
                    </div>
                    
             
                </div>
                

                        <table class="table text-center align-bottom overflow-auto" id="table">
                            <thead class="thead-dark">
                                <tr>

                                    <th class="px-0" width="80px">#</th>
                                    <th class="px-0" width="80px">大頭</th>
                                    <th class="px-0" width="75px">姓名</th>
                                    <th class="px-0" width="80px">性別</th>
                                    <!-- <th class="px-0" width="100px">密碼</th> -->
                                    <th class="px-0" width="120px">生日</th>
                                    <th class="px-0" width="50px">年齡</th>
                                    <th class="px-0" width="100px">電話</th>
                                    <th class="px-0" width="150px">地址</th>
                                    <th class="px-0" width="150px">email</th>
                                    <th class="px-0" width="100px">職業</th>
                                    <th class="px-0" width="150px">興趣</th>
                                    <th class="px-0" width="70px">評分</th>
                                    <th class="px-0" width="100px">   </th>

                                </tr>
                            </thead>
                        
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                <tr>
                             
                            
                                    <th class="align-middle px-0">
                                        
                                        <input name="delete_id[]" id="<?=$row["id"]?>" form="form_multi_delete" type="checkbox" value="<?=$row["id"]?>" 
                                        <?php
                                            if($row["valid"]==0) echo "disabled";
                                        ?>>
                                        <label for="<?=$row["id"]?>" style="margin:0 5px"><?=$row["id"]?></label>
                                
                                    </th>



                                    <td class="photo_box align-middle py-0">
                                        <figure class="photo">
                                            <img src="img/<?=$array_photo[$row["photo"]-1] ?>" alt="">
                                        </figure>

                                    </td>
                                    <td class="align-middle"><?=$row["name"]?></td>
                                    <td class="align-middle"><?=$row["gender"]?></td>

                                
                                    <!-- <td class="align-middle px-0">
                                        <?=$row["pas"]?>
                                    </td> -->
                                    <td class="nowrap align-middle">
                                        <?=$row["birth_date"]?>
                                    </td>
                                    <td class="align-middle px-0">
                                        <?=birthday($row["birth_date"])?>
                                    </td>
                                    <td class="align-middle px-0">
                                        <?=$row["phone"]?>
                                    </td>
   
                                    <td class="align-middle px-1" style="white-space:inherit">
                                        <?=$row["address"]?>
                                    </td>
                                    <td class="nowrap align-middle">
                                        <?=$row["email"]?>
                                    </td>
                                    <td class="align-middle px-1">
                                        <?=$array_job[$row["job"]-1]?>
                                    </td>

                                    <td class="nowrap align-middle px-1">
                                        <?=$array_hobby[$row["hobby1"]-1] ?><br>
                                        <?=$array_hobby[$row["hobby2"]-1] ?><br>
                                        <?=$array_hobby[$row["hobby3"]-1] ?>
                                    </td>
                                    <td  class="align-middle"><?=$row["score"]?></td>
                                    <td  class="align-middle">
                                        <div class="d-flex flex-column twobtn">

                                            <form action="about.php" method="post">
                                                <input type="hidden" name="update" value="<?=$row['id']?>">
                                                <input type="submit" name="" class="btn change" value="修改">
                                            </form>

                                   

                                            <form action="do_delete.php" method="post">
                                        
                                                 <input type="hidden" name="delete_id[]" value="<?=$row["id"]?>">
                                                <input type="hidden" name="originPage" value="<?=$_SERVER['REQUEST_URI']?>">
                                                
                                                <button type="submit" class="del btn" onclick="return confirm('確定要<?php
                                                if($row["valid"]==0){echo "復原 ";}else{echo "刪除 ";}
                                                echo $row["name"] ?> ？')">
                                            
                                                        <?php if($row['valid']==1){echo "刪除";}else{echo "復原";} ?></button>
                                            </form>

                                        </div>
                                    </td>
                                        <?php  }}?>

                                </tr>

                            </tbody>
                        </table>


                <nav id="page" aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php for($i=1; $i<=$total_page; $i++){ ?>
                            <li class="page-item <?php if($i==$page)echo "active"; ?>">
                            <a class="page-link" href="<?php
                            if(isset($search)){
                                    echo "demo.php?page=".$i."&search_text=".$search;                   
                            }else{
                                echo "demo.php?page=".$i;
                            }
                            
                            ?>"><?=$i?></a>

                            </li>
                        <?php } ?>
                    </ul>
                </nav>
         
            </span>

            <span id="show" class="noshow">
                <form action="pdo_isnert_data.php" method="post" enctype="multipart/form-data">
                    <div class="row">

                        <ul>
                        <li class="form-group">
                            <small id="passwordHelpInline" class="text-muted">
                                大頭照
                            </small>
                            <div class="form-group">
                                <input type="file" name="myFile">
                            </div>
                            </li>
                            <li class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" name="name" id="name" value="" required>
                            </li>
                            <li class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control mx-sm-2" id="email" name="email" required>
                                <small id="passwordHelpInline" class="text-muted">
                                就是帳號
                                </small>
                            </li>
                            <li class="form-group">
                                <label for="password">密碼:</label>
                                <input type="password" value="" class="form-control mx-sm-2" name="pas" id="password" pattern="[a-zA-Z0-9]{8,}" required>
                                <small id="passwordHelpInline" class="text-muted">
                                    要8個字母大小寫含數字
                                </small>
                            </li>
                            <li class="custom-control custom-radio custom-control-inline form-group">
                                <input type="radio" id="male" name="gender" value="男" class="custom-control-input">
                                <label class="custom-control-label" for="male">男</label>
                            </li>
                            <li class="custom-control custom-radio custom-control-inline form-group">
                                <input type="radio" id="female" name="gender" value="女" class="custom-control-input">
                                <label class="custom-control-label" for="female">女</label>
                            </li>

                        </ul>
                        <ul>
                            <li class="form-group">
                            <label for="job">職業</label>
                            <input type="text" value="" class="form-control" name="job" id="job" required>
                            </li>
                            <li class="form-group">
                                <label for="birth">生日</label>
                                <input type="date" value="1990-01-01" class="form-control" name="birth_date" id="birth" required>
                            </li>
                            <li class="form-group">
                                <label for="phone">電話</label>
                                <input type="text" value="" class="form-control" name="phone" id="phone" pattern="09\d{2}\-?\d{3}\-?\d{3}" required>
                            </li>
                            <li class="form-group">
                                <label for="address">地址</label>
                                <input type="text" value="" class="form-control" name="address" id="address" placeholder="你住哪裡呀?" required>
                            </li>
                        </ul>

                    </div>
                    
                        <input type="submit" name="getnew" class="new btn btn-info" value="新增">
                        <input type="reset" class="new btn btn-info">
                </form>
            </span>
       
  
<script>

    function newmember(){
        let chang = document.getElementById('change')
        let show = document.getElementById('show')
    if(change.style.display = "block"){
        change.style.display = "none"
        show.style.display = "block"
        }

    }


</script>
<!-- <script>

Array.from(cloneSelect.children).forEach( child =>{
                if(child.innerText.match(searchStr)){
                    filterSelect.appendChild(child.cloneNode(true));
                 }
            })
</script> -->

   

</body>
</html>
