<?php
    include '../../controller/GareC.php';
	include '../../controller/trajetc.php';
	$gareC=new GareC();
    $listeTrajets=$gareC->affichergare2();
    $listeGares=$gareC->affichergare();

$trajetC= new trajetc();
	$nom ="";
	if (isset($_GET['nom'])) {
		$nom = $_GET['nom'];
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
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/elusive-webfont.css">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
    
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
					<a class="navbar-brand" href="index.html"><h1>Infinity</h1></a>
					<button type="button" class="navbar-toggle dropdown-toggle" id="open-menu" data-toggle="dropdown" data-target="#main-navigation">
						<i class="el-icon-lines"></i>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="main-navigation">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.html">Home Regular</a></li>
								<li><a href="index-single-page.html">Home Single Page</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="category.html">Latest Posts</a></li>
								<li><a href="category-alt.html">Latest Posts Alt</a></li>
								<li><a href="single-post.html">Single Post</a></li>
								<li><a href="single-post-sidebar.html">Single Post Sidebar</a></li>
							</ul> 
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="single-project.html">Single Portfolio Gallery</a></li>
								<li><a href="single-project-video.html">Single Portfolio Video</a></li>
								<li><a href="single-project-video-self-hosted.html">Single Portfolio Video Self Hosted</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="about.html">About</a></li>
								<li><a href="category.html">Latest</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</li>					
						<li> <a href="#" class="search-trigger"><i class="el-icon-search"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
    
    <div id="headerwrap" name="home">
		<header class="clearfix"></header>	    
    </div>
    
	<section id="currently-viewing" class="container section-divider textdivider divider2">
		<div class="container">
			<div class="single-project-slideshow fade-down">
			    <div id="basic-carousel" class="carousel slide">
			      <div class="carousel-inner">
			        <div class="item active">
			          	<h2 class="fade-down centered">Les Meilleures Trajets</h2>
			        </div>
			        <div class="item">
			          	<h2 class="fade-down centered">Une Experience Unique</h2>
			        </div>
			        <div class="item">
			          	<h2 class="fade-down centered">Voyager Autrement</h2>
			        </div>
			      </div>
			      <a class="left carousel-control" href="#basic-carousel" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left"></span>
			      </a>
			      <a class="right carousel-control" href="#basic-carousel" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right"></span>
			      </a>
			    </div>
		 	</div>
	 	</div>
	</section>

	<!--  CONTENT WRAPPER -->
	<div id="content-wrapper">
		
		<!-- ==== ABOUT ==== -->
		<div class="container" id="about" name="about">
			<div class="row white">
				<h1 class="fade-down centered">Trouver Vos Trajets</h1>
				<hr>
				<div class="fade-up col-md-9">
                <th class="input-group-addon">Liste Gares</th>
                    <form method="GET" action="" class="input-group rounded" style="margin-bottom: 20px">
                        <select name="nom" id="nom" class="" placeholder="Choisir une Gare" >
                    <option value="">--Choissisez une gare--</option>
					<?php foreach($listeGares as $gare) { ?>
                            <option value="<?php echo $gare['nom']; ?>"><?php echo $gare['nom']; ?></option>
                    <?php } ?>
					<div>
						  
                           </select>

                        <input type="submit"  class="btn btn-secondary" value="Afficher Trajet">
                    </form>
						   <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                             <th>id_t</th>
                                            <th>D??part</th>
                                            <th>Terminus</th>
                                            <th>Nombre de stations</th>
                                            <th>Horraire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP foreach($listeTrajets as $row)
										{
                                            if ($row['nom'] == $nom ) {
											 ?>
												<tr>
													<td><?PHP echo $row['id_t']; ?></td>
													<td><?PHP echo $row['depart']; ?></td>
													<td><?PHP echo $row['terminus']; ?></td>
													<td><?PHP echo $row['nbr_station']; ?></td>
												
													<td><?PHP echo $row['horaire']; ?></td>
                                                </tr>
											
											

												
										<?PHP
                                            }
                                        }
                                        ?>
                                    </tbody>
                           </table>

				</div>		   
				</div><!-- col-md-6 -->
				
			</div><!-- row -->
		</div>
		<hr>
		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider divider2">
			<div class="container">
				<h1 class="fade-down">MORE PROEJCTS</h1>
				<hr class="title-mb">
				<div id="portfolio-carousel">
					<!-- PORTFOLIO IMAGE 1 -->
					<div class="fade-up col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio01.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT ONE</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>				
					
					<!-- PORTFOLIO IMAGE 2 -->
					<div class="fade-up col-md-4">
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
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 3 -->
					<div class="fade-up col-md-4">
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
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 4 -->
					<div class="fade-up col-md-4 ">
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
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 5 -->
					<div class="fade-up col-md-4">
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
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 6 -->
					<div class="fade-up col-md-4">
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
					</div><!-- /col -->

<!-- PORTFOLIO IMAGE 1 -->
					<div class="fade-up col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio01.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT SEVEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div>			
					
					<!-- PORTFOLIO IMAGE 2 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio02.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT EIGHT</h5>
								</figcaption>
							</figure>
				    	</div>
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 3 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio03.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT NINE</h5>
								</figcaption>
							</figure>
				    	</div>
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 4 -->
					<div class="fade-up col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio04.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT TEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 5 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio05.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT ELEVEN</h5>
								</figcaption>
							</figure>
				    	</div>
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 6 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio06.jpg" alt="">
								<figcaption>									
									<a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
									<a href="assets/img/portfolio/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
									<h5>PROJECT TWELVE</h5>
								</figcaption>
							</figure>
				    	</div>
					</div><!-- /col -->

			</div><!-- /carousel -->	
			</div>
		</section>

		
		<div id="contact" class="container page-section">
			<div class="row row white">
				<div class="col-md-4 fade-up">
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"></span>Time Square, New York<br/>
						<span class="icon icon-phone"></span>+36 65984 405<br/>
						<span class="icon icon-mobile"></span>+36 65984 405<br/>
						<span class="icon icon-envelop"></span> <a href="#">email@deltateam.com</a> <br/>
						<span class="icon icon-twitter"></span> <a href="#">@deltateam.com</a> <br/>
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

		</div><!-- CONTENT WRAPPER -->

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
				<h4 class="fade-up">Created by <a href="http://www.distinctivethemes.com">Distinctive Themes</a> - Copyright 2014</h4>
			</div>
		</div>		

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
	<script type="text/javascript" src="assets/js/init.js"></script>
  </body>
</html>
