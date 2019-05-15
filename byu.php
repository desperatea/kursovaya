<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Интернет-магазин музыкальных инструментов</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="style_list.css" rel="stylesheet" type="text/css" />
  </head>


  <body>
    <?php
include "include/cfg.php";
$page = $_GET['page'];
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
$id = $_GET['id'];
     ?>
    <div id="wrapper" style="
    width: 500px;
    height: 500px;
    margin: 20px auto;
    border: 2px solid #c8c8c8;
    padding: 15px;
">
    <form action="zakaz.php" method="post" enctype="multipart/form-data" name="forma">

      ФИО<p><input type="text" name="name" style="
    height: 25px;
    padding: 3px;
"></p>
        Город<p><input type="text" name="city" style="
    height: 25px;
    padding: 3px;
"></p>
        Адрес Доставки<p><input type="text" name="adress" style="
    height: 25px;
    padding: 3px;
"></p>
        Почтовый индекс<p><input type="text" name="index" style="
    height: 25px;
    padding: 3px;
"></p>
Номер телефона<p><input type="text" name="tel" style="
height: 25px;
padding: 3px;
"></p>
    <?php echo '  <input type="hidden" name="page" value="'.$page.'">
                  <input type="hidden" name="id" value="'.$id.'">

    ';
    ?>
      <input type="submit" value="Купить" style="
    height: 50px;
    border: none;
    width: 178px;
">


    </form>
  </div>
</body>

</html>
