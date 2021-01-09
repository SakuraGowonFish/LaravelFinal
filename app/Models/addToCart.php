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
    // echo "Success!!!<br>";  //輸出資料庫連接成功
}
mysqli_set_charset($link, "utf8");  //設定查詢結果為utf8


$id = filter_input(INPUT_POST, "id");
$name = filter_input(INPUT_POST, "name");
$num = filter_input(INPUT_POST, "num");
$cost = filter_input(INPUT_POST, "cost");
$total = filter_input(INPUT_POST, "total");
$now = filter_input(INPUT_POST, "now");

//這邊將資料移動至購物車內
$sql = "INSERT INTO cart values 
    ('$id', '$name', '$num', '$cost', null)";
var_dump($sql);
mysqli_query($link, $sql);


//bill
$sql_bill = "INSERT INTO bill values 
    (null, '$total', '$now')";
var_dump($sql_bill);
mysqli_query($link, $sql_bill);
// mysqli_close($link); //關閉資料庫連接

echo "<meta http-equiv='Refresh' content='0;url=/public/food'>";