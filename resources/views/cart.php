<div id="cart">
    <h2 class="cTitle">購物車</h2>
    <h3>選購商品到購物車中吧</h3>
    <table class="cartTable">
        <tr>
            <th>商品</th>
            <th>數量</th>
            <th>總價</th>
        </tr>
        <tr></tr>
    </table>
    <div class="total">
        <form action="/app/Models/addToCart.php" method="post" name="food">
            <p>合計共&emsp;&emsp;</p><span id="cartTotal"></span><br>
            <input type="submit" class="pushCss" value="按我下單" onClick="pushCart()">
            <input type="button" class="cleanCss" value="按我清除" onClick="cleanCart()">
        </form>
    </div>
</div>