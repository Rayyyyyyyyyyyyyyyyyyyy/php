<?php
require_once "PDO_connect.php";

$stmt=$db_host->prepare("SELECT * FROM member WHERE id=:id");
$stmt->execute(array("id"=>$_POST['update']));


$stmt_all=$db_host->prepare(
    "SELECT member.* FROM member
    JOIN hobby 
    ON member.hobby1 = hobby.id 
    AND member.hobby2 = hobby.id 
    OR member.hobby3 = hobby.id
    JOIN job ON member.job = job.id
    JOIN photo ON member.photo = photo.id");
    $sql_photo="SELECT * FROM photo";
    $stmt_photo=$db_host->prepare($sql_photo);

    $sql_job="SELECT * FROM job";
    $stmt_job=$db_host->prepare($sql_job);

    $sql_hobby="SELECT * FROM hobby";
    $stmt_hobby=$db_host->prepare($sql_hobby);

    try {
        $stmt_all->execute();

        $stmt_photo->execute();
            $row_photo=array();

        $stmt_job->execute();
            $row_job=array();

        $stmt_hobby->execute();
            $row_hobby=array();

            while ($hobby_list=$stmt_hobby->fetch()){
                array_push($row_hobby, $hobby_list["name"]);
            }
            while ($job_list=$stmt_job->fetch()) {
                array_push($row_job, $job_list["name"]);
            }
            while ($photo_list=$stmt_photo->fetch()){
                array_push($row_photo, $photo_list["name"]);
            }
        
     
    }catch(PDOException $e){
        echo "預處理陳述式執行失敗！ <br/>";
        echo "Error: " . $e->getMessage() . "<br/>";
        $db_host = NULL;
        exit;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>about</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="csslink.css">
    <style>
        body{
            background: #eee;
        }
        .star-box{
            width: 350px;
        }
 
        .stars-bg{
            position: relative;
            display: inline-block;
            height: 19px;
            width: 157px;
            background: url(img/star.jpg) 0 0;
        }
        .star-active{
            position: absolute;
            left: 0;
            top: 0;
            display: block;
            height: 100%;
            background: url(img/star.jpg) 0 -24px;
        }
      
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
     

            <div class="d-flex flex-column mt-5">
            
                    

                        <div id="update mx-1">
                            <form action="update.php" method="post" id="upform">
                                <div class="row mx-1">
                                    <?php
                                        while ($row = $stmt->fetch()) {
                                    ?>

                                    <div class="d-flex flex-column star-box">
                                        <figure class="photobox d-block">

                                            <img src="img/<?=$row_photo[$row["photo"]-1] ?>" alt="">
                                        </figure>
                                        <div class="star-eval">
                                            <span class="stars-bg">
                                                <i class="star-active" style="width:calc(<?=$row['score']?> / 5 * 100% )"></i>
                                            </span>
                                            <span class="right-txt"><b><?=$row['score']?></b>分</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column">
                                        <div class="d-flex">

                                            <ul>
                                            <input type="hidden" name="id" value="<?=$row['id']?>">
                                              
                                        
                                                <li class="form-group">
                                                    <label for="name">姓名</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="<?=$row['name']?>">
                                                </li>
                                                <li class="form-group">
                                                    <label for="email">帳號:</label>
                                                    <input type="text" class="form-control mx-sm-2" id="email" name="email" value="<?=$row['email']?>">
                                                </li>
                                                <li class="form-group">
                                                    <label for="password">密碼:</label>
                                                    <input type="text" value="<?=$row['pas']?>" class="form-control mx-sm-2" name="pas" id="password">
                                                </li>
                                                <li class="custom-control custom-radio custom-control-inline form-group">
                                                    <span style="font-weight: bold;">
                                                        <?=$row['gender']?>
                                                    </span>
                                                </li>
                                            
                                                <li class="form-group">
                                                    <label for="about">自我介紹:</label><br>
                                                    <textarea name="about" dirname="explanation.dir" style="height: 350px;" class="form-control" id="about"><?=$row["about"]?></textarea>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li class="form-group">
                                                    <label for="birth">生日</label>
                                                    <input type="date" value="<?=$row['birth_date']?>" class="form-control" name="birth_date" id="birth">
                                                </li>
                                                <li class="form-group">
                                                    <label for="phone">電話</label>
                                                    <input type="tel" class="form-control" name="phone" id="phone" value="<?=$row['phone']?>">
                                                </li>
                                                <li class="form-group">
                                                    <label for="address">地址</label>
                                                    <textarea name="address" dirname="explanation.dir" style="height: 100px;" class="form-control" id="address"><?=$row['address']?>
                                                    </textarea>
                                                </li>
                                                <li class="form-group">
                                                    <label for="job">職業</label>
                                                    <input type="text" value="<?=$row_job[$row["job"]-1]?>" class="form-control" name="job" id="job">
                                                </li>
                                                <li class="form-group">
                                                    <label for="hobby1">興趣1</label>
                                                    <input type="text" value="<?=$row_hobby[$row["hobby1"]-1] ?>" class="form-control" name="hobby1" id="hobby1">
                                                </li>
                                                <li class="form-group">
                                                    <label for="hobby2">興趣2</label>
                                                    <input type="text" value="<?=$row_hobby[$row["hobby2"]-1] ?>" class="form-control" name="hobby2" id="hobby2">
                                                </li>
                                                <li class="form-group">
                                                    <label for="hobby3">興趣3</label>
                                                    <input type="text" value="<?=$row_hobby[$row["hobby3"]-1] ?>" class="form-control" name="hobby3" id="hobby3">
                                                </li>
                                            </ul>

                                        </div>
                     
                                                <?php }?>
                                        
                                    </div>
                                </div>     

                        
                            </form>   
                                    <div class="d-flex">
                                           
                                     
                                            <button type="submit" class="btn change mx-2" form="upform" name="update">修改</button>
                                            
                                        
                                            <button class="btn new" id="back" onclick="back()">返回</button>
                                        

                                    </div>

                                   
                            
                     
                        </div>
            </div>
        </div>
        <script>
            function back(){
                history.go(-1)
            }
        </script>
  </body>
</html>