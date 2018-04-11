<?php 

require '../vendor/autoload.php'; // pour introduire tous les packages



$app = new \Slim\App();

$app->get('/', function( \Slim\Http\Request $request, \Slim\Http\Response $response)
{
	//var_dump($request->getParams());

	$tab=["nom1"=>"Elemine","prenom1"=>"Vellah","age1"=>21,"nom2"=>"Boheye","prenom2"=>"Ahmed vall ","age2"=>20];
	return  $response->withJson($tab);


});



$app->run();

?>


