<?php
	include 'generic/navbar.php';
	include 'generic/connect.php';
	$events = getMatrix("SELECT * FROM `events`");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chez Sara Malahide hosts a weekly wine tasting club and offers cooking classes offering tips and Chez Sara special recepies,">
    <meta name="author" content="Lupo Web Design">

    <title>Events | Chez Sara Events - Cooking Classes & Wine Tasting</title>

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
	<? getNav("events.php");?>

    <!-- Page Content -->
    <div class="container-fluid larger-container md-center" id="events">
        <div class="row">
            <h1 class="text-center">Events At Chez Sara</h1>
            <div class="col-lg-6">
                <h2 class="red text-center">Today</h2>
                <hr>
                <div id="early-bird-event">
                    <h3>Early Bird</h3>
                    <p>Start your evening the right way and enjoy a delicious two-course meal with or without wine. The early bird menu is available Sunday - Thursday from 5pm to 7pm.</p>
                    <p><strong>Two Courses - €19.95 per person</strong></p>
                    <p><strong>Two Course for Two with House Wine - €59</strong></p>
                    <p><strong><a href="menus.php">View Menu</a></strong></p>
                </div>
                <div id="a-la-carte-event">
                <h3>Á La Carte</h3>
                <p>Enjoy our full Á La Carte Menu tonight, until late. Get a taste of the Mediterranean along with some beautiful European or New World Wines.</p>
                <p><strong>Available from 5pm.</strong></p>
                <p><strong><a href="menus.php">View Menu</a></strong></p>
                </div>
                <div id="monday-closed">
               		<h3>Closed</h3>
                	<p>Chez Sara is closed on Mondays.</p>
                	<p><strong>However our cooking classes and wine tasting take place on Mondays.</p>
                		<p>See Weekly Events section for more info.</strong></p>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="red text-center">Upcoming Events</h2>
                <hr>
                <?
                	foreach ($events as $row){
                		echo '<h3>'.$row["Name"].'</h3>';
						echo '<p>'.nl2br($row["Description"]).'</p>';
                	}
                ?>

            </div>
        </div>
    </div>

<? include 'generic/footer.php'; ?>






		<!-- jQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="js/custom.js"></script>

</body>

</html>
