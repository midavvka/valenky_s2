<?php 
//cart_model.php
if(!empty($_SESSION['cart'])){
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
	$subSQL = 
	implode(" OR `goods`.`id`=", array_keys($_SESSION['cart']));
	// Выполнение запроса к БД
	$sSQL = "SELECT 
	`goods`.`id`, 
	`goods`.`name`,
	`goods`.`price`,
	`goods`.`description`,
	`categories`.`name` as `category_name`
	FROM `goods`,`categories` WHERE `id_category`=`categories`.`id` AND (`goods`.`id`= $subSQL)";
	$res = mysqli_query($mysqli, $sSQL);
	// Обработка результатов
	while ($good = mysqli_fetch_assoc($res)) {
		$cart_goods[] = $good;
	}
	// Закрываем соединение
	mysqli_close($mysqli);
	
	if (isset($_POST['recalc'])) {
		foreach ($_SESSION['cart'] as $id => $count) {
			$pname = "count_$id";
			$_SESSION['cart'][$id] = $_POST[$pname];
		}
	}
	
	$total = 0;
	foreach ($cart_goods as $cart_good) {
		$total += $cart_good['price'] * $_SESSION['cart'][$cart_good['id']];
	}
}
// Действия, если корзина пуста...

?>