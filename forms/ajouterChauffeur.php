<?PHP
include_once "../../../../../Model/controleur.php";
include_once "../../../../../Controller/controleurC.php";
if(isset($_POST['ajouter']))
	 {
        if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['num'])and isset($_POST['img']) and isset($_POST['salaire'])){
            $controleurTmp= new controleur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['num'],$_POST['img'],$_POST['salaire']);
    

        $controleurTmpC=new controleurC();
        $controleurTmpC->ajoutercontroleur($controleurTmp);
        header('Location: affichagecontroleur.php');
            
        }else{
            echo "vérifier les champs";
        }
     }
?>