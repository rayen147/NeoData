<?php
require_once '../Model/APO.php';
class subscribes{
	private $_session_var;
    public $passenger_details_table_with_id,$passenger_details_table_without_id;
    function Insert_or_update_passenger_subs($conn){
        $this->passenger_details_table_without_id = Array (
            "CIN" => $this->_session_var->getCIN(),
            "Source" => $this->_session_var->getSource(),
            "Destination" => $this->_session_var->getDestination(),
            "N_Jours" => $this->_session_var->getN_Jours(),
            "Price" => $this->_session_var->getPrice()/100
            );
            
        $this->passenger_details_table_with_id = Array ("ID" => $this->_session_var->getTID(),
            "CIN" => $this->_session_var->getCIN(),
            "Source" => $this->_session_var->getSource(),
            "Destination" => $this->_session_var->getDestination(),
            "N_Jours" => $this->_session_var->getN_Jours(),
            "Price" => $this->_session_var->getPrice()/100
            );
			
        if($this->_session_var->getTID()!==null and !empty($this->_session_var->getTID())){
            if(is_numeric($this->_session_var->getTID())){ 
                $conn->where ('ID', $this->_session_var->getTID());
                $conn->update ('passenger_details', $this->passenger_details_table_with_id);
             return $this->passenger_details_table_with_id['ID'];
           }
            
       }else{
		   
        $this->_session_var->setID($conn->insert ('passenger_details', $this->passenger_details_table_without_id));
            if($this->_session_var->getID()){
                return $this->_session_var->getID();}
   }

    }
    function Delte_sub($conn){
        if($output = preg_replace( '/[^0-9]/', '', $this->_session_var->getID() )){
            $conn->where('ID', $this->_session_var->getID());
            $conn->delete('passenger_details');       
        }
    }
    function get_single_subscription($session_var,$conn){
        $cols = Array ("ID","CIN","Source","Destination","Train_name","Date","N_Jours","Price");
        $conn->where ("ID", $session_var->getID());
        $users = $conn->getOne("passenger_details", null, $cols);
        if ($conn->count > 0){
        return $users;}else{ return null;}

    }
    function get_all_subscriptions($conn){
        $cols = Array ("ID","CIN","Source","Destination","Train_name","Date","N_Jours","Price");
        $users = $conn->get ("passenger_details", null, $cols);
        if ($conn->count > 0) { 
            return $users;}else{return null;}
    
        
    }
    
    function __construct($_session_var) {

        $this->_session_var=$_session_var;
    }
    function __destruct(){
		unset($this->_session_var);
        unset($this->passenger_details_table_with_id);
        unset( $this->passenger_details_table_without_id);
        
    }
}
?>