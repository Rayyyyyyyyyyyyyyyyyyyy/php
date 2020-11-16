
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "sl0c1219";
        $dbname = "test";

        try {
            $db_host = new PDO(
                "mysql:host={$servername};dbname={$dbname};charset=utf8",
                $username,
                $password
            );
        } catch (PDOException $e) {
            echo "資料庫連接失敗！ <br/>";
            echo "Error: " . $e->getMessage() . "<br/>";
            exit;
        }
        
        // echo "資料庫連結成功！ <br/>";
        // $db_host=null;

    ?>