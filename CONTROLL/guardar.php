<?php
session_start();
require ('DB/prueba_connection.php');
class Controller
{

	public function __construct(){}

	public  function guardar($disId,$vol,$fuego){
			echo "guardar";
			 $timezone = date_default_timezone_get();
             $date = date('m/d/Y h:i:s a', time());
              $date = date('Y-m-d H:i:s');
		$cla=new Connection();
		$var=$cla->Connectar();
		//check if disID exist!!!
		$existe_disId=$var->query("SELECT `Dispositivo_Id` FROM `Dis-datos` WHERE `Dispositivo_Id` = '$disId'  LIMIT 1");
		$existe_disId->execute();
		$result = $existe_disId->fetchAll(PDO::FETCH_ASSOC);
				
		if($result){
			$stmt=$var->query("INSERT INTO `Dis-datos` (`Dis-datos_Id`, `Dispositivo_Id`, `Volumen`, `Fuego`, `Fecha`, `otro`) VALUES (NULL, '$disId', '$vol', '$fuego', '$date', '');");
		//$stmt->execute();
		//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		print_r($stmt);
		}else{
			echo "los siento pero el numero de dispositivo esta incorecto";
		}
		
	}

}
// $class=new Connection();
// $var=$class->Connectar();
// $stmt=$var->query('SELECT * from Clientes');
// $stmt->execute();
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
 //echo json_encode($result);
//$dat=new Controller;
//$dato=$dat->guardar("chris","kwiatkowski");
//print_r($dato);
?>