<?php

header("Content-Type:text/html; charset=utf-8");
define('DB_Server', 'localhost');       //資料庫主機
define('DB_User', 'root');              //資料庫使用者
define('DB_Password', '');              //資料庫使用者密碼
define('DB_Database', 'final');       //資料庫名稱
//資料庫連接
$link = mysqli_connect(DB_Server, DB_User, DB_Password, DB_Database);
/* 檢查是否連接失敗 */
if (!$link) {
    die("連接失敗" . mysqli_connect_error()); //輸出資料庫連接錯誤
} else {
    echo "Success!!!<br>";  //輸出資料庫連接成功
}
mysqli_set_charset($link, "utf8");  //設定查詢結果為utf8


// $name = list[0];
// $num = list[1];
// $total = list[2];

// $food1 = $_POST["food1"];

$engWord = filter_input(INPUT_POST, "engWord");
$chiWord = filter_input(INPUT_POST, "chiWord");
$owner = filter_input(INPUT_POST, "owner");
$count = filter_input(INPUT_POST, "count");

$sql = "INSERT INTO cart (id, name, num, cost)values 
    (1, '南瓜咖哩魚片', 1, 120)";
var_dump($sql);
mysqli_query($link, $sql);
echo "<p>新增成功!</p>";



echo "<meta http-equiv='Refresh' content='0;url=/public/food'>";
?>