<?php
header("Refresh:0; url=../admin.php");
require ('../generic/connect.php');

if ($_POST['type'] == "delete-food") {
	$ids = "";
	foreach($_POST['checked'] as $id){
		$ids.=$id.",";
	}
	echo $ids;
	$ids = substr($ids, 0,-1);
	echo "<br> $ids <br>";
	$query = "DELETE FROM  `gallery` WHERE ID IN ( ".$ids." )";
	echo $query;
	updateDB($query);
} else if ($_POST['type'] == "delete-wine"){
	$ids = "";
	foreach($_POST['checked'] as $id){
		$ids.=$id.",";
	}
	echo $ids;
	$ids = substr($ids, 0,-1);
	echo "<br> $ids <br>";
	$query = "DELETE FROM  `gallery` WHERE ID IN ( ".$ids." )";
	echo $query;
	updateDB($query);
} else if ($_POST['type'] == "delete-restaurant"){
	$ids = "";
	foreach($_POST['checked'] as $id){
		$ids.=$id.",";
	}
	echo $ids;
	$ids = substr($ids, 0,-1);
	echo "<br> $ids <br>";
	$query = "DELETE FROM  `gallery` WHERE ID IN ( ".$ids." )";
	echo $query;
	updateDB($query);
}else {
	$valid_formats = array("jpg", "jpeg", "png", "gif", "zip", "bmp");
	$max_file_size = 1024 * 600;
	//600 kb
	$path = "../img/gallery/";
	// Upload directory
	$count = 0;

	if ($_POST['type'] == "Food") {
		$path = "../img/gallery/food/";
	} else if ($_POST['type'] == "Wine") {
		$path = "../img/gallery/wine/";
	} else if ($_POST['type'] == "Restaurant") {
		$path = "../img/gallery/restaurant/";
	}
	if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
		// Loop $_FILES to exeicute all files
		echo("<h1>" . $_POST['type'] . " Uploads</h1>");
		foreach ($_FILES['files']['name'] as $f => $name) {
			if ($_FILES['files']['error'][$f] == 4) {
				continue;
				// Skip file if any error found
			}
			if ($_FILES['files']['error'][$f] == 0) {
				if ($_FILES['files']['size'][$f] > $max_file_size) {
					echo "$name is too large - Max file size is " . ($max_file_size / 1024) . "kb <br>";
					continue;
					// Skip large files
				} elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
					echo "$name is not a valid format - please use .jpg, .png, or .gif <br>";
					continue;
					// Skip invalid file formats
				} else {// No error found! Move uploaded files
					if (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . $name))
						$count++;
					// Number of successfully uploaded file
					$query = "INSERT INTO  `gallery` (`ID` ,`Type` ,`Path` ,`Date`) VALUES (NULL ,  '" . $_POST['type'] . "',  '" . $path . $name . "',  '" . date('Y-m-d') . "');";
					updateDB($query);

					echo $name . " has been uploaded.<br>";
					//echo "<br><br>".$query."<br>";

				}
			}

		}
	}
}
?>