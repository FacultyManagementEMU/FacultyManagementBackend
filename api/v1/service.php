<?php
include("../functions/functions.php");
include("../access.php");
 
$request_method=$_SERVER["REQUEST_METHOD"];
switch($request_method)
	{
		case 'GET':
			// Retrive Products
			if(!empty($_GET["id"])){
				$id=intval($_GET["id"]);
				getService($id);
			}
			else{
				getService();
			}
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
?>