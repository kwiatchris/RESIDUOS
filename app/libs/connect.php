<?php
if (!defined("SPECIALCONSTANT")) die("acceso denegado");

function getConnection()
{
	try{
		$db_username="root";
		$db_password="internet80";
		$connection=new PDO("mysql:host=localhost;dbname=RESIDUOS",$db_username,$db_password);
		$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);
	}catch(PDOExeption $e){
			echo "Error: " .$e->getMessage();
	}
	return $connection;
}
?>