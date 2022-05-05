<?PHP
include_once "../../../../../Model/chauffeur.php";
include_once "../../../../../Controller/chauffeurC.php";
if(isset($_POST['ajouter']))
	 {
        if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['num'])and isset($_POST['img']) and isset($_POST['salaire'])){
            $chauffeurTmp= new chauffeur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['num'],$_POST['img'],$_POST['salaire']);
    

        $chauffeurTmpC=new chauffeurC();
        $chauffeurTmpC->ajouterchauffeur($chauffeurTmp);
        header('Location: affichagechauffeur.php');
            
        }else{
            echo "vérifier les champs";
        }
     }
?>
