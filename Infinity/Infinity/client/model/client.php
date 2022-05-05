<?PHP

class client{
     	private $id;
    	private $nom;
    	private $prenom;
     	private $email;
   	    private $password;
   	    private $cin;
   	    private $phone;
   	    private $isVerified;
   	    
    function __construct($cin, $nom,$prenom,$email,$password, $phone){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->password=$password;
        $this->phone=$phone;
        $this->isVerified=0;
      
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
	function getPassword(){
		return $this->password;
	}
	function getId(){
		return $this->id;
    }
	function getPhone(){
		return $this->phone;
    }
	function getIsVerified(){
		return $this->isVerified;
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
	function setIsVerified($isVerified){
		$this->isVerified=$isVerified;
	}


}

?>