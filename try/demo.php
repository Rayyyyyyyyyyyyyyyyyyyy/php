<?php require_once ("link.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        :root{
            --font: 'Noto Sans TC', sans-serif;
            --title-size:20px;
            --in-size:16px;
            --left-text: #bdc0ba;
            --in-text:#2d2e2d
        }
        body{
            max-width: 1550px;
            margin: 0;
            padding: 0;
            background: #f6f6f6;
            font-family: var(--font);
        }
        .color{
            background: #407088;
        }

        .icon img{
            width: 100%;
            object-fit: cover;
        }
        .photo{
            width: 55px;
            height: 100px;
            margin: 0;
            padding: 0;
          }
        .photo img{
            width:100%;
            height: 100%;
            object-fit: cover;
            margin: 0;
            padding: 0;
        }
        .photo_box{
            width: 80px;
            margin: 0;
            padding: 0;
        }

        .nowrap{
            word-wrap: break-word;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        table{
            height: 680px;
            table-layout: fixed;
            white-space: nowrap;
            text-align: center;

        }
        th{
            font-weight: bold;
            color: var(--in-text);
            font-size: var(--title-size);

        }
        td {
            height: 100px;
            font-weight: normal;
            color: var(--in-text);
            font-size: var(--in-size);
        }
        .panone{
            margin: 0;
            padding: 0;
        }
        .btn{
            width: 100px;
            height: 30px;
            border-radius: 5px;
            padding: 0;
            font-size: 16px;
            font-weight: bold;

        }
        .change{
            background: #f07b3f;
            color: #000000;

        }
        .hi p{
            font-size: 25px;
            color: var(--left-text);
            font-weight: bold;
        }
        .left{

            background: #132743;

            border-radius: 5px;
            margin-right: 30px;

        }
        .line{
            width: 100px;
            border: 4px solid #d7b98e;
            border-radius: 5px;
            margin:0 auto;
        }
        .select{
            margin-top: 30px;
            font-size: 22px;
            font-weight: bold;
        }
        .select a{
            text-decoration: none;
            color: var(--left-text);
        }
        .box{
            width: 250px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px auto;
            border-radius: 5px;
        }
        .box:hover{
            background-color:rgb(64,112,136,0.5);

        }
        .new{
            background: #abedd8;
            color: #000000;
            margin-right:5px ;

        }
        .del{
            background: #d0104c;
            color: #ffffff;

        }


    </style>
</head>
<body>

    <div class="d-flex">

        <aside class="d-flex flex-column left text-center">
            <div class="hi">
                <p>HI 管理者</p>
                <div class="line"></div>
            </div>

            <div class="select">

                <a href="">
                    <div class="box">
                        <p>會員資料</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <p>訂單管理</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <p>商品</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                       <p>優惠券</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                       <p>行程</p>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <p>揪團</p>
                    </div>
                </a>

            </div>
        </aside>

        <div class="d-flex flex-column">
            <header class="navbar navbar-expand-lg navbar-dark indigo mb-4 color">

                <a class="navbar-brand" href="#">搜尋</a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="form-inline ml-auto">
                        <div class="md-form my-0">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <button href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit">Search</button>
                    </form>

                </div>

            </header>


        <table class="table text-center align-bottom overflow-auto" id="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" width="30px">  </th>
                    <th scope="col" width="30px">#</th>
                    <th scope="col" width="80px">大頭</th>
                    <th scope="col" width="80px">姓名</th>
                    <th scope="col" width="50px">性別</th>
                    <th scope="col" width="100px">密碼</th>
                    <th scope="col" width="130px">生日</th>
                    <th scope="col" width="50px">年齡</th>
                    <th scope="col" width="100px">電話</th>
                    <th scope="col" width="150px">地址</th>
                    <th scope="col" width="150px">email</th>
                    <th scope="col" width="100px">職業</th>
                    <th scope="col" width="120px">興趣</th>
                    <th scope="col" width="80px">評分</th>
                    <th scope="col" width="100px">   </th>

                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                <tr>
                    <th class="align-middle">
                        <input type="checkbox">
                    </th>
                    <th class="align-middle"><?=$row["id"]?></th>
                    <td class="align-middle photo_box">
                        <figure class="photo">
                            <img src="img/<?=$array_photo[$row["photo"]-1] ?>" alt="">
                        </figure>

                    </td>
                    <td class="align-middle"><?=$row["name"]?></td>
                    <td class="align-middle">
                        <?php
                        $gender = $row["gender"];

                        if($gender == 0){
                            echo "女";
                        }else{
                            echo "男";
                        }

                        ?>
                    </td>
                    <td class="align-middle"><?=$row["pas"]?></td>
                    <td class="nowrap align-middle"><?=$row["birth_date"]?></td>
                    <td class="align-middle"><?=birthday($row["birth_date"])?></td>
                    <td class="align-middle"><?=$row["phone"]?></td>
                    <td class="nowrap align-middle"><?=$row["address"]?></td>
                    <td class="nowrap align-middle"><?=$row["email"]?></td>
                    <td  class="align-middle"><?=$array_job[$row["job"]-1]?></td>

                    <td class="nowrap align-middle">
                        <?=$array_hobby[$row["hobby1"]-1] ?><br>
                        <?=$array_hobby[$row["hobby2"]-1] ?><br>
                        <?=$array_hobby[$row["hobby3"]-1] ?>
                    </td>
                    <td  class="align-middle"><?=$row["score"]?></td>
                    <td  class="align-middle d-flex flex-column panone">
                        <button type="button" class="btn change" id="change">修改</button>
                        <button type="button" class="del btn" id="del">刪除</button>
                    </td>
                    <?php  }}?>

                </tr>
            </tbody>
        </table>

            <div class="d-flex justify-content-end">
                <button type="button" class="new btn" id="new" onclick="getnew('update.php')">新增</button>
                <button type="button" class="del btn" id="del">刪除</button>
            </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php for($i=1; $i<=$total_page; $i++){ ?>
                    <li class="page-item <?php if($i==$page)echo "active"; ?>">
                   <a class="page-link"  id="page" href=http://localhost/小專/demo.php?page=<?=$i?>>
                       <?=$i?>
                   </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
        <script>
            function getnew(pageName){
                var req =new XMLHttpRequest();
                req.open("get","http://localhost/try/" + pageName)
                req.onload =function (){
                    var content =document.getElementById("table")
                    content.innerHTML = this.responseText
                }
                req.send()
            }


        </script>

</body>
</html>
