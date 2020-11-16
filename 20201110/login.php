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
                    <div>
                        <h3 class="text-center">Login</h3>
                        <div class="text-danger text-center">
                           </div>
                        <div class="form-group">
                            <label for="account">帳號</label>
                            <input type="text" id="account" class="form-control" name="account" required>
                        </div>
                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" id="password" class="form-control" name="password" required>
                        </div>
                        <button class="btn btn-info btn-block" onclick="doLogin()">登入</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
    </script>
    <script>
        function doLogin(){
          let account =document.getElementById("account").value;
          let password =document.getElementById("password").value;
            $.ajax({
                method:"POST",
                url:"dologin.php",
                dataType:"json",
                data:{
                    account: account,
                    password: password
                }
            })
            .done(function (response){
                console.log(response)
                if(response.status==0){
                    alert(response.message);
                }else{
                    location.href="loginSuccess.php";
                }
            }).fail(function (jqXHR, textStatus){
                console.log("Request failed: "+ textStatus);
            })
        }
    </script>
</body>
</html>