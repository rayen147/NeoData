<?PHP
include "../controller/trajetc.php";
$trajet1c=new trajetc();
if (isset($_POST["id_t"])){
	$trajet1c->supprimertrajet($_POST["id_t"]);
	
	header('Location: affichertrajet.php');

}

?>

