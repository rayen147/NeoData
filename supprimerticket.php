<?PHP
include "../controller/ticketc.php";
$ticket1c=new ticketc();
if (isset($_POST["id_ticket"])){
	$ticket1c->supprimerticket($_POST["id_ticket"]);
	
	header('Location: afficherticket.php');

}

?>

