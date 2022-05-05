<?php
include "../model/trajet.php";
include "../controller/trajetc.php";
if(isset($_POST['depart']) and isset($_POST['terminus']) and isset($_POST['nbr_station']) and isset($_POST['horaire'])) 
{
$trajet1=new trajet($_POST['depart'],$_POST['terminus'],$_POST['nbr_station'],$_POST['horaire']);
$trajet1c= new trajetc();
$trajet1c->ajoutertrajet($trajet1);
header('Location: affichertrajet.php');
}


	

?>
