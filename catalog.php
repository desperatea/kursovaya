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
    <div id="header">
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

    <div class="about_guitar">
      <img src="img/page_guitar.jpg" aling="left" style="
    margin-top: 50px;
    margin-left: 30px;
">
      <span class="text_guitar">

Гитара - самый популярный музыкальный инструмент в мире. Сеть магазинов JAM предлагает Вам широчайший ассортимент гитар - более 500 наименований: классические гитары для учеников музыкальных школ и училищ, акустические (вестерн, дредноут, джамбо) гитары с пъезозвукоснимателями и без них для любителей песни под гитару, тревел и сайлент гитары, электрогитары от блюза до нюметала (шести, семи и даже восьмиструнные!), бас-гитары для начинающих, продолжающих и профессионалов, укулеле, резонаторы, мандолины. У нас Вы можете купить гитары для любых задач, любого бюджета и любого музыкального стиля! Кроме этого у нас есть все аксессуары, которые необходимы для гитары: комбики, кабинеты, усилители, струны, ремни, средства по уходу, каподастры, слайдеры, звукосниматели.</span>


    </div>
<?php
include "include/cfg.php";
include "include/page.php";
//$result = $mysqli->query("SELECT * FROM ".$db_table) or trigger_error(mysql_error());
$sql = mysqli_query($link, "SELECT `id`, `name`, `price`, `img` FROM `{$db_table}` order by `price` asc");



echo '
<h1 class="h1_tovar">Наши товары</h1>
    <div class="main2">';
    while ($row = mysqli_fetch_array($sql)) {
      printf ('<div class="tovar">
          <span class="tovar_name">%s</span><span class="tovar_price">%s</span>
        <img src="img/%s" align="center" height="220">
          <div class="buys"><a href="tovar.php?page='.$page.'&id=%s">Купить</a></div>
      </div>',$row["name"],$row["price"],$row['img'],$row['id']);
    }


    ?>

<!--
        <div class="tovar">
            <span class="tovar_name">Gibson</span><span class="tovar_price">10 000RUB</span>
          <img src="img/guitar2.jpg">
            <div class="buys"><a href="#">Купить</a></div>
        </div>

        <div class="tovar">
          <span class="tovar_name">Gibson</span><span class="tovar_price">10 000RUB</span>
          <img src="img/guitar3.jpg">
    <div class="buys"><a href="#">Купить</a></div>
        </div>

        <div class="tovar">
          <span class="tovar_name">Gibson</span><span class="tovar_price">10 000RUB</span>
          <img src="img/guitar4.jpg">
    <div class="buys"><a href="#">Купить</a></div>
        </div>
-->

    </div>





    <div class="footer">


    </div>


  </body>




</html>
