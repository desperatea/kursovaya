<?php
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
?>
