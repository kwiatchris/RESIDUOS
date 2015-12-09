<?php
if (!defined("SPECIALCONSTANT")) die("acceso denegado");

$app->get("/books/", function() use($app)
{
	try{
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT * FROM Clientes");
		$dbh->execute();
		$books = $dbh->fetchAll();
		$connection = null;

		$app->response->headers->set("Content-type", "application/json");
		$app->response->status(200);
		$app->response->body(json_encode($books));
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});
?>