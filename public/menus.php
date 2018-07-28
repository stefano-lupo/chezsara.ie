<?php
include 'generic/navbar.php';
include 'generic/connect.php';
$normal = getMatrix("SELECT * FROM `a-la-carte`");
$earlyBird = getMatrix("SELECT * FROM `early-bird`");
$bottles = getMatrix("SELECT * FROM `bottles`");
$bottleGlass = getMatrix("SELECT * FROM `bottle-and-glass`");
?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Chez Sara Malahide Menu & Wine List. See Chez Sara A La Carte & Early Bird Menu. Early Bird served Sunday - Thursday from 5pm - 7pm">
		<meta name="author" content="Lupo Web Design">

		<title>Menu | Chez Sara Malahide Early Bird, A La Carte & Winelist</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

		<!-- Custom CSS -->
		<link href="css/modern-business.css" rel="stylesheet">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		

	</head>

	<body>
		<?php getNav("menus.php"); ?>

		<!-- Page Content -->
		<div class="container-fluid larger-container" id="menu">

			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center">Chez Sara Menus </h1>
				</div>
			</div>
			<!-- /.row -->

			<!-- Menu Tabs -->
			<div class="row">
				<div class="col-lg-12">
					<ul id="myTab" class="nav nav-tabs nav-justified">
						<li class="active">
							<a class="red" href="#a-la-carte" data-toggle="tab">À La Carte</a>
						</li>
						<li class="">
							<a class="red" href="#early-bird" data-toggle="tab">Early Bird</a>
						</li>
						<li class="">
							<a class="red" href="#wine-list" data-toggle="tab">Wine List</a>
						</li>
					</ul>
				</div>
			</div>

			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="a-la-carte">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="text-center">À La Carte</h2>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<th><h3 class="page-header">Starters</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>
								</tr>
								<?php
								foreach ($normal as $row) {
									if ($row['Plate'] == "Starter") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td class="text-center"><strong>' . $row["Price"] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<th><h3 class="page-header">Main Courses</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>
								</tr>
								<?php
								foreach ($normal as $row) {
									if ($row['Plate'] == "Main Course") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td class="text-center"><strong>' . $row["Price"] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table">
								<tr>
									<th><h3 class="page-header">Side Orders</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>
								</tr>
								<?php
								foreach ($normal as $row) {
									if ($row['Plate'] == "Side Order") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td class="text-center"><strong>' . $row["Price"] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<th><h3 class="page-header">Deserts</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>
								</tr>
								<?php
								foreach ($normal as $row) {
									if ($row['Plate'] == "Dessert") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td class="text-center"><strong>' . $row["Price"] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3"">
							<table class="table">
								<tr>
									<th><h3 class="page-header">To Finish</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>
								</tr>
								<?php
								foreach ($normal as $row) {
									if ($row['Plate'] == "To Finish") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td class="text-center"><strong>' . $row["Price"] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="early-bird">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="text-center">Early Bird</h2>
							<p class="text-center">
								Available Sunday - Thursday from 5pm - 7pm.
							</p>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<th><h3 class="page-header">Starters</h3></th>
								</tr>
								<?php
								foreach ($earlyBird as $row) {
									if ($row['Plate'] == "Starter") {
										if ($row['Suppliment'] != 0) {
											echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p><p><strong>' . $row["Suppliment"] . '</strong></p></td></tr>';
										} else {
											echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p><br></td></tr>';
										}

									}
								}
								?>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<th><h3 class="page-header">Main Courses</h3></th>
								</tr>
								<?php
								foreach ($earlyBird as $row) {
									if ($row['Plate'] == "Main Course") {
										if ($row['Suppliment'] != 0) {
											echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p><p class="red"><strong>' . $row["Suppliment"] . ' Suppliment</strong></p></td></tr>';
										} else {
											echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p><br></td></tr>';
										}
									}
								}
								?>
							</table>
						</div>
					</div>
					<?php
					$dessert = false;
					foreach($earlyBird as $row){
					if($row['Plate'] == "Dessert"){
					$dessert = true;
					}
					}
					if($dessert){
					?>
					<div class="row">
						<div class="col-md-6>
							<table class="table">
								<tr>
									<th><h3 class="page-header">Desserts</h3></th>
									<th><h3 class="page-header">€</h3></th>
								</tr>
								<?php
								foreach ($earlyBird as $row) {
									if ($row['Plate'] == "Dessert") {
										if ($row['Suppliment'] != 0) {
											$suppliment = $row['Suppliment'] . " Suppliment";
										} else {
											$suppliment = "";
										}
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td><strong>' . $suppliment . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
					<?php
					}
					?>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h3 class="page-header">Prices</h3>
							<p>
								<strong>Two Course Set Menu - €20 per person</strong>
							</p>
							<p>
								<strong>Two Course Set Menu for 2 People with Bottle of House Wine - €60</strong>
							</p>
							<p>
								Available Sunday - Thursday from 5pm - 7pm.
							</p>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="wine-list">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="text-center">Wine List</h2>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<h3 class="text-center  no-margin-bottom" style="color:#8a1c26">Red</h3>
							<table class="table">
								<tr>
									<th><h3 class="page-header">Bottle</h3></th>
									<th><h3 class="page-header">Grape</h3></th>
									<th><h3 class="page-header">Origin</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>

								</tr>
								<?php
								foreach ($bottles as $row) {
									if ($row['Type'] == "Red") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td>' . $row['Grape'] . '</td><td>' . $row["Origin"] . '</td><td class="text-center"><strong>' . $row['Price'] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<h3 class="text-center no-margin-bottom" style="color:#D0D08D">White</h3>
							<table class="table">
								<tr>
									<th><h3 class="page-header">Bottle</h3></th>
									<th><h3 class="page-header">Grape</h3></th>
									<th><h3 class="page-header">Origin</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>

								</tr>
								<?php
								foreach ($bottles as $row) {
									if ($row['Type'] == "White") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p> ' . $row["Description"] . '</p></td><td>' . $row['Grape'] . '</td><td>' . $row["Origin"] . '</td><td class="text-center"><strong>' . $row['Price'] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3 class="text-center  no-margin-bottom" style="color:#EF597B">Rose</h3>
							<table class="table">
								<tr>
									<th><h3 class="page-header">Bottle</h3></th>
									<th><h3 class="page-header">Grape</h3></th>
									<th><h3 class="page-header">Origin</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>

								</tr>
								<?php
								foreach ($bottles as $row) {
									if ($row['Type'] == "Rose") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td>' . $row['Grape'] . '</td><td>' . $row["Origin"] . '</td><td class="text-center"><strong>' . $row['Price'] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<h3 class="text-center no-margin-bottom" style="color:#D0D08D">Bubbly</h3>
							<table class="table">
								<tr>
									<th><h3 class="page-header">Bottle</h3></th>
									<th><h3 class="page-header">Grape</h3></th>
									<th><h3 class="page-header">Origin</h3></th>
									<th><h3 class="page-header text-center">€</h3></th>

								</tr>
								<?php
								foreach ($bottles as $row) {
									if ($row['Type'] == "Bubbly") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td>' . $row['Grape'] . '</td><td>' . $row["Origin"] . '</td><td class="text-center"><strong>' . $row['Price'] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2>Wine by Glass & Bottle</h2>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<h3 class="text-center  no-margin-bottom" style="color:#8a1c26">Red</h3>
							<table class="table">
								<tr>
									<th><h3 class="page-header">Name</h3></th>
									<th><h3 class="page-header text-center">Glass</h3></th>
									<th><h3 class="page-header text-center">Bottle</h3></th>

								</tr>
								<?php
								foreach ($bottleGlass as $row) {
									if ($row['Type'] == "Red") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p>' . $row["Description"] . '</p></td><td class="text-center"><strong>' . $row['Glass'] . '</strong></td><td class="text-center"><strong>' . $row["Bottle"] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3 class="text-center no-margin-bottom" style="color:#D0D08D">White</h3>
							<table class="table">
								<tr>
									<th><h3 class="page-header">Bottle</h3></th>
									<th><h3 class="page-header text-center">Glass</h3></th>
									<th><h3 class="page-header text-center">Bottle</h3></th>
	

								</tr>
								<?php
								foreach ($bottleGlass as $row) {
									if ($row['Type'] == "White") {
										echo '<tr><td><p><strong>' . $row["Name"] . '</strong></p><p> ' . $row["Description"] . '</p></td><td class="text-center"><strong>' . $row['Glass'] . '</strong></td><td class="text-center"><strong>' . $row["Bottle"] . '</strong></td></tr>';
									}
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		include 'generic/footer.php';
		?>

		<!-- jQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="js/custom.js"></script>

	</body>

</html>