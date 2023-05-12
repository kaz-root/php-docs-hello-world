<!DOCTYPE html>
<html>
<head>
    <title>データベース接続検証</title>
</head>
<body>
 <?php
    // MySQLサーバーの接続情報
    $host = "testdb01-murayama.mysql.database.azure.com";
    $username = "mysqladmin";
    $password = "1qaZXsw23edCVfr4";
    $dbname = "test_database";
    // MySQLサーバーへの接続
    $mysqli = new mysqli($host, $username, $password, $dbname);
    // 接続結果の出力
    if ($mysqli->connect_error) {
        echo "<h2>データベース接続NG</h2>";
    } else {
        echo "<h2>データベース接続OK</h2>";
    }
    // MySQL接続の終了
    $mysqli->close();
    ?>
</body>
</html>