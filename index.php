<?php
require 'vendor/autoload.php';
Slim\Slim::registerAutoloader();
$app= new \Slim\Slim();
$app->config('debug',false);
$app->get('/', function(){
	echo "heelo";
});



$app->get('/about', function () use ($app) {
     $app->render('CONTROLL/guardar.php');
});
//va con GET
$app->post('/hello2/:name', function ($name) use ($app) {
       //$data = array('name' => $name, 'surname' => 'Abizen');
     header('Content-Type: application/json');
	 echo json_encode($name);
     header("Location: /home/zubiri/Escritorio/Aitor/Residuos/RESIDUOS/CONTROLL/guardar.php");
      // /home/zubiri/Escritorio/Aitor/Residuos/RESIDUOS/CONTROLL/
     	 // $json = $app->request->getBody();
	  //$data2 = json_decode($json, true);
	//echo json_encode($data2);
});
//CUIDADO HAY POST
$app->post('/datos/:user/:appe', function ($user,$appe) use($app) { 
   
    echo $user;
    echo $appe;
  require_once 'CONTROLL/guardar.php';  
  $insert= new Controller;
  $insert->guardar($user,$appe);
  
});

$app->post('/user/add', function () use ($app) {
	$username = $app->request->post('username'); 
    echo "HTTP post, username: $username";
});
$app->run();
?>