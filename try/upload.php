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
        <form action="doupload.php" method="post" enctype="multipart/form-data">
            <div class="py-2">
                請選擇要上傳的檔案
            </div>
            <div class="form-group">
            <input type="file" name="myFile">
            </div>
            <input type="submit" class="btn btn-info" value="upload">
        </form>
    </div>





</body>
</html>