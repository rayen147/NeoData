<?PHP
include "../../../../config.php";

class clientC {

	
	function addclient($client){
		$sql="insert into client(nom,prenom,email,pwd, num_tel, destination) values 
(:nom,:prenom,:email,:pwd ,:num_tel ,:destination )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       // $id_t=$trajet->getid_t();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $pwd=$client->getPassword();
        $num_tel=$client->getPhone();
        $destination=$client->getdestination();
        $tache=$client->getTache();
       
        //lier variable => paramètre
        
		//$req->bindValue(':id_t',$id_t);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':pwd',$pwd);
        $req->bindValue(':num_tel',$num_tel);
        $req->bindValue(':destination',$destination);
        $req->bindValue(':tache',$tache);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }

    function afficherclients($search){
        if ($search == "") {
            $sql = "SELECT * FROM client";
        } else {

            $sql = "SELECT * FROM client where cin LIKE '%" . $search . "%' OR nom LIKE '%" . $search . "%' OR prenom LIKE '%" . $search . "%' OR email LIKE '%" . $search . "%' OR destination LIKE '%" . $search . "%'";
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

    function afficherclientsTri($order, $by, $type){
        if ($order == false) {
            $sql="SElECT * From client";
        } else {
            $sql = "SELECT * FROM client order by $by $type ";
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

    

	function supprimerclient($id){
		$sql="DELETE FROM client where id= :id";
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

	function modifierclient($client,$id){
		$sql="UPDATE client SET  nom=:nom,prenom=:prenom,email=:email, num_tel=:num_tel, destination=:destination WHERE id=:id";


		$db = config::getConnexion();
try{

    $req=$db->prepare($sql);
    // $id=$client->getId();
    $nom=$client->getNom();
    $prenom=$client->getPrenom();
    $email=$client->getEmail();
    $num_tel=$client->getPhone();
    $destination=$client->getdestination();


		$datas = array(':id'=>$id,  ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email, ':num_tel'=>$num_tel, ':destination'=>$destination);
		//lier variable => paramètre
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':num_tel',$num_tel);
        $req->bindValue(':destination',$destination);		

        print_r($req);
		
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