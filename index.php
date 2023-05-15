<html>
<head>
    <title>接続検証</title>
</head>
<body>
<?php
    echo "Hello World!";

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, 'singledb01-murayama.mysql.database.azure.com', 'mysqladmin@singledb01-murayama', '1qaZXsw23edCVfr4', 'database01', 3306);

    // 接続結果の出力
    if ($conn->connect_error) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    } else {
        echo "<h2>データベース接続OK</h2>";
    }

    // MySQL接続の終了
    $conn->close();
?>
</body>
</html>