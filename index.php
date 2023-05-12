<!DOCTYPE html>
<html>
<head>
    <title>DB接続検証</title>
</head>
<body>
<?php

echo "Hello World!";

// MySQLサーバーの接続情報
$host = "testdb01-murayama.mysql.database.azure.com";
$username = "mysqladmin";
$password = "1qaZXsw23edCVfr4";
$dbname = "test_database";
// MySQLサーバーへの接続
$mysqli = new mysqli($host, $username, $password, $dbname);
// 接続エラーの確認
if ($mysqli->connect_error) {
    http_response_code(500);
    echo "NG";
} else {
    echo "OK";
}
    // MySQL接続の終了
    $mysqli->close();
    ?>
</body>
</html>