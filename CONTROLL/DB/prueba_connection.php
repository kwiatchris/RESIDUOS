<?php
class Connection
{
	public function __construct(){}
	 public static function Connectar()
	{
	$usuario='root';
	$password='internet80';

	try{

	    $conn = new PDO('mysql:host=localhost;dbname=RESIDUOS', $usuario, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 //    $stmt=$conn->query('SELECT * from Clientes');
	    	
	 //    $stmt->execute();
	 //    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// echo json_encode($result);
	    return ($conn);

		}catch(PDOException $e)
		{

	    echo "ERROR: " . $e->getMessage();

		}
	}  
}

?>