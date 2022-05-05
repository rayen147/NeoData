<?PHP
include "config1.php";

class ticketc {

	
	function ajouterticket($ticket){
		$sql="INSERT INTO ticket(id_trajet,prix,classT,date) values 
(:id_trajet,:prix,:classT,:date )";
		$db = config1::getConnexion();
		try{
        $req=$db->prepare($sql);
        //$id_ticket=$ticket->getid_ticket();
        $id_trajet=$ticket->getid_trajet();
        $prix=$ticket->getprix();
        $classT=$ticket->getclassT();
        $date=$ticket->getdate();
       
        //lier variable => paramètre
        
		//$req->bindValue(':id_ticket',$id_ticket);
		$req->bindValue(':id_trajet',$id_trajet);
		$req->bindValue(':prix',$prix);
        $req->bindValue(':classT',$classT);
        $req->bindValue(':date',$date);
        $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function afficherticket(){
        $sql="SElECT * From ticket";
        $db = config1::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
     function afficherticket2($l){
        //$a="majd02";
$sql="SELECT * from ticket where id_ticket='$l'";
        $db = config1::getConnexion();
        /*$req=$db->prepare($sql);
        $req->bindValue(':user',$a);*/
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
	function supprimerticket($id_ticket){
		$sql="DELETE FROM ticket where id_ticket= :id_ticket";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_ticket',$id_ticket);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierticket($ticket,$id_ticket){
		$sql="UPDATE ticket SET id_ticket=:idd, prix=:prix,classT=:classT,date=:date WHERE id_ticket=:id_ticket";


		$db = config1::getConnexion();
try{

    $req=$db->prepare($sql);
    $idd=$ticket->getid_ticket();
    $prix=$ticket->getprix();
    $classT=$ticket->getclassT();
    $classe=$ticket->getdate();

		$datas = array(':idd'=>$idd, ':id_ticket'=>$id_ticket, ':prix'=>$prix,':classT'=>$classT,':date'=>$classe);
		//lier variable => paramètre
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id_ticket',$id_ticket);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':classT',$classT);
        $req->bindValue(':date',$classe);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererticket($id_ticket){
		$sql="SELECT * from ticket where id_ticket=$id_ticket";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }*/

/*
        function rechercherticket($rech){
    $sql="SELECT * from ticket
    where id_order = '$rech' ";
         
    $db = config1::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
    }*/

   /* function triid(){
        $sql="SELECT * from ticket ORDER BY date"; // 5-->1 desc
        $db = config1::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
        }*/
	}


    
    
    ?>