<!DOCTYPE html>
<html>
<head>
    <title>DB接続検証</title>
</head>
<body>
<?php
    echo "Hello DB!";

$link = mysql_connect('testdb01-murayama.mysql.database.azure.com', 'mysqladmin', '1qaZXsw23edCVfr4');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

$db_selected = mysql_select_db('test_database', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print('<p>uriageデータベースを選択しました。</p>');

$close_flag = mysql_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}
?>
</body>
</html>