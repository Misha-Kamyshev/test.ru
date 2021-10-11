<?php

	$DB_HOST = "127.0.0.1";
	$DB_USER = "root";
	$DB_PASSWORD = "";
	$DB_NAME = "product";

	@$BD = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
	

	if ($BD == false) 
{
		echo "Ошибка подключения к БД";
}
?>