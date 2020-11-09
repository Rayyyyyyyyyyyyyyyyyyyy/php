<?php session_start();
if(isset($_SESSION["user"])){
    header("Location: dashboard.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card mt-3 p-2">
                    <form action="doLogin.php" method="post">
                    <h3 class="text-center">Login</h3>
                       <div class="text-danger text-center">
                        <?php
                        if(isset($_SESSION["user_error"])){
                            echo $_SESSION["user_error"];
                        }
                        ?></div>
                    <div class="form-group">
                        <label for="account">帳號</label>
                        <input type="text" id="account" class="form-control" name="account" required>
                    </div>
                    <div class="form-group">
                        <label for="password">密碼</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                    <button class="btn btn-info btn-block">登入</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>