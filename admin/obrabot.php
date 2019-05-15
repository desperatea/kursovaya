<?php
include "../include/cfg.php";
$name = $_POST['name'];
$price = $_POST['price'];
$about = $_POST['about'];
$db_table = "guitar";
$path = '../img/';
$imagename = $_FILES['img']['name'];
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


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 if (!@copy($_FILES['img']['tmp_name'], $path . $_FILES['img']['name']))
 echo 'Что-то пошло не так';
 else
 echo 'Загрузка удачна';
}

$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
if (!in_array($_FILES['img']['type'], $types))
 die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');

$result = mysqli_query($link, "INSERT INTO ".$db_table." (name,price,img,about) VALUES ('$name','$price', '$imagename', '$about')");





























/* $path = '../img/content'; // директория для загрузки
$ext = array_pop(explode('.',$_FILES['img']['name'])); // расширение
$new_name = time().'.'.$ext; // новое имя с расширением
$full_path = $path.$new_name; // полный путь с новым именем и расширением

if($_FILES['img']['error'] == 0){
    if(move_uploaded_file($_FILES['img']['tmp_name'], $full_path)){
        // Если файл успешно загружен, то вносим в БД (надеюсь, что вы знаете как)
        // Можно сохранить $full_path (полный путь) или просто имя файла - $new_name
         $execute = mysql_query('INSERT INTO guitar ("img","name") Values ('.$img.',"'.$full_path.'")');
    }
}




/*  // разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла.';

	return true;
  }
*/
  ?>
