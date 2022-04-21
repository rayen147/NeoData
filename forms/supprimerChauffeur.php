<?PHP

include_once "../../../../../Controller/ChauffeurC.php";
$chauffeurC=new ChauffeurC();
if (isset($_POST["id"])){
	$chauffeurC->supprimerChauffeur($_POST["id"]);
	header('Location: affichageChauffeur.php');
}

?>