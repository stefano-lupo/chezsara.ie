<?php

function connect() {

	// 	Static so all 'instances / method calls' use same copy of $connection variable -- avoids connecting more than once
	static $mysqli;

	//	Only re-connect if connection not established
	if (!isset($mysqli)) {
		$config = parse_ini_file('/var/www/chezsara.ie/config.ini');
		$servername = $config['servername'];
		$username = $config['username'];
		$password = $config['password'];
		$dbname = $config['dbname'];
		$mysqli = new mysqli($servername, $username, $password, $dbname);
	}


	// 	Check connection
	if (!$mysqli) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	return $mysqli;
}



function getMatrix($query) {

	//	Connect to DB using connect() -- returns connection if present or connects if not present
	$connection = connect();
	if ($result = mysqli_query($connection, $query)) {
		$matrix = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($matrix, $row);
		}
		mysqli_free_result($result);
		return $matrix;
	} else {
		echo "<br>Query returned no results <br>";
		return mysqli_error($connection);
	}
}


function updateDB($query){
	$mysqli = connect();
	if($result = mysqli_query($mysqli,$query)){
		return true;
	} else {
		return false;
	}
}

function escapeString($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}

function disp($string){
	echo "<br>".$string;
}
?>
