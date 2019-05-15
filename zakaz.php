<?php
include "include/cfg.php";
//include "include/page.php";
$db_table = $_POST['page'];
$id = $_POST['id'];
$fio = $_POST['name'];
$adress = $_POST['adress'];
$index = $_POST['index'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$db = `zakaz`;
$sql = mysqli_query($link, "SELECT `id`, `name`, `price`, `img`, `about` FROM `{$db_table}` WHERE id='$id'");
$row = mysqli_fetch_array($sql);
$name = $row['name'];
$price = $row['price'];

echo "<br>".$id."<br>".$fio."<br>".$adress."<br>".$index."<br>".$city."<br>".$tel."<br>".$name."<br>".$price;
$result = mysqli_query($link, "INSERT INTO `zakaz` (price,fio,city,adress,index,tel,name) VALUES ('$price', '$fio', '$city', '$adress', '$index', '$tel', '$name')") or die(mysql_error());

?>
