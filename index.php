<?php 
// index.php
$model_name = 'main';

if(!empty($_GET['model']))
	$model_name = $_GET['model'];

$model_file='model/'. $model_name . '_model.php';
$view_file = 'view/'. $model_name . '_view.php';
 
if (file_exists($model_file)) {
	include $model_file;
}
else{
	echo "404"; //header('HTTP/1.1 404 Not Found');
	exit;
}

if (file_exists($view_file)) {
	include $view_file;
}
else{
	echo "404";
	exit;
}

 ?>