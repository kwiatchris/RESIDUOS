<?php
require 'vendor/autoload.php';
Slim\Slim::registerAutoloader();
$app= new \Slim\Slim();
$app->config('debug',false);

$app->get('/', function(){
	echo "heelo";
});



$app->get('/about', function () use ($app) {
     $app->render('about.php');
});
//va con GET
$app->post('/hello2/:name', function ($name) use ($app) {
       //$data = array('name' => $name, 'surname' => 'Abizen');
     header('Content-Type: application/json');
	 echo json_encode($name);
     header("Location: /home/zubiri/Escritorio/Aitor/Residuos/RESIDUOS/CONTROLL/guardar.php");
     $control=new Controller(); // /home/zubiri/Escritorio/Aitor/Residuos/RESIDUOS/CONTROLL/
     $control->guardar($name);
	 // $json = $app->request->getBody();
	  //$data2 = json_decode($json, true);
	//echo json_encode($data2);
});
//CUIDADO HAY POST
$app->post('/datos/:myData', function ($myData) use($app) { echo "Hello, ".$myData;
    //$json = $app->request->getBody();
    //$obj = $_POST['myData'];
    //echo $obj;
    //$data = json_decode($json, true); // parse the JSON into an assoc. array
    // do other stuff
    header('Content-Type: application/json');
    echo json_encode($myData);
});

$app->post('/user/add', function () use ($app) {
	$username = $app->request->post('username'); 
    echo "HTTP post, username: $username";
});
$app->run();
?>