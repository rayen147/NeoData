<?PHP

include_once "../../../../../Controller/ControleurC.php";
$controleurC=new ControleurC();
if (isset($_POST["id"])){
	$controleurC->supprimerControleur($_POST["id"]);
	header('Location: affichageControleur.php');
}

?>