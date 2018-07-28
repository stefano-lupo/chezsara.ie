<?php
include 'generic/navbar.php';
require 'generic/connect.php';
$pics = getMatrix("SELECT * FROM `gallery` ORDER BY Date DESC");

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Chez Sara Wine Bar & Restaurant Malahide, Dublin photo gallery. View photos of Chez Sara food, wines and inside of the restaurant.">
		<meta name="author" content="Lupo Web Design">

		<title>Gallery | Chez Sara Malahide Wine Bar & Restaurant Malahide, Dublin</title>

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

		<?php getNav("gallery.php"); ?>

		<!-- Page Content -->
		<div class="container-fluid" id="gallery">
			<h1 class="text-center">Photo Gallery</h1>

			<div class="row no-padding">
				<h2 class="page-header">Food</h2>

				<?php
				$i = 0;
				foreach($pics as $row){
					if($row['Type'] == "Food"){
						echo '<div class="col-md-4 no-gutter">';					
						 echo '<img src="'.$row["Path"].'" class="img-responsive center-block">';
						 $i++;
						 echo '</div>';
						 if ($i==3){
						 	echo '</div><div class="row no-padding no-row-sm">';
							 $i=0;
						 }
				}
				}
				?>
	</div>
		<br><br>
		
		
			<div class="row no-padding">
				<h2 class="page-header">Wine</h2>

				<?php
				$i = 0;
				foreach($pics as $row){
					if($row['Type'] == "Wine"){
						echo '<div class="col-md-4 no-gutter">';					
						 echo '<img src="'.$row["Path"].'" class="img-responsive center-block">';
						 $i++;
						 echo '</div>';
						 if ($i==3){
						 	echo '</div><div class="row no-padding no-row-sm">';
							$i=0;
						 }
				}
				}
				?>
				</div>
			<br><br>
			
			<div class="row no-padding">
				<h2 class="page-header">Restaurant</h2>

				<?php
				$i = 0;
				foreach($pics as $row){
					if($row['Type'] == "Restaurant"){
						echo '<div class="col-md-4 no-gutter">';					
						 echo '<img src="'.$row["Path"].'" class="img-responsive center-block">';
						 $i++;
						 echo '</div>';
						 if ($i==3){
						 	echo '</div><div class="row no-padding no-row-sm">';
							 $i=0;
						 } 
				}
				}
				?>
	</div>

		</div>
		<br><br><br>

		<?php
	include 'generic/footer.php';
 ?>

		<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
			<div class="modal-dialog  modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title text-center"></h4>
					</div>
					<div class="modal-body">
						<img id="modal-image" class="img-responsive center-block" />
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="js/custom.js"></script>
		

	</body>

</html>






