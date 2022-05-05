<?php
require_once '../Model/APO.php';

class offre{
	private $_session_var;
	
    public $_offre_table_with_id,$_offre_table_without_id;
    function get_all_offres($conn){
        $cols = Array ("Num_abonnement","CIN","Points","Delais");
        $users = $conn->get ("offre", null, $cols);
        if ($conn->count > 0) { 
            return $users;}else{return null;}
    
        
    }
    function calc_prop($conn){
        $somme = 0;
        for($i=1;$i<($this->cin_count($conn));$i++){
			
            $somme+=floor((log((1/(pow((1+0.23),$i)/4)),exp(1))*10));
        }
        return $somme;
    }
    
    function seek_offre($conn){
        if($this->_session_var->getCIN()!=null and $output = intval($this->_session_var->getCIN() )){
            $somme=0;
            $conn->where ("CIN", $this->_session_var->getCIN());
            $offre = $conn->getOne ("offre");
        return $offre;}else{return 1;}
    }
    function  cin_count($conn){
        if($this->_session_var->getCIN()!=null and $output = intval($this->_session_var->getCIN() )){
            $entries = $conn->rawQueryOne("SELECT CIN, count(*) as NUM FROM passenger_details GROUP BY CIN");
            return $entries["NUM"];
        }else{

            return 0;
        }
        
}
    function __construct($_session_var) {
        $this->_session_var=$_session_var;
    }
    function __destruct(){
        unset($this->_offre_table_without_id);
        unset($this->_offre_table_with_id);
        
    }
    function ajouter_ou_modifier_offre($conn){
        $this->_offre_table_with_id = Array ("Num_abonnement" => $this->_session_var->getID(),
        "Points" => $this->calc_points($conn),
        "Delais" => $this->_session_var->getDelais(),
        "CIN" => $this->_session_var->getCIN()
        );$this->_offre_table_without_id = Array (
        "Points" => $this->calc_points($conn),
        "Delais" => $this->_session_var->getDelais(),
        "CIN" => $this->_session_var->getCIN()
        );
         if($this->_session_var->getTID()!==null and !empty($this->_session_var->getTID())){
			
            if($output = intval($this->_session_var->getCIN() )){ 
			
                $conn->where ('CIN', $output);
                $conn->insert ('offre', $this->_offre_table_with_id);
             return $this->_offre_table_with_id['ID'];
           }
            
       }else{
        $this->_session_var->setID($conn->insert ('offre', $this->_offre_table_without_id)) ;
            if($this->_session_var->getID()){
                return $this->_session_var->getID();}
   }


    }
    function affiche_offre($conn){
        if($this->_session_var->getID()!=null and $output = intval($this->_session_var->getID() )){
            $conn->where ("Num_abonnement", $this->_session_var->getID());
            $offre = $conn->getOne ("offre");
            return $offre;
        }else{
            return null;
        }
    }
    function supprimer_offre($conn){
        try{
            $conn->where('Num_abonnement', $this->_session_var->getID());
            $conn->delete('offre');
            return true;
    
        }catch(exception $e){
        return false;
    }
    

    }
    function calc_points($conn){
		
            if($this->_session_var->getCIN() !== null and $output= intval($this->_session_var->getCIN())){
				
                return floor(log($this->_session_var->getN_Jours()*($this->_session_var->getPrice()/100),exp(1))*100);
            }else{
                return 2;
            }
            

    }

}

?>