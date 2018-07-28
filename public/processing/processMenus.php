<?php
header("Refresh:0; url=../admin.php");
require '../generic/connect.php';

if ($_POST['menu'] == "early-bird") {
	disp("Early Bird");
	//Early Bird
	if ($_POST['operation'] == "update") {
		//update early bird menu
		echo "Updating";
		echo "<br>";
		print_r($_POST);
		$description = $_POST['description'];
		if ($description == "") {
			$description = "<br>";
		}
		$query = "UPDATE  `early-bird` SET  `Plate` =  '" . $_POST['plate'] . "',`Name` = '" . $_POST['name'] . "', `Description` =  '" . $description . "',`Suppliment` = " . $_POST['suppliment'] . " WHERE  `early-bird`.`ID` =" . $_POST['ID'] . ";";
		echo $query;
		updateDB($query);
	} else if ($_POST['operation'] == "delete") {
		//delete entry
		echo "deleting";
		$query = "DELETE FROM `early-bird` WHERE `early-bird`.`ID` = " . $_POST['ID'];
		updateDB($query);
	} else if ($_POST['operation'] == "add") {
		echo "Adding";
		$description = $_POST['description'];
		if ($description == "") {
			$description = "<br>";
		}
		$query = "INSERT INTO  `early-bird` (`ID` ,`Plate` ,`Name` ,`Description` ,`Suppliment`) VALUES (NULL ,  '" . $_POST['plate'] . "',  '" . $_POST['name'] . "','" . $description . "','" . $_POST['suppliment'] . "');";
		updateDB($query);
	}

} else if ($_POST['menu'] == "a-la-carte") {
	// a la carte
	disp("A La Carte");
	if ($_POST['operation'] == "update") {
		echo "Updating";
		echo "<br>";
		$description = $_POST['description'];
		if ($description == "") {
			$description = "<br>";
		}
		print_r($_POST);
		$query = "UPDATE  `a-la-carte` SET  `Plate` =  '" . $_POST['plate'] . "',`Name` = '" . $_POST['name'] . "', `Description` =  '" . $description . "',`Price` = " . $_POST['price'] . " WHERE  `ID` =" . $_POST['ID'] . ";";
		echo $query;
		updateDB($query);
	} else if ($_POST['operation'] == "delete") {
		//delete entry
		echo "deleting";
		$description = $_POST['description'];
		if ($description == "") {
			$description = "<br>";
		}
		$query = "DELETE FROM `a-la-carte` WHERE `a-la-carte`.`ID` = " . $_POST['ID'];
		updateDB($query);
	} else if ($_POST['operation'] == "add") {
		echo "Adding";
		$description = $_POST['description'];
		if ($description == "") {
			$description = "<br>";
		}
		$query = "INSERT INTO  `a-la-carte` (`ID` ,`Plate` ,`Name` ,`Description` ,`Price`) VALUES (NULL ,  '" . $_POST['plate'] . "',  '" . $_POST['name'] . "','" . $description . "','" . $_POST['price'] . "');";
		updateDB($query);
	}

} else if ($_POST['menu'] == "wine-list") {
	// winelist
	disp("Wine List");
	print_r($_POST);
	if ($_POST['sell-by'] == "bottle") {
		echo "Bottle Only";
		if ($_POST['operation'] == "update") {
			echo "Updating";
			echo "<br>";
			print_r($_POST);
			$query = "UPDATE  `bottles` SET  `Type` =  '" . $_POST['type'] . "',`Name` = '" . $_POST['name'] . "', `Description` =  '" . $_POST['description'] . "', `Origin` =  '" . $_POST['origin'] . "', `Grape` =  '" . $_POST['grape'] . "',`Price` = " . $_POST['price'] . " WHERE  `ID` =" . $_POST['ID'] . ";";
			echo $query;
			updateDB($query);
		} else if ($_POST['operation'] == "delete") {
			//delete entry
			echo "deleting";
			$query = "DELETE FROM `bottles` WHERE `bottles`.`ID` = " . $_POST['ID'];
			updateDB($query);
		} else if ($_POST['operation'] == "add") {
			echo "Adding";
			$query = "INSERT INTO  `bottles` (`ID` ,`Type` ,`Name` ,`Description`, `Origin`, `Grape`, `Price`) VALUES (NULL ,  '" . $_POST['type'] . "',  '" . $_POST['name'] . "','" . $_POST['description'] . "','" . $_POST['origin'] . "', '" . $_POST['grape'] . "', '" .$_POST['price']. "');";
			echo $query;
			updateDB($query);
		}
	} else if ($_POST['sell-by'] == "glass-bottle") {
		echo "Glass + Bottle";
		if ($_POST['operation'] == "update") {
			echo "Updating";
			echo "<br>";
			print_r($_POST);
			$query = "UPDATE  `bottle-and-glass` SET  `Type` =  '" . $_POST['type'] . "',`Name` = '" . $_POST['name'] . "', `Description` =  '" . $_POST['description'] . "', `Glass` =  '" . $_POST['glass'] . "', `Bottle` =  '" . $_POST['bottle'] . "' WHERE  `ID` =" . $_POST['ID'] . ";";
			echo $query;
			updateDB($query);
		} else if ($_POST['operation'] == "delete") {
			//delete entry
			echo "deleting";
			$query = "DELETE FROM `bottle-and-glass` WHERE `bottle-and-glass`.`ID` = " . $_POST['ID'];
			updateDB($query);
		} else if ($_POST['operation'] == "add") {
			echo "Adding";
			$query = "INSERT INTO  `bottle-and-glass` (`ID` ,`Type` ,`Name` ,`Description`, `Glass`, `Bottle`) VALUES (NULL ,  '" . $_POST['type'] . "',  '" . $_POST['name'] . "','" . $_POST['description'] . "','" . $_POST['glass'] . "', '" . $_POST['bottle'] . "');";
			echo $query;
			updateDB($query);
		}
	}
}
?>