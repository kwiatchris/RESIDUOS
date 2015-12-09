<?php
require 'vendor/autoload.php';
Slim\Slim::registerAutoloader();
$app= new \Slim\Slim();
$app->config('debug',false);
$app->error(function (\Exception $e) use ($app) {
    //$app->render('error.php');
$app->get('/', function(){
	echo "heelo";
});

define("SPECIALCONSTANT",true);
require "app/libs/connect.php";
require "app/routes/api.php";




$app->get('/about', function () use ($app) {
     $app->render('CONTROLL/guardar.php');
});
//va con GET
$app->GET('/hello2/:name', function ($name) use ($app) {
       //$data = array('name' => $name, 'surname' => 'Abizen');
     header('Content-Type: application/json');
	 echo json_encode($name);
     //header("Location: /home/zubiri/Escritorio/Aitor/Residuos/RESIDUOS/CONTROLL/guardar.php");
      // /home/zubiri/Escritorio/Aitor/Residuos/RESIDUOS/CONTROLL/
     	 // $json = $app->request->getBody();
	  //$data2 = json_decode($json, true);
	//echo json_encode($data2);
});
//CUIDADO HAY POST
$app->get('/datos/:disId/:vol/:fuego', function ($disId,$vol,$fuego) use($app) { 
   echo $disId.$vol.$fuego;
      require_once 'CONTROLL/guardar.php';  
  $insert= new Controller;
  $insert->guardar($disId,$vol,$fuego);
  
});
$app->get('/dato', function () use($app) {
echo "bien";
  $paramValue = $app->request->get('name');
  echo $paramValue;
 $data = $app->request()->params('name'); //Fatal error: Call to a member function request() on a non-object
 $data = $app->request->getBody(); //Fatal error: Call to a member function getBody() on a non-object
 $data = $app->request->post('name'); //Fatal error: Call to a member function post() on a non-object
 $data = $app->request()->post(); //Fatal error: Call to a member function request() on a non-object

   print_r($data);
   echo $data;
  
});
$app->post('/user/add', function () use ($app) {
	$username = $app->request->post('username'); 
    echo "HTTP post, username: $username";
});
$app->run();
?>