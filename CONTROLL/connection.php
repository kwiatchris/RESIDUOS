<?php
class Conexion
{
function __construct(){}

 function conectar()
    {
   
    try{
            var $usuario="root";
            var $password="internet80";
        $conn = new PDO('mysql:host=localhost;dbname=RESIDUOS', $usuario, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt=$conn->query('SELECT * from Clientes');
            
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($result);
        
        }catch(PDOException $e)
        {

        echo "ERROR: " . $e->getMessage();

        }
    }
} 

$inst = new Conexion();
$inst->conectar();
?>