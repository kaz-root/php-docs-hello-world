<html>
<head>
    <title>DB接続検証</title>
</head>
<body>
<?php
    echo "Hello World!";

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, 'testdb01-murayama.mysql.database.azure.com', 'mysqladmin', '1qaZXsw23edCVfr4', 'test_database', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
} else {
      echo "<h2>データベース接続OK</h2>";
    }

    // MySQL接続の終了
    $conn->close();
?>
</body>
</html>