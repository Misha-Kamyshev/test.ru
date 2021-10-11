<?php

	$DB_HOST = "127.0.0.1";
	$DB_USER = "root";
	$DB_PASSWORD = "";
	$DB_BASE = "bron";
	$DB_TABLE = "bron_table";

	@$BD = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_BASE);
	

	if ($BD == false) 
{
		echo "Ошибка подключения к БД";
}
?>