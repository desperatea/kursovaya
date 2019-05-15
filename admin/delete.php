<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Интернет-магазин музыкальных инструментов</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>


  <body>
    <form action="del.php" method="post" enctype="multipart/form-data" name="forma">
      <p><strong>Страница</strong></p>
       <p><select name="page">
        <option value="guitar">Гитары</option>
        <option value="sint" selected>Клавишные</option>
        <option value="drums">Ударные</option>
        <option value="wind">Духовые</option>
        <option value="percussion" >Перкуссионные</option>
        <option value="bowed">Смычковые</option>
        <option value="other">Аксессуары</option>
      </select>
      <p>
      Id товара<p><input type="text" name="id"></p>

      <input type="submit" value="Удалить">


    </form>
</body>

</html>
