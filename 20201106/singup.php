<!doctype html>
<html lang="en">
<head>
    <title>註冊</title>
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
        <div class="col-lg-4">
            <h3 class="text-center">註冊</h3>
            <form action="do_sigup.php" method="post">
                <div class="form-group">
                    <lable>帳號</lable>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <lable>密碼?</lable>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <lable>再一次密碼</lable>
                    <input type="password" class="form-control" name="repassword" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="send">
                </div>
            </form>
        </div>
    </div>
</div>




</body>
</html>