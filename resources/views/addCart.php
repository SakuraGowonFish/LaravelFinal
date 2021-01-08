<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    var list = []; //創一個空陣列將選購資料放入
    var total = 0; //本次購買的總金額


    $("#cartTotal").html(total);
    $('#page div a').click(function() {
        /* 抓取商品的資訊與購買數量 */
        var id = $(this).prev().prev().prev().text();
        var item = $(this).prev().prev().prev().prev().text();
        var num = $(this).next().val()
        var cost = $(this).prev().prev().text() * num;

        if (num == 0) {
            alert("請先選擇「數量」再按購買唷");
        } else {
            str = "<tr><span class='id, hide'>" + id +
                "</span><td class='item'>" + item +
                "</td><td class='num'>" + num +
                "</td><td class='cost'>" + cost + "</td></tr>"
            $("table").append(str); // 將資料寫入暫存購物車內
            $(this).next().val(0); //清空該產品的購買數量
        }

        total += cost; //計算合計總金額
        $("#cartTotal").html(total);

        list.push(id + "," + item + "," + num + "," + cost);
        console.log(list);
    });

    function pushCart() { //下單
        //無法建置bill

        for (var i = 0; i < list.length; i++) {
            // console.log(list);
            // var id = $("tr:last-child .id").text();
            var idC = $("tr:last-child .id").text();
            var itemC = $("tr:last-child .item").text();
            var numC = $("tr:last-child .num").text()
            var costC = $("tr:last-child .cost").text();
            console.log(idC);
            console.log(itemC);
            console.log(numC);
            console.log(costC);


            var params = {
                id: list[i][0] + list[i][1],
                name: itemC,
                num: numC,
                cost: costC
            };

            itemC = "";
            numC = "";
            costC = "";

            console.log(params);
            var myUrl = "/app/Models/addToCart.php";
            $.ajax({
                url: myUrl,
                type: 'POST',
                data: params,
                async: true,
                /* 僅回傳「成功」or「失敗」的字串，所以不用特別設定回傳的資料格式 */
                //dataType: 'json',
                /* 函式中的 backData 參數：伺服器回傳的執行結果 */
                success: function(backData, jqXHR) {
                    /* 若是後端 php 正常執行，則會執行此處 */
                    // document.getElementById('page').innerHTML = backData;
                },
                error: function(textStatus) {
                    /* 若是後端 php 執行有錯誤，則會執行此處 */
                    // document.getElementById('page').innerHTML = "無法進行新增！";
                }
            });
        }


        var date = new Date();
        var yy = date.getFullYear();
        var mm = date.getDate();
        var dd = date.getDay();
        var hh = date.getHours();
        var mn = date.getMinutes();
        var ss = date.getSeconds();
        var now = yy + "-" + mm + "-" + dd + " " + hh + ":" + mn + ":" + ss;

        var bill = {
            total: total,
            now: now
        };

        var myUrlBill = "/app/Models/addToCart.php";
        $.ajax({
            url: myUrlBill,
            type: 'POST',
            data: bill,
            async: true,
            /* 僅回傳「成功」or「失敗」的字串，所以不用特別設定回傳的資料格式 */
            //dataType: 'json',
            /* 函式中的 backData 參數：伺服器回傳的執行結果 */
            success: function(backData, jqXHR) {
                /* 若是後端 php 正常執行，則會執行此處 */
                // document.getElementById('page').innerHTML = backData;
            },
            error: function(textStatus) {
                /* 若是後端 php 執行有錯誤，則會執行此處 */
                // document.getElementById('page').innerHTML = "無法進行新增！";
            }
        });

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

    $('#qaq').click(function() {



    });
</script>