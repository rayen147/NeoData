<!-- THIS IS THE HOMEPAGE -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SNFT - Réservez maintenant, voyagez n'importe où</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<style>
   .carousel-inner > .item > img{
       width:100%;
       height:360px;    
     }
    .thumnails{
        width:900px;
        margin: auto;
    }
        
    .text_format{
        font-family: Times New Roman;
    }
    
</style>
</head>
<body>
<!-- Carousel Code (Sliding Images)-->
<header>
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class= "collapse navbar-collapse" id="book">
            
          <ul class="nav navbar-nav">
            <li class="active"><a href="form.php"><span class="glyphicon glyphicon-tasks"></span>  Create un abonnement</a></li>
          </ul>                                     
        </div>
        </div>
</div>    
   </header>  
     <div class="container">
      <div class="carousel slide" data-ride="carousel" id="carouselex">
        <ol class="carousel-indicators">
          <li data-target="#carouselex" data-slide-to="0" class="active"></li>
          <li data-target="#carouselex" data-slide-to="1"></li>
          <li data-target="#carouselex" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="./imgs/flight1.jpeg" alt="image">
            </div>
          <div class="item">
            <img src="./imgs/airplane.jpg" alt="image">
          </div>
          <div class="item">
            <img src="./imgs/flight.jpg" alt="image">
          </div>
          <a href="#carouselex" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a href="#carouselex" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>
    
<br>
<br>
<br>
<!-- Static images that display the possible destinations listed in this website -->
<div class="container">
      <div class="row">                               
        <div class="col-md-3 col-sm-6 col-md-3">
            <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-1.jpg" alt="Dest1">
            </a><center>
                <h4 class="text_format">Chennai</h4></center>
           </div>
        </div>
          
       <div class="col-md-3 col-sm-6 col-md-3">
           <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-2.jpg" alt="Dest2">
            </a>
               <center>
                   <h4 class="text_format">Hyderabad</h4></center>
          </div>
       </div> 
  
         <div class="col-md-3 col-sm-3 col-md-3">
           <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-4.jpg" alt="Dest3">
            </a><center>
               <h4 class="text_format">Bangalore</h4></center>
          </div>
       </div> 
          <div class="col-md-3 col-sm-3 col-md-3">
           <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-3.jpg" alt="Dest4">
            </a><center>
               <h4 class="text_format">New York</h4></center>
          </div>
       </div> 
    </div>
    </div>
    </body>
</html>
