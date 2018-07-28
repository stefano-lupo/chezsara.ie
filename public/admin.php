<?php

  // Create and Access Session Variables
  session_start();
?>

<head>
	<title>Admin | Chez Sara</title>

<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

		<!-- Custom CSS -->
		<link href="css/modern-business.css" rel="stylesheet">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>

<?php
  //Post Variables Correct: Unlogged in but Login is correct. Store info in Session Variable
  if ((($_POST['user']== "chezsara") && ($_POST['pass'] = "torres1972"))){
    $_SESSION['un'] = $_POST['user'];
    $_SESSION['pw'] = $_POST['pass'];
    showPage();
 }
  
  //Session Variables Correct: Previously Logged in. Grant Access to page
   else if (($_SESSION['un'] == "chezsara") && ($_SESSION['pw'] == "torres1972")){
    showPage();
  }
  
  //No Session Variables or POST Variables yet: First Time Accessing Page
  else if( (  (empty($_SESSION['un'])) && (empty($_SESSION['pw']))  ) &&
           (  (empty($_POST['user'])) && (empty($_POST['pass']) ) ) ) {
           	?>
           	<div class="container text-center">
	           	<h1>Chez Sara Content Manager </h1>
	            <p>Please Enter Your Login Details</p>
	             
	            <form method="POST" action="admin.php">
	            	Username <input type="text" name="user"></input><br/>
	            	Password <input type="password" name="pass"></input><br/><br><br>
	            	<input type="submit" name="submit" value="Go"></input>
	            </form>
           	</div>

<?php
           }
  
  //Session Variables and Post Variables are incorrect. Re-Enter Log in Details
  else{
    ?>
           	<div class="container text-center">
           		<h3>Incorrect Login Details</h3>
           		
            <form method="POST" action="admin.php">
            	Username <input type="text" name="user"></input><br/><br>
            	Password <input type="password" name="pass"></input><br/><br>
            	<input type="submit" name="submit" value="Go"></input>
            </form>
            </div>
<?php

  }

/************************************** End of Login Logic *****************************************/















function showPage(){
require 'generic/connect.php';
$earlyBird = getMatrix("SELECT * FROM `early-bird` ORDER BY 'ID' ASC");
$normal = getMatrix("SELECT * FROM `a-la-carte` ORDER BY 'ID' ASC");
$bottles = getMatrix("SELECT * FROM `bottles` ORDER BY 'ID' ASC");
$bottleGlass = getMatrix("SELECT * FROM `bottle-and-glass` ORDER BY 'ID' ASC");
$events = getMatrix("SELECT * FROM `events`");

$gallery = getMatrix("SELECT * FROM `gallery`");

//** Login Logic Here ***/
?>



<body>
	<div class="container-fluid larger-container">
		<h1>Chez Sara Admin Page </h1>

		<ul class="nav nav-tabs nav-justified">
			<li class="active">
				<a data-toggle="tab" href="#menus">Menus</a>
			</li>
			<li>
				<a data-toggle="tab" href="#gallery-manager">Gallery</a>
			</li>
			<li>
				<a data-toggle="tab" href="#events">Events</a>
			</li>
		</ul>

		<div class="tab-content">
			<div id="menus" class="tab-pane fade in active">
				<br>
				<h3>Menu Manager</h3>
				<p>
					Use this page to manage the menu section of the website.
				</p>
				<br>
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#early-bird-menu-manager">Early Bird</a>
					</li>
					<li>
						<a data-toggle="tab" href="#carte-menu-manager">Á La Carte</a>
					</li>
					<li>
						<a data-toggle="tab" href="#wine-list-manager">Wine List</a>
					</li>
				</ul>

				<div class="tab-content">
					<!-- Early Bird -->
					<div id="early-bird-menu-manager" class="tab-pane fade in active">
						<table class="table table-bordered table-responsive">
							<thead>
								<tr>
									<th>Name</th><th>Description</th><th>Suppliment</th><th>Update</th><th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Starters</th><th></th><th></th><th></th><th></th>
								</tr>
								<?php
								// Starter
								foreach ($earlyBird as $row) {
									if ($row['Plate'] == "Starter") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="early-bird"><input type="hidden" name="plate" value="Starter"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="suppliment" step="0.01" type="number" min="0" value="' . $row["Suppliment"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								echo '
<tr></tr>
<tr><th>Mains</th><th></th><th></th><th></th><th></th></tr>';
								//Main
								foreach ($earlyBird as $row) {
									if ($row['Plate'] == "Main Course") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="early-bird"><input type="hidden" name="plate" value="Main Course"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="suppliment" step="0.01" type="number" min="0" value="' . $row["Suppliment"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}

								echo '<tr></tr><tr><th>Desserts</th><th></th><th></th><th></th><th></th></tr>';

								//Desserts (None currently)
								foreach ($earlyBird as $row) {
									if ($row['Plate'] == "Dessert") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="early-bird"><input type="hidden" name="plate" value="Dessert"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="suppliment" step="0.01" type="number" min="0" value="' . $row["Suppliment"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								?>
							</tbody>
						</table>
						<br>
						<br>
						<p class="text-center">
							<strong> Add New Item to Early Bird Menu</strong>
						</p>
						<form action="processing/processMenus.php" method="post">
							<input type="hidden" name="menu" value="early-bird">
							<div class="row">
								<div class="col-md-3">
									<p>
										Plate
									</p>
								</div>
								<div class="col-md-3">
									<select name="plate">
										Plate
										<option value="Starter">Starter</option>
										<option value="Main Course">Main Course</option>
										<option value="Dessert">Dessert</option>
									</select>
								</div>
								<div class="col-md-3">
									<p>
										Name
									</p>
								</div>
								<div class="col-md-3">
									<input name="name">
								</div>
								<div class="col-md-3">
									<p>
										Description
									</p>
								</div>
								<div class="col-md-3">
									<input name="description">
								</div>
								<div class="col-md-3">
									<p>
										Suppliment (0 if none)
									</p>
								</div>
								<div class="col-md-3">
									<input name="suppliment" type="number" step="0.01" min="0" value="0">
								</div>
							</div>
							<div class="row no-padding-top">
								<div class="col-md-4 col-md-offset-4">
									<button class="center-block" type="submit" name="operation" value="add">
										Submit
									</button>
								</div>
							</div>

						</form>
					</div>

					<!-- A La Carte -->
					<div id="carte-menu-manager" class="tab-pane fade">
						<table class="table table-bordered table-responsive">
							<thead>
								<tr>
									<th>Name</th><th>Description</th><th>Price</th><th>Update</th><th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Starters</th><th></th><th></th><th></th><th></th>
								</tr>
								<?php
								// Starter
								foreach ($normal as $row) {
									if ($row['Plate'] == "Starter") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="a-la-carte"><input type="hidden" name="plate" value="Starter"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}

								echo '<tr></tr><tr><th>Mains</th><th></th><th></th><th></th><th></th></tr>';
								//Main
								foreach ($normal as $row) {
									if ($row['Plate'] == "Main Course") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="a-la-carte"><input type="hidden" name="plate" value="Main Course"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}

								echo '<tr></tr><tr><th>Side Orders</th><th></th><th></th><th></th><th></th></tr>';
								//Side Orders
								foreach ($normal as $row) {
									if ($row['Plate'] == "Side Order") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="a-la-carte"><input type="hidden" name="plate" value="Side Order"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}

								echo '<tr></tr><tr><th>Desserts</th><th></th><th></th><th></th><th></th></tr>';

								//Desserts (None currently)
								foreach ($normal as $row) {
									if ($row['Plate'] == "Dessert") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="a-la-carte"><input type="hidden" name="plate" value="Dessert"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}

								echo '<tr></tr><tr><th>To Finish</th><th></th><th></th><th></th><th></th></tr>';

								//To Finish
								foreach ($normal as $row) {
									if ($row['Plate'] == "To Finish") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="a-la-carte"><input type="hidden" name="plate" value="To Finish"><tr>';
										$name = $row['Name'];
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $name . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								?>
							</tbody>
						</table>
						<br>
						<br>
						<p class="text-center">
							<strong> Add New Item to Á La Carte</strong>
						</p>
						<form action="processing/processMenus.php" method="post">
							<input type="hidden" name="menu" value="a-la-carte">
							<div class="row">
								<div class="col-md-3">
									<p>
										Plate
									</p>
								</div>
								<div class="col-md-3">
									<select name="plate">
										<option value="Starter">Starter</option>
										<option value="Main Course">Main Course</option>
										<option value="Side Order">Side Order</option>
										<option value="Dessert">Dessert</option>
										<option value="To Finish">To Finish</option>
									</select>
								</div>
								<div class="col-md-3">
									<p>
										Name
									</p>
								</div>
								<div class="col-md-3">
									<input name="name">
								</div>
								<div class="col-md-3">
									<p>
										Description
									</p>
								</div>
								<div class="col-md-3">
									<input name="description">
								</div>
								<div class="col-md-3">
									<p>
										Price
									</p>
								</div>
								<div class="col-md-3">
									<input name="price" type="number" step="0.01" min="0" value="0">
								</div>
							</div>
							<div class="row no-padding-top">
								<div class="col-md-4 col-md-offset-4">
									<button class="center-block" type="submit" name="operation" value="add">
										Submit
									</button>
								</div>
							</div>

						</form>
					</div>

					<!-- Wine List -->
					<div id="wine-list-manager" class="tab-pane fade">
						<p class="text-center">
							<strong>
							<br>
							<br>
							Wines by the Bottle</strong>
						</p>
						<table class="table table-bordered table-responsive">
							<thead>
								<tr>
									<th>Name</th><th>Description</th><th>Origin</th><th>Grape</th><th>Price</th><th>Update</th><th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>White</th><th></th><th></th><th></th><th></th><th></th><th></th>
								</tr>
								<?php
								// White Bottles
								foreach ($bottles as $row) {
									if ($row['Type'] == "White") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="wine-list"><input type="hidden" name="sell-by" value="bottle"><input type="hidden" name="type" value="White"><tr>';
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row['Name'] . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="origin"  value="' . $row["Origin"] . '"></input></td> <td><input name="grape"  value="' . $row["Grape"] . '"></input></td>  <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								echo '<tr></tr><tr><th>Red</th><th></th><th></th><th></th><th></th></tr>';
								// White Bottles
								foreach ($bottles as $row) {
									if ($row['Type'] == "Red") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="wine-list"><input type="hidden" name="sell-by" value="bottle"><input type="hidden" name="type" value="Red"><tr>';
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row['Name'] . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="origin"  value="' . $row["Origin"] . '"></input></td> <td><input name="grape"  value="' . $row["Grape"] . '"></input></td>  <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}

								echo '<tr></tr><tr><th>Rose</th><th></th><th></th><th></th><th></th></tr>';
								//Rose
								foreach ($bottles as $row) {
									if ($row['Type'] == "Rose") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="wine-list"><input type="hidden" name="sell-by" value="bottle"><input type="hidden" name="type" value="Rose"><tr>';
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row['Name'] . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="origin"  value="' . $row["Origin"] . '"></input></td> <td><input name="grape"  value="' . $row["Grape"] . '"></input></td>  <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								echo '<tr></tr><tr><th>Bubbly</th><th></th><th></th><th></th><th></th></tr>';
								//Bubbly
								foreach ($bottles as $row) {
									if ($row['Type'] == "Bubbly") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="wine-list"><input type="hidden" name="sell-by" value="bottle"><input type="hidden" name="type" value="Bubbly"><tr>';
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row['Name'] . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="origin"  value="' . $row["Origin"] . '"></input></td> <td><input name="grape"  value="' . $row["Grape"] . '"></input></td>  <td><input name="price" step="0.01" type="number" min="0" value="' . $row["Price"] . '"></input></td> <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								?>
							</tbody>
						</table>
						<br>
						<br>
						<p class="text-center">
							<strong>
							<br>
							Add New Bottle to Wines Sold by Bottle Only</strong>
						</p>
						<form action="processing/processMenus.php" method="post">
							<input type="hidden" name="menu" value="wine-list">
							<input type="hidden" name="sell-by" value="bottle">
							<div class="row">
								<div class="col-md-3">
									<p>
										Type
									</p>
								</div>
								<div class="col-md-3">
									<select name="type">
										<option value="White">White</option>
										<option value="Red">Red</option>
										<option value="Bubbly">Bubbly</option>
										<option value="Rose">Rose</option>
									</select>
								</div>
								<div class="col-md-3">
									<p>
										Name
									</p>
								</div>
								<div class="col-md-3">
									<input name="name">
								</div>
								<div class="col-md-3">
									<p>
										Description
									</p>
								</div>
								<div class="col-md-3">
									<input name="description">
								</div>
								<div class="col-md-3">
									<p>
										Origin
									</p>
								</div>
								<div class="col-md-3">
									<input name="origin">
								</div>
								<div class="col-md-3">
									<p>
										Grape
									</p>
								</div>
								<div class="col-md-3">
									<input name="grape">
								</div>
								<div class="col-md-3">
									<p>
										Price for Bottle
									</p>
								</div>
								<div class="col-md-3">
									<input name="price" type="number" step="0.01" min="0" value="0">
								</div>
							</div>
							<div class="row no-padding-top">
								<div class="col-md-4 col-md-offset-4">
									<button class="center-block" type="submit" name="operation" value="add">
										Submit
									</button>
								</div>
							</div>
						</form>

						<br>
						<hr>
						<br>
						<p class="text-center">
							<strong>Wine By Bottle And Glass</strong>
						</p>
						<table class="table table-bordered table-responsive">
							<thead>
								<tr>
									<th>Name</th><th>Description</th><th>Glass</th><th>Bottle</th><th>Update</th><th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>White</th><th></th><th></th><th></th><th></th><th></th><th></th>
								</tr>
								<?php
								// White Bottles
								foreach ($bottleGlass as $row) {
									if ($row['Type'] == "White") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="wine-list"><input type="hidden" name="sell-by" value="glass-bottle"><input type="hidden" name="type" value="White"><tr>';
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row['Name'] . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="glass" step="0.01" type="number" min="0" value="' . $row["Glass"] . '"></input></td> <td><input name="bottle" step="0.01" type="number" min="0" value="' . $row["Bottle"] . '"></input></td>  <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								echo '<tr></tr><tr><th>Red</th><th></th><th></th><th></th><th></th></tr>';
								// White Bottles
								foreach ($bottleGlass as $row) {
									if ($row['Type'] == "Red") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="wine-list"><input type="hidden" name="sell-by" value="glass-bottle"><input type="hidden" name="type" value="Red"><tr>';
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row["Name"] . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="glass" step="0.01" type="number" min="0" value="' . $row["Glass"] . '"></input></td> <td><input name="bottle" step="0.01" type="number" min="0" value="' . $row["Bottle"] . '"></input></td>  <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}

								echo '<tr></tr><tr><th>Bubbly</th><th></th><th></th><th></th><th></th></tr>';
								//Bubbly
								foreach ($bottleGlass as $row) {
									if ($row['Type'] == "Prosecco") {
										echo '<form  action="processing/processMenus.php" method="post"><input type="hidden" name="menu" value="wine-list"><input type="hidden" name="sell-by" value="glass-bottle"><input type="hidden" name="type" value="Prosecco"><tr>';
										echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row['Name'] . '"></input></td> <td><input name="description" value="' . $row["Description"] . '"></input></td> <td><input name="glass" step="0.01" type="number" min="0" value="' . $row["Glass"] . '"></input></td> <td><input name="bottle" step="0.01" type="number" min="0" value="' . $row["Bottle"] . '"></input></td>  <td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</a></td>';
										echo '</tr></form>';
									}
								}
								?>
							</tbody>
						</table>
						<br>
						<br>
						<p class="text-center">
							<strong>
							<br>
							Add New Bottle to Wines Sold by Bottle and Glass</strong>
						</p>
						<form action="processing/processMenus.php" method="post">
							<input type="hidden" name="menu" value="wine-list">
							<input type="hidden" name="sell-by" value="glass-bottle">
							<div class="row">
								<div class="col-md-3">
									<p>
										Type
									</p>
								</div>
								<div class="col-md-3">
									<select name="type">
										<option value="White">White</option>
										<option value="Red">Red</option>
										<option value="Prosecco">Prosecco</option>
									</select>
								</div>
								<div class="col-md-3">
									<p>
										Name
									</p>
								</div>
								<div class="col-md-3">
									<input name="name">
								</div>
								<div class="col-md-3">
									<p>
										Description
									</p>
								</div>
								<div class="col-md-3">
									<input name="description">
								</div>
								<div class="col-md-3">
									<p>
										Price for Glass
									</p>
								</div>
								<div class="col-md-3">
									<input name="glass"  type="number" step="0.01" min="0" value="0">
								</div>
								<div class="col-md-3">
									<p>
										Price for Bottle
									</p>
								</div>
								<div class="col-md-3">
									<input name="bottle" type="number" step="0.01" min="0" value="0">
								</div>
							</div>
							<div class="row no-padding-top">
								<div class="col-md-4 col-md-offset-4">
									<button class="center-block" type="submit" name="operation" value="add">
										Submit
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>

			<div id="gallery-manager" class="tab-pane fade">
				<p>
					<strong>All images should be cropped to 16x9 aspect ratio</strong>
				</p>
				<p>
					This can be done using this link: <a href="http://resizeimage.net/" target="_blank">Image Cropper Tool</a>
				</p>
				<ol>
					<li>
						Upload Image on the link above
					</li>
					<li>
						On step 2, choose fixed aspect ratio and type 16:9. Draw a box onto the picture and when you are happy click crop
					</li>
					<li>
						Skip Step 3 unless you want to rotate the picture
					</li>
					<li>
						On Step 4, resize the image to 900x506 px
					</li>
					<li>
						Skip steps 5,6
					</li>
					<li>
						On Step 7 choose "Normal compression" and set image quality to 80% and click <strong>Resize image</strong>
					</li>
					<li>
						Click download image and save it on your computer
					</li>
					<li>
						Upload the new image to your website below
					</li>
				</ol>
				<br>
				<br>
				<hr>
				<br>
				<br>

				<h3>Food</h3>
				<p>
					Upload photos to food section of gallery here
				</p>
				<form action="processing/processGallery.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="type" value="Food">
					<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
					<input style="width:400px;" type="submit" value="Upload!" />
				</form>

				<p>
					Delete photos from food section of gallery here
				</p>
				<form action="processing/processGallery.php" method="post">
					<input type="hidden" name="type" value="delete-food">
					<div class="row">

					<?php
					$i = 0;
					foreach ($gallery as $row) {
						if ($row['Type'] == "Food") {
							echo '<div class="col-sm-4 col-lg-2"><img id="' . $row["ID"] . '" class="img-responsive" src="' . $row["Path"] . '">';
							echo '<input type="checkbox" name="checked[]" value="' . $row["ID"] . '"> </div>';
							$i++;
							if ($i == 6) {
								echo '</div><div class="row">';
								$i = 0;
							}
						}
					}
					?>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-5">
							<button type="submit">
								Delete Selected From Food
							</button>
						</div>
					</div>
				</form>

				<br>
				<br>
				<hr>
				<br>
				<br>

				<h3>Wine</h3>
				<p>
					Upload photos to wine section of gallery here
				</p>
				<form action="processing/processGallery.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="type" value="Wine">
					<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
					<input style="width:400px;" type="submit" value="Upload!" />
				</form>

				<p>
					Delete photos from wine section of gallery here
				</p>
				<form action="processing/processGallery.php" method="post">
					<input type="hidden" name="type" value="delete-wine">
					<div class="row">

					<?php
					$i = 0;
					foreach ($gallery as $row) {
						if ($row['Type'] == "Wine") {
							echo '<div class="col-sm-4 col-lg-2"><img id="' . $row["ID"] . '" class="img-responsive" src="' . $row["Path"] . '">';
							echo '<input type="checkbox" name="checked[]" value="' . $row["ID"] . '"> </div>';
							$i++;
							if ($i == 6) {
								echo '</div><div class="row">';
								$i = 0;
							}
						}
					}
					?>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-5">
							<button type="submit">
								Delete Selected From Wine
							</button>
						</div>
					</div>
				</form>

				<br>
				<br>
				<hr>
				<br>
				<br>

				<h3>Restaurant</h3>
				<p>
					Upload photos to restaurant section of gallery here
				</p>
				<form action="processing/processGallery.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="type" value="Restaurant">
					<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
					<input style="width:400px;" type="submit" value="Upload!" />
				</form>

				<p>
					Delete photos from restaurant section of gallery here
				</p>
				<form action="processing/processGallery.php" method="post">
					<input type="hidden" name="type" value="delete-restaurant">
					<div class="row">

					<?php
					$i = 0;
					foreach ($gallery as $row) {
						if ($row['Type'] == "Restaurant") {
							echo '<div class="col-sm-2"><img id="' . $row["ID"] . '" class="img-responsive" src="' . $row["Path"] . '">';
							echo '<input type="checkbox" name="checked[]" value="' . $row["ID"] . '"> </div>';
							$i++;
							if ($i == 6) {
								echo '</div><div class="row">';
								$i = 0;
							}
						}
					}
					?>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-5">
							<button type="submit">
								Delete Selected From Restaurant
							</button>
						</div>
					</div>
				</form>
			</div>

			<div id="events" class="tab-pane fade">
				<h3>Events Manager</h3>
				<table class="table table-bordered table-responsive">
					<tr>
						<th>Name</th><th>Description</th><th>Update</th><th>Delete</th>
					</tr>
					<?php
					foreach ($events as $row) {
							echo '<form  action="processing/processEvents.php" method="post"><tr>';
							echo '<input type="hidden" name="ID" value="' . $row["ID"] . '"></input><td><input name="name" value="' . $row['Name'] . '"></input></td> <td><textarea name="description">' . $row["Description"] . '</textarea></td><td><button type="submit" name="operation" value="update">Update</td> <td><button class="red" name="operation" value="delete" type="submit">Delete</td>';
							echo '</tr></form>';
					}
					?>
				</table>

				<h3>Add New Event</h3>
				<form action="processing/processEvents.php" method="post">
							<div class="row">
								<div class="col-md-3">
									<p>
										Name
									</p>
								</div>
								<div class="col-md-3">
									<input name="name">
								</div>
								<div class="col-md-3">
									<p>
										Description
									</p>
								</div>
								<div class="col-md-3">
									<textarea rows="8" name="description"></textarea>
								</div>
							</div>
							 <div class="row no-padding-top">
								<div class="col-md-4 col-md-offset-4">
									<button class="center-block" type="submit" name="operation" value="add">
										Submit
									</button>
								</div>
							</div> 
						</form>
				

			</div>
		</div>
	</div>
		<!-- jQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

<?php
}

?>