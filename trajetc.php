<?PHP
include "config1.php";

class trajetc {

	
	function ajoutertrajet($trajet){
		$sql="insert into trajet(id_t,depart,terminus,nbr_station,horaire) values 
(:id_t,:depart,:terminus,:nbr_station,:horaire)";
		$db = config1::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_t=$trajet->getid_t();
        $depart=$trajet->getdepart();
        $terminus=$trajet->getterminus();
         $nbr_station=$trajet->getnbr_station();
        $horaire=$trajet->gethoraire();
       
        //lier variable => paramètre
        
		$req->bindValue(':id_t',$id_t);
		$req->bindValue(':depart',$depart);
		$req->bindValue(':terminus',$terminus);
        $req->bindValue(':nbr_station',$nbr_station);
        $req->bindValue(':horaire',$horaire);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function affichertrajet(){
        $sql="SElECT * From trajet";
        $db = config1::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
     function affichertrajet2($l){
        //$a="majd02";
$sql="SELECT * from trajet where id_trajet='$l'";
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
	function supprimertrajet($id_t){
		$sql="DELETE FROM trajet where id_t= :id_t";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_t',$id_t);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiertrajet($trajet,$id_t){
		$sql="UPDATE trajet SET id_t=:idd, depart=:depart,terminus=:terminus,nbr_station=:nbr_station,horaire=:horaire WHERE id_t=:id_t";


		$db = config1::getConnexion();
try{

    $req=$db->prepare($sql);
    $idd=$trajet->geid_t();
    $depart=$trajet->getdepart();
    $terminus=$trajet->getterminus();
    $nbr_station=$trajet->getnbr_station();
    $horaire=$trajet->gethoraire();


		$datas = array(':idd'=>$idd, ':id_t'=>$id_t, ':depart'=>$depart,':terminus'=>$terminus,':nbr_station'=>$nbr_station,':horaire'=>$horaire);
		//lier variable => paramètre
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id_t',$id_t);
		$req->bindValue(':depart',$depart);
		$req->bindValue(':terminus',$terminus);
        $req->bindValue(':nbr_station',$nbr_station);
        $req->bindValue(':horaire',$horaire);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperertrajet($id_t){
		$sql="SELECT * from trajet where id_t=$id_t";
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
        function recherchertrajet($rech){
    $sql="SELECT * from trajet
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
        $sql="SELECT * from trajet ORDER BY date"; // 5-->1 desc
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