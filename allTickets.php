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

<?php
  include "../../controller/ticketC.php";

  $order = false;
  $by = "";
  $type = "";

  $ticket=new ticketC();
  if (isset($_GET['order'])) {
    $order = $_GET['order'];
  }
  if (isset($_GET['by'])) {
    $by = $_GET['by'];
  }
  if (isset($_GET['type'])) {
    $type = $_GET['type'];
  }

  $search = $_GET['search'] ?? "";
  
  if (isset($_GET['search'])) {
    $listeTickets=$ticket->afficherTicket($search);
  
  } else {
  
    $listeTickets=$ticket->afficherTicketTri($order , $by , $type );
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
			<h1 class="fade-down">All tickets</h1>
			<hr class="mb60">
		</div>
	</section>


	<!--  CONTENT WRAPPER -->
	<div id="content-wrapper">		
		
		<section id="about" class="container page-section">
        <div class="main-panel">          
        <div class="content-wrapper">
            <form method="GET" action="" class="input-group rounded" style="margin-bottom: 20px">
                <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <!-- <button type="submit" class="btn btn-primary"> -->
                    <!-- </button> -->
                </form>
                <form action="./queries/genpdf.php">
                <div class="p-t-20">
            
                    <button class="btn btn--radius btn--green" type="submit">Generer PDF</button>
					
					
                </div>
            </form>
			<button><a href="./ticket.php">Get a new ticket</a></button>
        <table class="table bg-white">
            <thead>
                <tr>
                <th scope="col">
                  <a style="color: inherit;" href="AllTickets.php?order=<?php echo true ?>&by=<?php echo 'id_ticket'?>&type=<?php if ($type === "" || $type === "asc"){
                    echo "desc";
                  } else {
                    echo "asc";
                  } ?>">Id</a>
                  </th>
                <th scope="col">
                  <a style="color: inherit;" href="AllTickets.php?order=<?php echo true ?>&by=<?php echo 'id_trajet'?>&type=<?php if ($type === "" || $type === "asc"){
                    echo "desc";
                    } else {
                      echo "asc";
                    } ?>">Id de trajet</a>
                    </th>
                <th scope="col">
                  <a style="color: inherit;" href="AllTickets.php?order=<?php echo true ?>&by=<?php echo 'prix'?>&type=<?php if ($type === "" || $type === "asc"){
                    echo "desc";
                    } else {
                      echo "asc";
                    } ?>">Prix</a>
                    </th>
                <th scope="col">
                  <a style="color: inherit;" href="AllTickets.php?order=<?php echo true ?>&by=<?php echo 'classT'?>&type=<?php if ($type === "" || $type === "asc"){
                    echo "desc";
                    } else {
                      echo "asc";
                    } ?>">Classe de trajet</a>
                    </th>
                <th>Date</th>
                </tr>
            </thead>
            <tbody>

            <?PHP
            foreach($listeTickets as $row){
                ?>
                <tr>
                    <td><?PHP echo $row['id_ticket']; ?></td>
                    <td><?PHP echo $row['id_trajet']; ?></td>
                    <td><?PHP echo $row['prix']; ?></td>
                    <td><?PHP echo $row['classT']; ?></td>

                    <td><?PHP echo $row['date']; ?></td>


                </tr>

                <?PHP
            }

            ?>




            </tbody>
        </table>

    <!-- main-panel ends -->
</div>
		</section>
		
		<section class="section-divider textdivider divider2">
			<div class="container">
				<h1 class="fade-down section-title">HERE IS THE PROOF</h1>
				<hr>
				<div class="col-md-3">
					<span class="counter">100</span>
					<span class="counter-desc">Percent Focus</span>
				</div>
				<div class="col-md-3">
					<span class="counter">1000</span>
					<span class="counter-desc">Minimum Saving</span>
				</div>
				<div class="col-md-3">
					<span class="counter">10000</span>
					<span class="counter-desc">Ideas</span>
				</div>
				<div class="col-md-3">
					<span class="counter">100000</span>
					<span class="counter-desc">Profit</span>
				</div>
			</div>
		</section>
		
		<section id="contact" class="container-fluid page-section">
			<div class="white">
				<div class="col-md-4 fade-up">
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"></span>Time Square, New York<br/>
						<span class="icon icon-phone"></span>+36 65984 405<br/>
						<span class="icon icon-mobile"></span>+36 65984 405<br/>
						<span class="icon icon-envelop"></span> <a href="#">email@infinityteam.com</a> <br/>
						<span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
						<span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>
					</p>
				</div>				
				<div class="col-md-8 fade-up">
					<h3>Drop Us A Message</h3>
					<br>
					<div id="message"></div>
					<form method="post" action="sendemail.php" id="contactform">
						<input type="text" name="name" id="name" placeholder="Name" />
						<input type="text" name="email" id="email" placeholder="Email" />
						<input type="text" name="website" id="website" placeholder="Website" />
						<textarea name="comments" id="comments" placeholder="Comments"></textarea>
						<input class="btn btn-success" type="submit" name="submit" value="Submit" />
					</form>
				</div>
			</div>		
		<section >

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
