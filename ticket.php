<?PHP
class ticket{

	
     	private $id_ticket;
    	private $id_trajet;
    	private $prix;
     	private $classT;
   	    private $date;

    function __construct($id_trajet,$prix,$classT,$date){
		//$this->id_ticket=$id_ticket;
		$this->id_trajet=$id_trajet;
		$this->prix=$prix;
		$this->classT=$classT;
        $this->date=$date;
      
	}


	
	//function getid_ticket(){
	//	return $this->id_ticket;
	//} 

	function getid_trajet(){
		return $this->id_trajet;
	} 
	function getprix(){
		return $this->prix;
	}
	function getclassT(){
		return $this->classT;
	}
	function getdate(){
		return $this->date;
    }

	//function setid_ticket($id_ticket){
	//	$this->id_ticket=$id_ticket;
	//}
	function setid_trajet($id_trajet){
		$this->id_trajet=$id_trajet;
	}
	function setprix($prix){
		$this->prix;
	}
	function setclassT($classT){
		$this->classT=$classT;
	}
	function setdate($date){
		$this->date=$date;
	}
	
}

?>