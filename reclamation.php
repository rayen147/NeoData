<?php
session_start();
$user = false;
if(isset($_SESSION["autorisation"])) {

if ($_SESSION["autorisation"] == "admin" || $_SESSION["autorisation"] == "client") {
	$user = true;
}	
}
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Infinity | By Distinctive Themes">
    <meta name="author" content="Distinctive Themes">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <title>Infinity | By Distinctive Themes</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->   
    <link href="assets/css/elusive-webfont.css" rel="stylesheet" >
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
 	<link href="assets/css/style.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">

  <div id="preloader"></div>

  	<div id="search-wrapper">
  		<input id="search-box" placeholder="Search" />
  	</div>  
  
	  <div id="navbar-main">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">				
					<a class="navbar-brand" href="index.php"><h1>SNCT</h1></a>
					<button type="button" class="navbar-toggle dropdown-toggle" id="open-menu" data-toggle="dropdown" data-target="#main-navigation">
						<i class="el-icon-lines"></i>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="main-navigation">
					<ul class="nav navbar-nav">

					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulter <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="./allTrains.php">Trains</a></li>
								<li><a href="./allTickets.php">Tickets</a></li>
								<li><a href="./allTrajets.php">Trajets</a></li>
								<li><a href="./allGares.php">Gares</a></li>
							</ul>
						</li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Agents <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="./controleur.php">Controleurs</a></li>
								<li><a href="./chauffeur.php">Chauffeurs</a></li>

							</ul>
						</li>
						
						<?php if($user == true) { ?>

<li class="dropdown">
	<a href="./abonnement.php">Abonnements</a>
</li>
<li class="dropdown">
	<a href="./reclamation.php">Reclamations</a>
</li>
<?php } ?>
						<li>
							<?php if ($user == false)  {?>
								<a href="./index.php">S'identifier</a>
								<?php } else {?>
									<a onclick="window.location.href='./queries/logout.php'"  data-toggle="modal" data-target="#authModal" data-hover="dropdown" data-whatever="@mdo">Se déconnecter</a>
									<?php }?>
								</li>
								<?php if($user == true) {?>
									<li class="dropdown">
									<ul class="nav navbar-nav">
										<li><a href="#"><?php echo $_SESSION["prenom"] ?></a></li>
										<div style="position: absolute; width: 10px;
                                    height: 10px;
                                    border-radius: 50%;
                                    background-color: limegreen;
                                    right: 0; top: 40%; "></div>
									</ul>
								</li>
								<?php }?>
								
								

						<!-- <li> <a href="#" class="search-trigger"><i class="el-icon-search"></i></a></li> -->
					</ul>
				</div>
			</div>
		</div>
    </div>

	<section class="textdivider single-post-header">
		<div class="container">
			<h1 class="fade-down">Reclamation</h1>
			<hr class="mb60">
		</div>
	</section>


	<!--  CONTENT WRAPPER -->
	<div id="content-wrapper">		
		
		<section class="container page-section">
			<div class="row white">
				<div class="fade-up col-md-offset-2 col-md-8 single-post-content text-center">
					<p>Send a Reclamation</p>
					<div id="message"></div>

					<form method="POST" name="MonForm" action="./queries/addReclamation.php"
                        style="display:flex; flex-direction:column">
                        <input type="text" name="nom" id="nom" placeholder="Nom"
                            style="margin-bottom: 10px" />
                        <input type="text" name="prenom" id="prenom" placeholder="Prenom"
                            style="margin-bottom: 10px" />
                        <input type="email" name="email" id="email" placeholder="Email"
                            style="margin-bottom: 10px" />
							<textarea name="recla" placeholder="Ecrivez votre reclamation"></textarea>


                        <input class="btn btn-success" type="submit" name="submit" value="Add" />
                    </form>
				</div>
			</div><!-- row -->
		</section>
				
		<section class="section-divider textdivider divider6 page-section">
			<div class="container">
				<h1 class="fade-down">CRAFTED IN NEW YORK, USA.</h1>
				<hr>
				<div class="fade-up">
					<p>Times Square, New York</p>
					<p>+47 65584 0546485</p>
				</div>
			</div>
		</section>

		<div id="mapwrapper">
			<div id="map"></div>
		</div>
		
		<div id="ticket" class="container page-section">
			<div class="row row white">
				<div class="col-md-4 fade-up">
					<h3>Ticket Information</h3>
					<p><span class="icon icon-home"></span>Time Square, New York<br/>
						<span class="icon icon-phone"></span>+36 65984 405<br/>
						<span class="icon icon-mobile"></span>+36 65984 405<br/>
						<span class="icon icon-envelop"></span> <a href="#">email@infinityteam.com</a> <br/>
						<span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
						<span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>
					</p>
				</div><!-- col -->
				
				<div class="col-md-4 fade-up">
					<h3>Newsletter</h3>
					<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>

						<form class="form-horizontal" role="form">
						  <div class="form-group">
						    <label for="inputEmail1" class="col-md-4 control-label"></label>
						    <div class="col-md-10">
						      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="text1" class="col-md-4 control-label"></label>
						    <div class="col-md-10">
						      <input type="text" class="form-control" id="text1" placeholder="Your Name">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-md-10">
						      <button type="submit" class="btn btn-success">Sign in</button>
						    </div>
						  </div>
					   </form><!-- form -->
				
				</div><!-- col -->
				
				<div class="col-md-4 fade-up">
					<h3>Support Us</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div><!-- col -->

			</div><!-- row -->		
		</div>

	</div>
	<!-- CONTENT WRAPPER -->

	<div id="footerwrap">
		<div class="container">
			<div class="btt-wrapper fade-down"><a class="btt-link smoothScroll" href="#headerwrap"><i class="el-icon-chevron-up"></i></a></div>
			<ul id="footer-social" class="fade-down">
				<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-twitter"></i></a></li>
				<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-facebook"></i></a></li>
				<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-googleplus"></i></a></li>
				<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-flickr"></i></a></li>
				<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-youtube"></i></a></li>
				<li><a href="#" target="_blank" title="Like Us"><i class="el-icon-rss"></i></a></li>
			</ul>
			<h4 class="fade-up">Created by <a href="http://www.distinctivethemes.com">Distinctive Themes</a> - Copyright 2019</h4>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
	<script type="text/javascript" src="assets/js/init.js"></script>

  </body>
</html>
