<?PHP
include_once "../../../../../Controller/ChauffeurC.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="../../../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../../../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../../../css/elegant-icons-style.css" rel="stylesheet" />
 
  <link href="../../../css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- Custom styles -->
  <link href="../../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/linearicons@1.0.2/dist/web-font/style.css">
  <link href="../../../css/style-responsive.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Required meta tags -->
  
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    
    


  

    <!--sidebar start-->
    

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">





    
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Chauufeur
                <a class="btn btn-warning pull-right" href="addChauffeur.php">+Ajouter Chauffeur</a>
              </header>
              <form method="post" action="PDF.php"> 
                  <input type="submit" name="imprimer" value="imprimer">  
                  </form>
            </form>
              <table class="table table-striped table-advance table-hover" id="example1">
                
                  <tr>
                    <th><i class="icon_profile"></i>Nom</th>
                    <th><i class="icon_calendar"></i>Prenom</th>
                    <th><i class="icon_mail_alt"></i>Email</th>
                    <th><i class="icon_pin_alt"></i> Num</th>
                 
                    <th><i class="icon_cogs"></i> Image</th>
                    <th><i class="icon_cogs"></i> Salaire</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tbody>
                    <?PHP 
                    include_once "../../../../../Model/Chauffeur.php";
                    include_once "../../../../../Controller/ChauffeurC.php";
                    $chauffeur1C=new ChauffeurC(); 
                    
                        $liste=$chauffeur1C->afficherChauffeur();
                    
                    foreach($liste as $row){
                        ?>
                            <tr>
                           <td><?PHP echo $row['nom'];  ?></td> 
                           <td><?PHP echo $row['prenom']; ?></td>
                           <td><?PHP echo $row['email']; ?></td>
                           <td><?PHP echo $row['num']; ?></td>

                           <td><img class="img-responsive img-thumbnail "  <?PHP echo "<img src=\"images/{$row['img']}\">"?></td>
                           <td><?PHP echo $row['salaire']; ?></td>
                           
                           <td><form method="POST" action="supprimerChauffeur.php">  
                           <input class="btn btn-danger"  type="submit" title="Delete" Value="Delete" border="0" name="supprimer">
                           <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id"> 
                           
                           </form> 
                           <a href="edit-Chauffeur.php?id=<?PHP echo $row['id']; ?>" class="btn btn-success" data-toggle="tooltip" title="Edit" >Edit<i class="fas fa-pencil-alt"></i></a>
                           </td>
                           </tr>
                           <?PHP 
                        
                    }
                        ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
