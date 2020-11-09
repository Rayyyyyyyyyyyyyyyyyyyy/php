<!doctype html>
<html lang="en">
<head>
    <title>post_form</title>
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
    <div class="col-md-4">
        <form action="post_target.php" method="post">
            <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="">birthday</label>
                <input type="date" class="form-control" name="birthday" required>
            </div>
            <div class="form-group">
                <label for="">phone</label>
                <input type="tel" class="form-control" name="phone[]">
                <input type="tel" class="form-control" name="phone[]">
                <input type="tel" class="form-control" name="phone[]">
            </div>
            <div class="form-group">
                <label for="">性別</label>
                <input type="radio" name="gender" value="男性"><label for="">男性</label>
                <input type="radio" name="gender" value="女性"><label for="">女性</label>
            </div>
            <div class="form-group">
                <select name="telecom" id="" class="form-contol">
                    <option value="中華沒用過">中華沒用過</option>
                    <option value="台灣最近越來越爛">台灣最近越來越爛</option>
                    <option value="遠傳很有距離">遠傳很有距離</option>
                </select>
            </div>
            <div class="from-group">
                <input type="checkbox" name="newsletter"> 電子報?

            </div>


            <div class="from-group">
                <input class="btn btn-info" type="submit" value="send">
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>