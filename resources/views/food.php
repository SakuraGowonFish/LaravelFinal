<?php require_once 'header.php'; ?>

<title>FOOD</title>



<div id="page" class="container">
  <div class="title">
    <h2>CLHL Food Restaurant</h2>
  </div>
  <form action="addToCart.php" method="post" name="food">
    <div class="boxA">
      <div class="box">
        <img src="/resources/images/food/南瓜咖哩魚片.jpg" width="320" height="180" alt="" />
        <h3>南瓜咖哩魚片</h3>
        <span class="hide">F1</span>
        <span class="cost" >120</span>
        <p>香濃咖哩搭配新鮮魚肉，<br />濃郁綿厚口感在您口中爆開。</p>
        <a class="button" onclick="">購買</a>
        <input type="number" min='0' name='food1'>
      </div>
      <div class="box">
        <img src="/resources/images/food/香煎鯧魚.jpg" width="320" height="180" alt="" />
        <h3>香煎鯧魚</h3>
        <span class="hide">F2</span>
        <span class="cost">100</span>
        <p>用最單純的料理方式，<br />讓您身體無負擔。</p>
        <a class="button" onclick="">購買</a>
        <input type="number" min='0' name='food2'>
      </div>
    </div>
    <div class="boxB">
      <div class="box">
        <img src="/resources/images/food/泰式烤檸檬魚.jpg" width="320" height="180" alt="" />
        <h3>泰式烤檸檬魚</h3>
        <span class="hide">F3</span>
        <span class="cost">120</span>
        <p>酸辣泰式口味與新鮮香魚的組合，<br />讓您開胃再來一碗飯。</p>
        <a class="button" onclick="">購買</a>
        <input type="number" min='0' name='food3'>
      </div>
      <div class="box">
        <img src="/resources/images/food/海鮮拼盤_1.jpg" width="320" height="180" alt="" />
        <h3>海鮮拼盤</h3>
        <span class="hide">F4</span>
        <span class="cost">200</span>
        <p>來自大海的佳餚，<br />各種海鮮任您挑選。</p>
        <a class="button" onclick="">購買</a>
        <input type="number" min='0' min='0' name='food4'>
      </div>
    </div>
    <div class="boxC">
      <div class="box">
        <img src="/resources/images/food/韓式大將海鮮鍋.jpg" width="320" height="180" alt="" />
        <h3>韓式大醬海鮮鍋</h3>
        <span class="hide">F5</span>
        <span class="cost">150</span>
        <p>來自韓國道地的風味，<br />讓您回味無窮。</p>
        <a class="button" onclick="">購買</a>
        <input type="number" min='0' name='food5'>
      </div>
      <div class="box">
        <img src="/resources/images/food/海鮮煎餅.jpg" width="320" height="180" alt="" />
        <h3>海鮮煎餅</h3>
        <span class="hide">F6</span>
        <span class="cost">120</span>
        <p>道地韓式風味，<br />口中像是有大海一樣唷！</p>
        <a class="button" onclick="">購買</a>
        <input type="number" min='0' name='food6' id="ttst">
      </div>
    </div>
  </form>
</div>


<?php require_once 'cart.php' ?>
<?php require_once 'footer.php' ?>
<?php require_once 'addCart.php' ?>

