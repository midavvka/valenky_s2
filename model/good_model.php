<?php 
//good_model.php
if(!empty($_GET['id'])){
	$id = (int)$_GET['id'];
	// config
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'dbshop';
	// Подключение к БД
	$mysqli = mysqli_connect(
		$dbhost, 
		$dbuser, 
		$dbpass, 
		$dbname);
	// Обработка ошибок подключения

	// Выполнение запроса к БД
	$sSQL = "SELECT 
	`goods`.`id`, 
	`goods`.`name`,
	`goods`.`price`,
	`goods`.`description`,
	`categories`.`name` as `category_name`
	FROM `goods`,`categories` WHERE `id_category`=`categories`.`id` AND `goods`.`id`=$id";
	$res = mysqli_query($mysqli, $sSQL);
	// Обработка результатов
	$good = mysqli_fetch_assoc($res);
	// Закрываем соединение
	mysqli_close($mysqli);	
}

 ?>