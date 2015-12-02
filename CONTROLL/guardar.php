<?php
session_start();
require ('DB/prueba_connection.php');
class Controller
{
	public function __construct(){}

}
$class=new Connection();
$var=$class->Connectar();
$stmt=$var->query('SELECT * from Clientes');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
 //echo json_encode($result);

?>