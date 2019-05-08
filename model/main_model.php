<?php 
//main_model.php
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
FROM `goods`,`categories` WHERE `id_category`=`categories`.`id` LIMIT 0, 10";
$res = mysqli_query($mysqli, $sSQL);
$goods = array();
// Обработка результатов
while ($row = mysqli_fetch_assoc($res)) {
	$goods[] = $row;
}
// Закрываем соединение
mysqli_close($mysqli);
 ?>