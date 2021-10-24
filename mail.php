<?php

$method = $_SERVER['REQUEST_METHOD'];
echo $method;

//Script Foreach
	$name = trim($_POST["name"]);
	echo "123",$name;
	$admin_email  = 'minibaevdaniil8@gmail.com';
	$phone = trim($_POST["email"]);
	echo $phone;
	$area = trim($_POST["message"]);
	echo $area;

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}
$message=sprintf("Имя: %s \nТелефон: %s \nГород: %s",$name,$phone,$area);
mail($admin_email,"Новая заявка",$message );