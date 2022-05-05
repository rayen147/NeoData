<?PHP
include "../../../../config.php";


class adminC {

	
	function addAdmin($admin){
		$sql="insert into admin(nom,prenom,email,pwd, h_travail, salaire, tache) values 
(:nom,:prenom,:email,:pwd ,:h_travail ,:salaire ,:tache)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        // $id=$admin->getId();
        $nom=$admin->getNom();
        $prenom=$admin->getPrenom();
        $email=$admin->getEmail();
        $pwd=$admin->getPassword();
        $h_travail=$admin->getH_travail();
        $salaire=$admin->getSalaire();
        $tache=$admin->getTache();
       
        //lier variable => paramètre
        
		// $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':pwd',$pwd);
        $req->bindValue(':h_travail',$h_travail);
        $req->bindValue(':salaire',$salaire);
        $req->bindValue(':tache',$tache);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }


    function afficherAdminsTri($order, $by, $type){
        if ($order == false) {
            $sql="SElECT * From admin";
        } else {
            $sql = "SELECT * FROM admin order by $by $type ";
        }
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficherAdmins($search){
        if ($search == "") {
            $sql = "SELECT * FROM admin";
        } else {

            $sql = "SELECT * FROM admin where id LIKE '%" . $search . "%' OR nom LIKE '%" . $search . "%' OR prenom LIKE '%" . $search . "%' OR email LIKE '%" . $search . "%' OR tache LIKE '%" . $search . "%' OR h_travail LIKE '%" . $search . "%' OR salaire LIKE '%" . $search . "%'";
        }
        $db = config::getConnexion();
        try{
        
            $liste=$db->query($sql);
            // $liste;
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    

	function supprimerAdmin($id){
		$sql="DELETE FROM admin where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierAdmin($admin,$id){
		$sql="UPDATE admin SET  nom=:nom,prenom=:prenom,email=:email, h_travail=:h_travail, salaire=:salaire, tache=:tache WHERE id=:id";


		$db = config::getConnexion();
try{

    $req=$db->prepare($sql);
    // $id=$admin->getId();
    $nom=$admin->getNom();
    $prenom=$admin->getPrenom();
    $email=$admin->getEmail();
    $h_travail=$admin->getH_travail();
    $tache=$admin->getTache();
    $salaire=$admin->getSalaire();



		$datas = array(':id'=>$id,  ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email, ':h_travail'=>$h_travail,':tache'=>$tache,':salaire'=>$salaire);
		// lier variable => paramètre
		 $req->bindValue(':id',$id);
		 $req->bindValue(':nom',$nom);
		 $req->bindValue(':prenom',$prenom);
         $req->bindValue(':email',$email);
         $req->bindValue(':h_travail',$h_travail);
         $req->bindValue(':salaire',$salaire);
         $req->bindValue(':tache',$tache);		
		
        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	
	}


    
    
    ?>