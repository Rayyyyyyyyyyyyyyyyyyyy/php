<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
<form action="get_data.php" method="get">
    <div>
        <label for="">姓名: </label><input type="text" name="name" required>
    </div>
    <div>
        <label for="">密碼: </label><input type="text" name="password" required>
    </div>
    <div>
        <label for="">年齡: </label><input type="text" name="age" required>
    </div>

    <div>
        <label for="">email: </label><input type="text" name="email">
    </div>
    <input type="submit" value="送出">
</form>
</body>
</html>