<?php
session_start();
require ('DB/prueba_connection.php');
class Controller
{
	public function __construct(){}

	public function guardar(&nom,$app){

		$class=new Connection();
		$var=$class->Connectar();
		$stmt=$var->query('INSERT INTO `RESIDUOS`.`Dis-datos` (`Dis-datos_Id`, `Dispositivo_Id`, `Volumen`, `Fuego`, `Fecha`, `otro`) VALUES (NULL, '1', '74', '0', '2015-12-02 00:00:00', '');');
		$stmt->execute();
		//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($result);
	}

}
$class=new Connection();
$var=$class->Connectar();
$stmt=$var->query('SELECT * from Clientes');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
 //echo json_encode($result);

?>