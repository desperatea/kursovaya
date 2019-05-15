<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Интернет-магазин музыкальных инструментов</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
  <link href="style_list.css" rel="stylesheet" type="text/css" />
  </head>


  <body>

    <!--Шапка сайта -->
    <div id="header" style="
    width: 100%;
    height: 200px;
">
        <div id="logo"><a href="index.php"><img src="img/logo.png" style="
    width: 200px;
"></a></div>
      <nav class="top_menu">
        <ul>
          <li><a href="catalog.php?page=guitar">Гитары</a></li>
          <li><a href="vk.com">Клавишные</a></li>
          <li><a href="catalog.php?page=drums">Ударные</a></li>
          <li><a href="#">Духовые</a></li>
          <li><a href="#">Перкусионные</a></li>
          <li><a href="#">Смычковые</a></li>
          <li><a href="#">Аксессуары</a></li>

        </ul>
      </nav>
      <div class="cart">
        <img src="img/cart.png" style="width:50px;position: relative;bottom: 5px;">
        <span>Корзина</span>
      </div>
    </div>
    <div class="main_tovar">
<?php
include "include/cfg.php";
$page = $_GET['page'];
$id = $_GET['id'];
if($page == 'guitar'){

$db_table = "guitar";
}
if($page == 'sint'){
  $db_table = "sint";
}
if($page == 'drums'){
  $db_table = "drums";
}
if($page == 'wind'){
  $db_table = "wind";
}
if($page == 'percussion'){
  $db_table = "percussion";
}
if($page == 'bowed'){
  $db_table = "bowed";
}
if($page == 'other'){
  $db_table = "other";
}

$sql = mysqli_query($link, "SELECT `id`, `name`, `price`, `img`, `about` FROM `{$db_table}` WHERE id='$id'");
$row = mysqli_fetch_array($sql);
printf ('<div class="tovar_main">
    <span class="tovar_name_main"><h2 align="center">%s</h2></span>
  <img src="img/%s" align="left" height="500" style="
    margin-left: 100px;
">
  <div class="text_guitar">%s
  <span class="tovar_price_main"><p><strong>Цена: %s руб</strong></p></span>
  <p><div class="buys_main"><a href="byu.php?page='.$page.'&id=%s">Купить</a></div></div></p>

</div>',$row["name"],$row['img'],$row['about'],$row["price"],$row['id']);

?>

    </div>


        <div class="footer">


        </div>


      </body>
