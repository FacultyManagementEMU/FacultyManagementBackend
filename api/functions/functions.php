<?php
function connect() {

	$host_name = "localhost";
	$database = "wwwmorto_eval"; // Change your database name
	$username = "wwwmorto_evalM";          // Your database user id
	$password = "COSCTEAM!";          // Your password

	//////// Do not Edit below /////////
	try {
		$db = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
		//echo "connected";
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}

	return $db;
}

function getEmployees($userID=0){

	$db = connect();
	$query="SELECT * FROM tbl_users";
	if($userID != 0){
		$query.=" WHERE userID = $userID";
	}
	$stmt=$db->prepare($query);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($results);
	echo $json;
}
//Created by Kyle Cvengros
function getCourseReview($userID=0){
	$db = connect();
	$query="SELECT * FROM couseReviews";
	if($userID != 0){
		$query.=" WHERE courseID IN (SELECT ID FROM courses WHERE userID=$userID)";
	}
	$stmt=$db->prepare($query);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($results);
	echo $json;
}
//Created by Kyle Cvengros
function getPeerReview($userID=0){
	$db = connect();
	$query="SELECT * FROM peerReviews";
	if($userID != 0){
		$query.=" WHERE userID = $userID";
	}
	$stmt=$db->prepare($query);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($results);
	echo $json;
}

//Josiah Soncrant
function getResearch($userID=0){
	$db = connect();
	$query="SELECT * FROM research";
	if($userID != 0){
		$query.=" WHERE userID = $userID";
	}
	$stmt=$db->prepare($query);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($results);
	echo $json;
}

//Josiah Soncrant
function addResearch($userID=0, $Name, $Year, $File_Pointer, $ResearchID, $Date){
	$db = connect();
	if($userID != 0){
		$query="INSERT INTO research(userID, Name, Year, File_Pointer, ResearchID, Date)"
		$query+= "VALUES ('"+$userID+"', '" + $Name +"', '"+ $Year +"', '"+ $File_Pointer +"', '" + $ResearchID +"', '" + $Date +"');";
		
		$stmt=$db->prepare($query);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$json = json_encode($results);
		echo $json;
	}
	
}

//Qian Jia
function getService($userID=0){
	$db = connect();
	$query="SELECT * FROM service";
	if($userID != 0){
		$query.=" WHERE userID = $userID";
	}
	$stmt=$db->prepare($query);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($results);
	echo $json;
}
/*
$stmt=$db->prepare("SELECT * FROM tbl_users WHERE userID = ?");
$stmt->execute(array(1));


$results
echo "<pre>";
print_r($results);
exit();
*/
?>
