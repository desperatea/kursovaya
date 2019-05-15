<?php
include "../include/cfg.php";
$id = $_POST['id'];
$page = $_POST['page'];
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

$sql = mysqli_query($link, "DELETE FROM `{$db_table}` WHERE id='$id'");
if($sql == true){
  echo "Успешно";
}
else{
  echo "Не успешно";
}
?>
