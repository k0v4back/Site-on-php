<?php

if(!isset($_COOKIE['logged_user'])){
  $logo = $_SERVER['SERVER_NAME'];
  header("Location: http://$logo/cabinet");
}

?>

<?php

	include ROOT.'/views/layouts/header2.php';
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<style>
   .center {
    width: 200px; /* Ширина элемента в пикселах */
    padding: 10px; /* Поля вокруг текста */
    margin: auto; /* Выравниваем по центру */
   }
  </style>

<!-- <div class="center"><iframe src="https://money.yandex.ru/quickpay/shop-widget?writer=seller&targets=%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0%20%D1%83%D1%81%D0%BB%D1%83%D0%B3&targets-hint=&default-sum=100&button-text=12&hint=&successURL=&quickpay=shop&account=410016184855001" width="450" height="170" frameborder="0" allowtransparency="true" scrolling="no"></iframe></div> -->


<br>
                <br>
                <br>

  <?php
    $finde = R::findOne('sum', 'activ = ?', array(1));
    $finde2 = R::load('sum', $finde->id);
    $sum = $finde2->sum;
    $login = $_COOKIE['logged_user'];

?>
                <h2>Оплата рекламы(<?php echo $sum; ?>р)</h2>
                <div class="payment-main">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="payment-main-block-left">
          <div>
                  <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml"> 
            <input type="hidden" name="receiver" value="410016184855001"> 
            <input type="hidden" name="quickpay-form" value="shop"> 
            <input type="hidden" name="targets" value="Покупка рекламы на сайте grizzlyoffical.ru"> 
            <input type="hidden" name="paymentType" value="PC">
            <input type="hidden" name="successURL" value="http://www.grizzlyoffical.ru/about">
            
            <label><input style="width:15px; height:15px;" type="radio" name="paymentType" value="PC">Яндекс.Деньгами</label> 
            <label><input style="width:15px; height:15px;" type="radio" name="paymentType" value="AC">Банковской картой</label> 
            <!-- <input type="radio" class="radioBtn" style="width:15px; height:15Spx;"name="sel" id="sel_adr"> -->
            <input type="hidden" name="label" value="<?php echo $login;?>">

            <input type="hidden" name="firstname" value="<?php echo $_COOKIE['logged_user']; ?>" placeholder="Логин покупателя"> 
            <input type="hidden" name="sum" value="<?php echo $sum; ?>" placeholder="Сумма">

            <!-- <input type="hidden" name="sum" value="4568.25" data-type="number"> -->
            <input type="submit" name="pay" value="Оплатить"> 
        </form>
        </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>




<br>
<br>
<br>
<br>
<br>
<br>
<br>



<?php
						include ROOT.'/views/layouts/footer.php';
					?>

          <?php

// }
          ?>