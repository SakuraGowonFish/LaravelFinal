<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    var list = []; //創一個空陣列將選購資料放入
    var total = 0; //本次購買的總金額


    $("#cartTotal").html(total);
    $('#page div a').click(function() {
        /* 抓取商品的資訊與購買數量 */
        var item = $(this).prev().prev().prev().text();
        var num = $(this).next().val()
        var cost = $(this).prev().prev().text() * num;
        // console.log(item);
        // console.log(cost);
        // console.log(num);

        if (num == 0) {
            alert("請先選擇「數量」再按購買唷");
        } else {
            str = "<tr><td>" + item +
                "</td><td>" + num +
                "</input></td><td>" + cost + "</td></tr>"
            $("table").append(str); // 將資料寫入暫存購物車內
            $(this).next().val(0); //清空該產品的購買數量
        }

        total += cost; //計算合計總金額
        $("#cartTotal").html(total);

        list.push(item + "," + num + "," + cost);
        console.log(list);


    });

    function pushCart() { //下單
        if (total == 0) {
            alert("您的購物車內沒有商品唷～");
        } else {
            alert("感謝您，您成功下單");
            $(".cartTable td").remove(); //清除目前購物車資料
            total = 0;
            list = [];
            $("#cartTotal").html(total);
        };


    };

    function cleanCart() { //清除目前購物車資料
        alert("您已成功清除購物車內訂單");
        $(".cartTable td").remove();
        total = 0;
        list = [];
        $("#cartTotal").html(total);
    };
</script>