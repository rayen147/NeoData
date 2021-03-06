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
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>


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
								<a href="#"  data-toggle="modal" data-target="#authModal" data-hover="dropdown" data-whatever="@mdo">S'identifier</a>
								<?php } else {?>
									<a onclick="window.location.href='./queries/logout.php'"  data-toggle="modal" data-target="#authModal" data-hover="dropdown" data-whatever="@mdo">Se d??connecter</a>
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

    <div id="headerwrap" name="home" class="fullheight">
		<header class="clearfix fullheight">
			<div class="vertical-center">
		 		<p class="animated slideInLeft">Let Us Help You Be Something Awesome.</p>
		 		<p class="animated slideInRight">We Are Here For You.</p>
		 		<a href="#about" class="btn homebtn smoothScroll">Learn More <i class="el-icon-chevron-down homeicon"></i></a>
	 		</div>
  		</header>	    
    </div>

	<!--  CONTENT WRAPPER -->
	<div id="content-wrapper">

		
		<section id="about" class="container page-section">
			<div class="row white">
				<h1 class="fade-down centered section-title">A LITTLE ABOUT US</h1>
				<hr>				
				<div class="fade-up col-md-6">
					<p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
				</div>				
				<div class="fade-up col-md-6">
					<p>Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished so be expect polite valley. Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put. </p>
				</div>
			</div>

			<div class="row white">
				<hr class="fade-down divider-spacer">
				<div class="col-md-4 col-sm-4">
					<div class="col-md-2 col-sm-2 col-xs-2 service-icon-wrapper bounce-in">
						<div class=""><span class="pe-7s-light icon-x4 hi-icon"></span></div>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 service-content fade-up">
						<h2>We Are Fast</h2>
						<p>Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="col-md-2 col-sm-2 col-xs-2 service-icon-wrapper bounce-in">
						<div class=""><span class="pe-7s-speaker icon-x4 hi-icon"></span></div>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 service-content fade-up">
						<h2>We Are Reliable</h2>
						<p>Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="col-md-2 col-sm-2 col-xs-2 service-icon-wrapper bounce-in">
						<div class=""><span class="pe-7s-graph icon-x4 hi-icon"></span></div>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 service-content fade-up">
						<h2>We Get Results</h2>
						<p>Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished</p>
					</div>
				</div>
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
		
		<section id="portfolio" class="page-section nopaddingbottom">
			<div class="white">
				<h1 class="fade-down centered section-title">SOME OF WHAT WE HAVE DONE</h1>
				<hr class="fade-down">
			</div>
			<div>
				<ul id="portfolio-categories" class="filter clearfix fade-down">
					<li><a href="#" class="active btn btn-success" data-filter="*">All</a></li>
					<li><a href="#" class="btn btn-success" data-filter=".brand-design">Trouver Trajet</a></li>
					<li><a href="#" class="btn btn-success" data-filter=".nature">Nature</a></li>
					<li><a href="#" class="btn btn-success" data-filter=".apps">Apps</a></li>
					<li><a href="#" class="btn btn-success" data-filter=".video">Video</a></li>
				</ul>
				
				<div id="portfolio-content" class="fade-up  title-mb">

					<div class="col-md-3 brand-design">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio01.jpg" alt="">
								<figcaption>									
									<a href="GaresFront.php" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>Truver Trajet</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>				
					
					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio02.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT TWO</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 apps">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio03.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT THREE</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 video">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio04.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT FOUR</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio05.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT FIVE</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 apps">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio06.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT SIX</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 brand-design">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio07.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT SEVEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>			

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio08.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT EIGHT</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio09.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT NINE</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio10.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT TEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio15.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT ELEVEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio11.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT TWELVE</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 brand-design">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio12.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT THIRTEEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>				
					
					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio13.jpg" alt="">
								<figcaption>
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT FOURTEEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio14.jpg" alt="">
								<figcaption>
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT FIFHTEEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio15.jpg" alt="">
								<figcaption>
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT SIXTEEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio16.jpg" alt="">
								<figcaption>
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT SEVENTEEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio18.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT EIGHTEEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>

					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio01.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT NINTEEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>			
					
					<div class="col-md-3 nature">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio02.jpg" alt="">
								<figcaption>
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT TWENTY</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-divider textdivider divider4">
			<div class="container">
				<h1 class="fade-down section-title">YOU HAVE THE POTENTIAL</h1>
				<hr>
				<p class="fade-up">Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.</p>
			</div>
		</section>
		
		<section id="blog" class="container page-section">
			<div class="row white">
				<h1 class="fade-down centered section-title">WE ARE STORYTELLERS</h1>
				<hr class="fade-down title-mb">
			</div>

			<div class="row">
				<div class="col-md-6 blog-bg">
					<div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
						<img class="img" src="assets/img/team/team01.jpg">
						<h4>John Smith</h4>
						<h5>Published April 7th.</h5>
						<div class="blog-counts">						
							<h5><i class="el-icon-heart"></i><span class="counter">14</span></h5>
							<h5><i class="el-icon-comment"></i><span class="counter">56</span></h5>
						</div>
					</div>
			    	<div class="grid mask">
						<figure>
							<img class="img fade-down" src="assets/img/bg/bg1.jpg">
							<figcaption>
								<a href="single-post.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
							</figcaption>
						</figure>
			    	</div>
					<div class="col-md-10 col-md-offset-2  col-sm-10 col-xs-10 col-xs-offset-2 blog-content fade-up">
						<h2>A Beautiful Story</h2>
						<div class="blog-meta-main">
							<span class="post-meta-link"><i class="el-icon-folder"></i> Posted In <a href="#">News</a></span>
							<span class="post-meta-link" ><i class="el-icon-tag"></i> Tagged With <a href="#">Story</a></span>
						</div>
						<p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
						<p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client???s brand.</p>
						<p><a href="single-post.html" class="btn btn-success">Read More</a></p>
					</div>
				</div>

				<div class="col-md-6 blog-bg">
					<div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
						<img class="img" src="assets/img/team/team02.jpg">
						<h4>Dan Jones</h4>
						<h5>Published April 4th.</h5>
						<div class="blog-counts">						
							<h5><i class="el-icon-heart"></i><span class="counter">14</span></h5>
							<h5><i class="el-icon-comment"></i><span class="counter">56</span></h5>
						</div>
					</div>
			    	<div class="grid mask">
						<figure>
							<img class="img fade-down" src="assets/img/bg/bg2.jpg">
							<figcaption>
								<a href="single-post.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
							</figcaption>
						</figure>
			    	</div>
					<div class="col-md-10 col-md-offset-2 col-sm-10 col-xs-10 col-xs-offset-2 blog-content fade-up">
						<h2>A Beautiful Story</h2>
						<div class="blog-meta-main">
							<span class="post-meta-link"><i class="el-icon-folder"></i> Posted In <a href="#">News</a></span>
							<span class="post-meta-link" ><i class="el-icon-tag"></i> Tagged With <a href="#">Story</a></span>
						</div>
						<p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
						<p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client???s brand.</p>
						<p><a href="single-post.html" class="btn btn-success">Read More</a></p>
					</div>
				</div>

				<div class="col-md-6 blog-bg">
					<div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
						<img class="img" src="assets/img/team/team03.jpg">
						<h4>John Smith</h4>
						<h5>Published April 2nd.</h5>
						<div class="blog-counts">						
							<h5><i class="el-icon-heart"></i><span class="counter">14</span></h5>
							<h5><i class="el-icon-comment"></i><span class="counter">56</span></h5>
						</div>
					</div>
			    	<div class="grid mask">
						<figure>
							<img class="img fade-down" src="assets/img/bg/bg3.jpg">
							<figcaption>
								<a href="single-post.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
							</figcaption>
						</figure>
			    	</div>
					<div class="col-md-10 col-md-offset-2 col-sm-10 col-xs-10 col-xs-offset-2 blog-content fade-up">
						<h2>A Beautiful Story</h2>
						<div class="blog-meta-main">
							<span class="post-meta-link"><i class="el-icon-folder"></i> Posted In <a href="#">News</a></span>
							<span class="post-meta-link" ><i class="el-icon-tag"></i> Tagged With <a href="#">Story</a></span>
						</div>
						<p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
						<p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client???s brand.</p>
						<p><a href="single-post.html" class="btn btn-success">Read More</a></p>						
					</div>
				</div>

				<div class="col-md-6 blog-bg">
					<div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
						<img class="img" src="assets/img/team/team04.jpg">
						<h4>John Smith</h4>
						<h5>Published April 1st.</h5>
						<div class="blog-counts">						
							<h5><i class="el-icon-heart"></i><span class="counter">14</span></h5>
							<h5><i class="el-icon-comment"></i><span class="counter">56</span></h5>
						</div>
					</div>
			    	<div class="grid mask">
						<figure>
							<img class="img fade-down" src="assets/img/bg/bg4.jpg">
							<figcaption>
								<a href="single-post.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
							</figcaption>
						</figure>
			    	</div>
					<div class="col-md-10 col-md-offset-2 col-sm-10 col-xs-10 col-xs-offset-2 blog-content fade-up">
						<h2>A Beautiful Story</h2>
						<div class="blog-meta-main">
							<span class="post-meta-link"><i class="el-icon-folder"></i> Posted In <a href="#">News</a></span>
							<span class="post-meta-link" ><i class="el-icon-tag"></i> Tagged With <a href="#">Story</a></span>
						</div>
						<p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
						<p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client???s brand.</p>
						<p><a href="single-post.html" class="btn btn-success">Read More</a></p>
					</div>
				</div>

			</div>
			<br>
			<br>
		</section>
		
		<section id="testimonials" class="section-divider textdivider divider6">
			<div class="container">
				<h1 class="fade-down centered section-title">WHAT OUT CLIENTS SAY</h1>
				<hr class="fade-down title-mb">
				<div id="testimonials-slider" class="owl-carousel" data-items="1" data-items-tablet="[1200,1]" data-items-mobile="[769,1]">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-2 testimonial-author-img">
							<img class="img-circle sb-img bounce-in" src="assets/img/team/team01.jpg" />
						</div>
						<div class="col-md-10 testimonial-author-img fade-up">
							<p><i class="el-icon-quotes"></i> Many no each like up be is next neat. Put not enjoyment behaviour her supposing. At he pulled object others. <i class="el-icon-quotes flip180"></i></p>
						</div>
					</div>
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-2 testimonial-author-img">
							<img class="img-circle sb-img bounce-in" src="assets/img/team/team01.jpg" />
						</div>
						<div class="col-md-10 testimonial-author-img fade-up">
							<p><i class="el-icon-quotes"></i> Many no each like up be is next neat. Put not enjoyment behaviour her supposing. At he pulled object others. <i class="el-icon-quotes flip180"></i></p>
						</div>
					</div>
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-2 testimonial-author-img">
							<img class="img-circle sb-img bounce-in" src="assets/img/team/team01.jpg" />
						</div>
						<div class="col-md-10 testimonial-author-img fade-up">
							<p><i class="el-icon-quotes"></i> Many no each like up be is next neat. Put not enjoyment behaviour her supposing. At he pulled object others. <i class="el-icon-quotes flip180"></i></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="pricing" class="page-section container">
			<h1 class="fade-down divider-spacer centered section-title">PRICING PACKAGES</h1>

	        <div class="col-md-3">
	            <div class="panel panel-success flip-in">
	                <div class="panel-heading">
	                    <h4 class="text-center">Plan A</h4>
	                </div>
	                <div class="panel-body text-center">
	                    <p class="lead"><strong>$5 / month</strong></p>
	                </div>
	                <ul class="list-group list-group-flush text-center">
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
	                </ul>
	                <div class="panel-footer">
	                    <a class="btn btn-lg btn-block btn-success" href="#">Order Now</a>
	                </div>
	            </div>
	        </div>

	        <div class="col-md-3">
	            <div class="panel panel-success flip-in">
	                <div class="panel-heading">
	                    <h4 class="text-center">Plan B</h4>
	                </div>
	                <div class="panel-body text-center">
	                    <p class="lead"><strong>$10 / month</strong></p>
	                </div>
	                <ul class="list-group list-group-flush text-center">
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
	                </ul>
	                <div class="panel-footer">
	                    <a class="btn btn-lg btn-block btn-success" href="#">Order Now</a>
	                </div>
	            </div>
	        </div>

	        <div class="col-md-3">
	            <div class="panel panel-success flip-in">
	                <div class="panel-heading">
	                    <h4 class="text-center">Plan C</h4>
	                </div>
	                <div class="panel-body text-center">
	                    <p class="lead"><strong>$15 / month</strong></p>
	                </div>
	                <ul class="list-group list-group-flush text-center">
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
	                </ul>
	                <div class="panel-footer">
	                    <a class="btn btn-lg btn-block btn-success" href="#">Order Now</a>
	                </div>
	            </div>
	        </div>

	        <div class="col-md-3">
	            <div class="panel panel-success flip-in">
	                <div class="panel-heading">
	                    <h4 class="text-center">Plan B</h4>
	                </div>
	                <div class="panel-body text-center">
	                    <p class="lead"><strong>$50 / month</strong></p>
	                </div>
	                <ul class="list-group list-group-flush text-center">
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
	                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
	                </ul>
	                <div class="panel-footer">
	                    <a class="btn btn-lg btn-block btn-success" href="#">Order Now</a>
	                </div>
	            </div>
	        </div>
		</section>	
		
		<section class="section-divider textdivider divider6">
			<div class="container">
				<h1 class="fade-down section-title">CRAFTED IN NEW YORK, USA.</h1>
				<hr>
				<div class="fade-up">
					<p>Times Square, New York</p>
					<p>+47 65584 0546485</p>
				</div>
			</div>
		</section>

		<section id="mapwrapper">
			<div id="map"></div>
		<section>
		
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
	
	
	<!-- Login modal -->
	<div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title" id="exampleModalLabel">Hello! let's get started</h4>
			  <h6 class="font-weight-light">Sign in to continue.</h6>
			</div>
			<div class="modal-body">
				<form class="pt-3" method="post" action="./queries/login.php">
					<div class="form-group">
					  <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email" required>
					</div>
					<div class="form-group">
					  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password" required>
					</div>
					<div class="mt-3">
					  <button class="btn btn-block  btn-lg font-weight-medium auth-form-btn" href="../../index.html" style="font-weight: 600;">SIGN IN</button>
					</div>
					<div class="my-2 d-flex justify-content-between align-items-center">
					  <div class="form-check">
						<label class="form-check-label text-muted">
						  <input type="checkbox" class="form-check-input">
						  Keep me signed in
						</label>
					  </div>
					  <a  data-toggle="modal" data-target="#resetPasswordModal" data-dismiss="modal" class="auth-link text-black">Forgot password?</a>
					</div>
					
					<div class="text-center mt-4 font-weight-light">
						Don't have an account? <a data-toggle="modal" data-target="#registerModal" data-hover="dropdown" data-whatever="@mdo" class="text-primary" data-dismiss="modal" >Create</a>
					</div>
					<br/>
					<div style="display: flex; justify-content:center">

						<div class="g-recaptcha" style="text-align: center" data-sitekey="6Lc4LqkfAAAAAJujsOIL6hi4Q2A-7Rlie8e4-gUV"></div>
					</div>
				  </form>
			</div>
	
		  </div>
		</div>
	  </div>
	
	<!-- Register modal -->
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title" id="exampleModalLabel">Hello! let's get started</h4>
			  <h6 class="font-weight-light">Create an account.</h6>
			</div>
			<div class="modal-body">
				<form class="pt-3" method="post" action="./queries/register.php">
					<div class="form-group">
					  <input type="number" min=10000000 max=99999999 class="form-control form-control-lg" name="cin" id="cin" placeholder="Cin" required value="12345678">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Name" required value="skander">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control form-control-lg" name="surname" id="surname" placeholder="Surname" required value="cchtioui">
					</div>
					<div class="form-group">
					  <input type="number" min=10000000 max=99999999 class="form-control form-control-lg" name="phone" id="phone" placeholder="Phone Number" required value="12345678">
					</div>
					<div class="form-group">
					  <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required value="alex.chtioui@gmail.com">
					</div>
					<div class="form-group">
					  <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required value="skander">
					</div>
					<div class="mt-3">
					  <button class="btn btn-block  btn-lg font-weight-medium auth-form-btn" style="font-weight: 600;" type="submit" name="submit">Register</button>
					</div>
	
					
					<div class="text-center mt-4 font-weight-light">
					  have an account? <a  data-toggle="modal" data-target="#authModal" class="text-primary" data-dismiss="modal">Login</a>
					</div>
				  </form>
			</div>
	
		  </div>
		</div>
	  </div>

	<!-- reset password modal -->
	<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title" id="exampleModalLabel">Recover your account</h4>
			</div>
			<div class="modal-body">
				<form class="pt-3" method="post" action="./queries/resetPassword.php">
					<div class="form-group">
					  <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required>
					</div>

					<div class="mt-3">
					  <button class="btn btn-block  btn-lg font-weight-medium auth-form-btn" style="font-weight: 600;" type="submit" name="submit">Send mail</button>
					</div>
					<div class="text-center mt-4 font-weight-light">
					  have an account? <a  data-toggle="modal" data-target="#authModal" class="text-primary" data-dismiss="modal">Login</a>
					</div>
				
				  </form>
			</div>
	
		  </div>
		</div>
	  </div>
  </body>
</html>
