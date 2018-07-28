<?php
header("Refresh:2; url=../admin.php");
include '../generic/connect.php';
print_r($_POST);

if($_POST['operation'] == "update"){
	disp("Update");
	$query = "UPDATE  `events` SET  `Name` = '" . $_POST['name'] . "', `Description` =  '" . $_POST['description'] . "' WHERE  `events`.`ID` =" . $_POST['ID'] . ";";
	disp($query);
	updateDB($query);
} else if($_POST['operation'] == "delete"){
	disp("Delete");
	$query = "DELETE FROM `events` WHERE ID='".$_POST['ID']."'";
	disp($query);
	updateDB($query);
} else if($_POST['operation'] == "add"){
	disp("add");
	$query = "INSERT INTO  `events` (`ID` ,`Name` ,`Description`) VALUES (NULL ,  '" . $_POST['name'] . "',  '" . $_POST['description']."')";
	updateDB($query);
}

?>