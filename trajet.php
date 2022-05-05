<?PHP
class trajet{

	
     	private $id_t;
    	private $depart;
    	private $terminus;
     	private $nbr_station;
   	    private $horaire;
   	    
    function __construct($id_t,$depart,$terminus,$nbr_station,$horaire){
		$this->id_t=$id_t;
		$this->depart=$depart;
		$this->terminus=$terminus;
		$this->nbr_station=$nbr_station;
        $this->horaire=$horaire;
      
	}


	
	function getid_t(){
		return $this->id_t;
	}

	function getdepart(){
		return $this->depart;
	} 
	function getterminus(){
		return $this->terminus;
	}
	function getnbr_station(){
		return $this->nbr_station;
	}
	function gethoraire(){
		return $this->horaire;
    }

	function setid_t($id_t){
		$this->id_t=$id_t;
	}
	function setdepart($depart){
		$this->depart=$depart;
	}
	function setterminus($terminus){
		$this->terminus;
	}
	function setnbr_station($nbr_station){
		$this->nbr_station=$nbr_station;
	}
	function sethoraire($horaire){
		$this->horaire=$horaire;
	}
	
}

?>