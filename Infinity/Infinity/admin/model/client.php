<?PHP
class client{
     	private $id;
    	private $nom;
    	private $prenom;
     	private $email;
   	    private $password;
   	    private $cin;
   	    private $phone;
   	    private $destination;
   	    
    function __construct($cin, $nom,$prenom,$email,$password, $phone, $destination){
		//$this->id_t=$id_t;
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->password=$password;
        $this->phone=$phone;
        $this->destination=$destination;
      
	}

	function getCin(){
		return $this->cin;
	} 
	function getNom(){
		return $this->nom;
	} 
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getId(){
		return $this->id;
    }
	function getPhone(){
		return $this->phone;
    }
	function getDestination(){
		return $this->destination;
    }

	function setCin($cin){
		$this->cin=$cin;
	} 
	function setNom($nom){
		$this->nom=$nom;
	} 
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setPhone($phone){
		$this->phone=$phone;
	}
	function setDestination($destination){
		$this->destination=$destination;
	}
}

?>