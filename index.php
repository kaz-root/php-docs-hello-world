<html>
<head>
    <title>接続検証</title>
</head>
<body>
<?php
    echo "Hello Azure!";

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, 'testdb01-murayama.mysql.database.azure.com', 'mysqladmin', '1qaZXsw23edCVfr4', 3306, NULL, MYSQLI_CLIENT_SSL);

    // 接続結果の出力
    if ($conn->connect_error) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    } 

    echo "<h2>データベース接続OK</h2>";
    
    // MySQL接続の終了
    $conn->close();
?>
</body>
</html>