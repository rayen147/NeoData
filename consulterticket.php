<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RestroGirls - events</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta http-equiv="refresh" content="1"> -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <!-- DATA TABLES -->
    <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="css/style.css">


</head>


<body>


<?php require('chunks/navbar.php'); ?>


<?php require('chunks/banner-slider.php'); ?>



<?PHP
include "../controller/ticketc.php";
$ticket1c = new ticketc();
$cmd1 = new ticketc;

if (!isset($_POST['search']))
    $listeEmployes = $ticket1c->afficherticket();


?>


</div>

<form action="genpdf.php"  >
    <div class="p-t-20">

        <button class="btn btn--radius btn--green" type="submit">Generer PDF</button>


    </div>
</form>
<table id="example2" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Trajet</th>
        <th>Prix</th>
        <th>Class</th>
        <th>date</th>


    </tr>
    </thead>
    <tbody>


    <?PHP
    foreach($listeEmployes as $row){
        ?>
    <tr>

        <td><?PHP echo $row['id_trajet']; ?></td>
        <td><?PHP echo $row['prix']; ?></td>
        <td><?PHP echo $row['classT']; ?></td>
        <td><?PHP echo $row['date']; ?></td>


    </tr>

    <?PHP

    }
    
    ?>

    // // <?php 

    // include('../phpqrcode/qrlib.php');
    // include('../config.php');

    // // how to save PNG codes to server
    
    // $tempDir = "qrcodes/";
    
    // $codeContents = 'This Goes From File';
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    // $fileName = '005_file_'.md5($codeContents).'.png';
    
    // $pngAbsoluteFilePath = $tempDir.$fileName;
    // $urlRelativeFilePath = $tempDir.$fileName;
    
    // generating
    // if (!file_exists($pngAbsoluteFilePath)) {
    //     QRcode::png($codeContents, $pngAbsoluteFilePath);
    //     echo 'File generated!';
    //     echo '<hr />';
    // } else {
    //     echo 'File already generated! We can use this cached file to speed up site on common codes!';
    //     echo '<hr />';
    // }
    
    // echo 'Server PNG File: '.$pngAbsoluteFilePath;
    // echo '<hr />';
    
    // displaying
    // echo '<img src="'.$urlRelativeFilePath.'" />';
   // // ?>

    </div>


    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="js/loaders.js"></script>
    <script src="js/ajax.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": false,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": false
            });
        });
    </script>
    </tbody>
</body>
</html>