<?PHP
include_once "config.php";
class ControleurC{

    function ajouterControleur($Controleur){
        $sql="INSERT INTO Controleur (nom, prenom, email, num, img ,salaire) VALUES (:nom, :prenom, :email, :num, :img,:salaire)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $nom=$Controleur->getNom();
            $prenom=$Controleur->getPrenom();
            $email=$Controleur->getEmail();
            $num=$Controleur->getNum(); 
            $img=$Controleur->getImg();
            $salaire=$Controleur->getSalaire();

            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom); 
            $req->bindValue(':email',$email);
            $req->bindValue(':num',$num); 
            $req->bindValue(':img',$img);
            $req->bindValue(':salaire',$salaire);

            
            $req->execute();
        }catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    }  
    function afficherControleur(){
        $sql="SELECT * From Controleur";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
    function supprimerControleur($id){
        $sql="DELETE FROM Controleur where id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        } 

    }  

    function modifierControleur($Controleur,$id){
        $sql="UPDATE Controleur SET nom=:nom, prenom=:prenom, email=:email, num=:num, img=:img , salaire=:salaire WHERE id=:id";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $nom=$Controleur->getnom();
            $prenom=$Controleur->getPrenom();
            $email=$Controleur->getEmail();
            $num=$Controleur->getNum(); 
            $img=$Controleur->getImg();
            $salaire=$Controleur->getSalaire(); 
         
            $datas = array(':id'=>$id,':nom'=>$nom , ':prenom'=>$prenom, ':email'=>$email, ':num'=>$num,':img'=>$img,':salaire'=>$salaire);

            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom); 
            $req->bindValue(':email',$email);
            $req->bindValue(':num',$num); 
            $req->bindValue(':img',$img);
            $req->bindValue(':salaire',$salaire); 
       ;
            $s=$req->execute();
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage(); 
            echo "Les Datas : " ;
            print_r($datas);
            
            die;
        }
    } 
    function recupererControleur($id){
		$sql="SELECT * from controleur where id='".$id."' ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die(    'Erreur: '.$e->getMessage());
        }
    }
    
   
} 

?> 