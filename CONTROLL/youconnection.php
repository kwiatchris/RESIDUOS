<?php
$usuario='root';
$password='internet80';
try{
$handler=new PDO('mysql:host=localhost;dbname=RESIDUOS', $usuario, $password);
$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "ERROR: " . $e->getMessage();
}
echo "rest";
?>