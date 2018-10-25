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
				getCourseReview($id);
				getPeerReview($id);
			}
			else{
				getCourseReview();
				getPeerReview();
			}
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
?>
