<?php
include 'generic/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Make a reservation at Chez Sara Wine Bar & Restaurant. Book a table at Chez Sara Malahide Dublin.">
		<meta name="author" content="">

		<title>Contact | Chez Sara Wine Bar & Restaurant Malahide Dublin Reserations</title>

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
		<?php getNav("contact.php"); ?>

		<div class="container" id="contact">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Reserve A Table </h1>
					<p>
						Please use the form below to reserve a table. Once we receive your email, a confirmation email will be sent to you to let you know your table has been booked.
					</p>
				</div>
				<form>
					<div class="col-sm-6">
						<p>
							Name (*)
						</p>
						<p>
							<input type="text" name="name" id="name" placeholder="Name">
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							Phone Number (*)
						</p>
						<p>
							<input type="number" name="phoneNumer" id="phoneNumber" placeholder="0862554849">
						</p>
					</div>
					<div class="col-sm-6">

						<p>
							Email (*)
						</p>
						<p>
							<input type="email" name="email" id="email" placeholder="you@hotmail.com">
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							Numer of Guests (*)
						</p>
						<p>
							<input type="number" name="guests" id="guests" min="1" value="2">
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							Date (*)
						</p>
						<p>
							<input type="date" name="date" id="date">
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							Time (*)
						</p>
						<p>
							<input type="time" name="time" id="time">
						</p>
					</div>
			</div>

			<p>
				Comments or Requests
			</p>
			<p>
				<textarea id="comments" name="message" id="message" placeholder="Your Message"></textarea>				


			</p>

			<p class="text-center">
				<button type="submit" class="btn">
					Send
				</button>
			</p>
			</form>
		</div>

		<?php include 'generic/footer.php';?>

		<div id="submitted-modal" class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times</button>
					<img id="spinner" src="img/spinner.gif" class="img-responsive center-block">
					<div class="modal-body">
						<div id="fill-fields-text">
							<h3>Sorry!</h3>
							<p>Please fill all of the fields highlighted in red.
						</div>
						<div id="success-text">
							<h3>Thank you!</h3>
							<p>A request for a table has been placed and we will get back to you to confirm shortly.</p>
							<p><strong>Please Note: Our reply may end up in the Trash/Spam folder of your mailbox so please check there also!</strong></p>
						</div>
						<div id="failure-text">
							<h3>Sorry!</h3>
							<p>Something went wrong, please try again. </p>
							<p>If this fails again, you may submit your booking by emailing <a href="mailto:info@chezsara.ie">info@chezsara.ie</a> directly</p>
							<p>Or, if you would prefer, give us a call on 01 845 1882 </p>
						</div>
					</div>
					<div class="modal-footer">
						<button id="close-modal-btn" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="js/custom.js"></script>
		<script src="js/email-validation.js"></script>

	</body>

</html>