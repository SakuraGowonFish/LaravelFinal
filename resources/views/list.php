<?php require_once 'header.php'; ?>

<title>LIST</title>


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

mysqli_set_charset($link, "utf8");

$sql = "SELECT * FROM cart, bill"; //在test資料表中選擇所有欄位
$result = mysqli_query($link, $sql);

if ($result->num_rows > 0) {
    echo "
    <div id='page' class='container, list'>
        <div class='title'>
            <h2>CLHL List</h2>
        </div>
        <table>
            <tr>
                <th>產品編號</th>
                <th>名稱</th>
                <th>數量</th>
                <th>總價</th>
                <th>訂單編碼</th>
            </tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . 
        "</td><td>" . $row["num"] . "</td><td>" . $row["cost"] . 
        "</td><td>" . $row["billID"] .
         "</td></tr>";
    }
    echo "</table></div>";
} else {
    echo "
    <div id='page' class='container, list'>
        <div class='title'>
            <h2>目前購物車內沒有資料唷</h2>
        </div>
    </div>";
}


mysqli_close($link);
?>
<?php require_once 'footer.php' ?>