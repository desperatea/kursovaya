<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Интернет-магазин музыкальных инструментов</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>


  <body>
    <form action="obrabot.php" method="post" enctype="multipart/form-data" name="forma">
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
      Имя<p><input type="text" name="name"></p>
        Цена<p><input type="text" name="price"></p>
    Изображение  <p><input type="file" name="img"></p>
    Описание  <p><input type="text" name="about"></p>
      <input type="submit" value="Добавить">


    </form>
</body>

</html>
