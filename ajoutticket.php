<?php
include "../model/ticket.php";
include "../controller/ticketc.php";

	echo " zzzzz1" ;
$ticket1=new ticket($_POST['id_trajet'],$_POST['prix'],$_POST['classeT'],$_POST['date']);
echo " zzzzz2" ; 

$ticket1c= new ticketc();
echo " zzzzz3" ; 
$ticket1c->ajouterticket($ticket1);
echo " zzzzz 4 "  ; 
header('Location:ticket.php');



	

?>
