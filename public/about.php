<?php
	include 'generic/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="About Chez Sara Wine Bar & Restaurant Malahide, Dublin. Chez Sara video, Max Usai head cheff. See Chez Sara food suppliers.">
    <meta name="author" content="Lupo Web Design">

    <title>About | Chez Sara Wine Bar & Restaurant Malahide</title>
    
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

<body id="about">
	<? getNav("about.php");?>


    <div class="container-fluid larger-container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Chez Sara</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h2 class="hide-md page-header">Chez Sara <br><small>Wine Bar & Restuarant</small></h2>
                <img class="img-responsive center-block margin-bottom img-circle" src="img/about/outside-square.jpg">
            </div>
            <div class="col-md-8">
                <h2 class="no-margin-top show-md page-header">Our Restaurant</h2>
                <p>Chez Sara Wine Bar & Restaurant is an intimate eatery offering a taste of the Mediteranian. Our Restaurant is located in the heart of the picturesque harbour village of Malahide. We specialise in exquisite sea-food and steak, cooked with a mediteranian flare, as well as delicious bread, baked fresh every day.
                    <br> <a href="menus.php">See our Menu</a> </p>
                <br>
                <p>Nothing goes better with a delicious meal than a bottle of the finest wine. You can find a fantastic selection of European Wine with an emphasis on French, Italian & some excellent New World Wines as well.
                    <br> <a href="menus.php">See our Winelist.</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <iframe id="video" width="100%" height="800px" src="https://www.youtube.com/embed/Wc-UVdkaPVc" frameborder="0" allowfullscreen>
                </iframe>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h2 class="hide-md page-header">Proprieter & Head Chef<br><small>Max Usai</small></h2>
                <img src="img/about/max2.jpg" class="img-responsive margin-bottom center-block img-circle">
            </div>
            <div class="col-md-8">
                <h2 class="no-margin-top show-md page-header">Proprieter & Head Chef<br>
                <small>Max Usai</small></h2>
                <p>Max is a Sardinian born chef with over 20 years experience in the field. Max has travelled throughout Europe and has gained experience in a variety of different styles of cuisine, before settling in Ireland. </p>
                <p>Max has worked in Michelin Star restaurants, as well as a 5-star hotel, but has since decided to establish his own restaurant with his own style of food.</p>
                <p>Max is very passionate about fresh, locally sourced ingredients and specializes in sea food.</p>
                
            </div>

        </div>
        <!-- /.row -->


    </div>

	<? include 'generic/footer.php'; ?>



		<!-- jQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="js/custom.js"></script>

</body>

</html>
