<?PHP
include_once "config.php";
class ChauffeurC{

    function ajouterChauffeur($chauffeur){
        $sql="INSERT INTO chauffeur (nom, prenom, email, num, img ,salaire) VALUES (:nom, :prenom, :email, :num, :img,:salaire)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $nom=$chauffeur->getNom();
            $prenom=$chauffeur->getPrenom();
            $email=$chauffeur->getEmail();
            $num=$chauffeur->getNum(); 
            $img=$chauffeur->getImg();
            $salaire=$chauffeur->getSalaire();

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
    function afficherChauffeur(){
        $sql="SELECT * From chauffeur";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
    function supprimerChauffeur($id){
        $sql="DELETE FROM chauffeur where id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        } 

    }  

    function modifierChauffeur($chauffeur,$id){
        $sql="UPDATE chauffeur SET nom=:nom, prenom=:prenom, email=:email, num=:num, img=:img , salaire=:salaire WHERE id=:id";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $nom=$chauffeur->getnom();
            $prenom=$chauffeur->getPrenom();
            $email=$chauffeur->getEmail();
            $num=$chauffeur->getNum(); 
            $img=$chauffeur->getImg();
            $salaire=$chauffeur->getSalaire(); 
         
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
    function recupererChauffeur($id){
		$sql="SELECT * from chauffeur where id='".$id."' ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die(    'Erreur: '.$e->getMessage());
        }
    }
    
    function ajouterCommentaire($commentaire){
        $sql="INSERT INTO commentaire (texe) VALUES (:texte)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $texte=$commentaire->getTexte();
            

            $req->bindValue(':texte',$texte);
            

            
            $req->execute();
        }catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    }
    
    function afficherCommentaire(){
        $sql="SELECT * From commentaire";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }  
    
    
        
   
} 













?> 