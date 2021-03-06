<?php
require_once '../Model/APO.php';

class plans{
	private $_session_var;
    public $search_details_table_without_id,$search_details_table_with_id;
    function get_single_plan($conn){
        $cols = Array ("ID","Start","Destination","Train","ArrivalTime","Duration","Stops","Price","Seats");
        $conn->where ("ID", $this->_session_var->getID());
        $users = $conn->getOne("search_details ", null, $cols);
        if ($conn->count > 0){
        return $users;}else{ return null;}}
    function get_plans($conn){
        $cols = Array ("ID","Start","Destination","Train","ArrivalTime","Duration","Stops","Price","Seats");
        
        $train_lines = $conn->get("search_details",null, $cols);
        if ($conn->count > 0)
        return $train_lines;
    }
    function Insert_or_update_train_plans($conn){
        
        $this->search_details_table_without_id = Array ("Start" => $this->_session_var->getStart(),
    "Destination" => $this->_session_var->getDestination(),
	"Price" => $this->_session_var->getPrice(),
	"Train" => $this->_session_var->getTrain(),
    "Seats" => $this->_session_var->getSeats(),
	"ArrivalTime" => $this->_session_var->getarrival(),
    "Stops" => $this->_session_var->getStops(),
    "Duration" => $this->_session_var->getDuration()
    );
    
    $this->search_details_table_with_id = Array ("ID" => $this->_session_var->getID(),
    "Start" => $this->_session_var->getStart(),
	"Price" => $this->_session_var->getPrice(),
            "Destination" => $this->_session_var->getDestination(),
            "Seats" => $this->_session_var->getSeats(),
			"Train" => $this->_session_var->getTrain(),
			"ArrivalTime" => $this->_session_var->getarrival(),
            "Stops" => $this->_session_var->getStops(),
            "Duration" => $this->_session_var->getDuration()
    );
        if($this->_session_var->getID()!==null or !empty($this->_session_var->getID())){
			print_r($this->_session_var->getID());
            if($output = intval($this->_session_var->getID() )){ 
			print_r( $this->search_details_table_with_id);
                $conn->where ('ID', $output);
                $conn->update ('search_details', $this->search_details_table_with_id);
             return $this->search_details_table_with_id['ID'];
             
           }
            
       }else{
		   print_r($this->search_details_table_without_id);
        $this->_session_var->setID($conn->insert ('search_details', $this->search_details_table_without_id));
            if($this->_session_var->getID()){
                return $this->_session_var->getID();}
	}

    }
	function __construct($_session_var) {
        $this->_session_var=$_session_var;
    }
    function Delte_plan($conn){
        if($output = preg_replace( '/[^0-9]/', '', $this->_session_var->getID() )){
            $conn->where('ID', $this->_session_var->getID());
            $conn->delete('search_details');  
            
        }
    }
    function Select_plans($conn){
        if($this->_session_var->getSource()==="Tous"or$this->_session_var->getDestination()==="Tous"){
            if($this->_session_var->getSource()==="Tous"&&$this->_session_var->getDestination()==="Tous"){
                $select_query = "SELECT * from search_details";
                
            }if($this->_session_var->getSource()==="Tous" && $this->_session_var->getDestination()!="Tous"){
				echo $this->_session_var->getDestination();
                $select_query = "SELECT * from search_details where Destination = '$this->_session_var->getDestination()' ";
                
                
            }if($this->_session_var->getDestination()==="Tous"&& $this->_session_var->getSource()!="Tous"){
                $select_query = "SELECT * from search_details where Start = '$this->_session_var->getSource()'";
                
            }}else{
                $select_query = "SELECT * from search_details where Start = '$this->_session_var->getSource()' and Destination = '$this->_session_var->getDestination()' ";
                
            }
            $query_result = $conn->rawQueryOne($select_query);
            return $query_result;
    }
    function __destruct(){
        unset($this->search_details_table_with_id);
        unset($this->search_details_table_without_id);
        
    }
}
?>