<?php


function getNav($page) {
	$pages = array(
	array("about.php","About Us"),
	array("menus.php","Menus"),
	array("events.php","Events"),
	array("gallery.php","Gallery"),
	array("contact.php","Reservations"));
	?>
	<nav id="bs-menu" class="navbar navbar-fixed-top navbar-default " role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Chez Sara</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-right">
                	
                	<?php foreach($pages as $p){
                		 if($page == $p[0]){
                			echo '<li class="active">';
                		} else {
                			echo '<li>';
                		}
						echo '<a href="../'.$p[0].'">'.$p[1].'</a></li>';
                	}?>

                </ul>
            </div>
        </div>
    </nav>
<?php } ?>

