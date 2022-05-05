<?PHP
class admin{
     	private $id;
    	private $nom;
    	private $prenom;
     	private $email;
   	    private $password;
   	    private $h_travai;
   	    private $salaire;
   	    private $tache;
   	    
    function __construct($nom,$prenom,$email,$password,$h_travail, $salaire, $tache){
		//$this->id_t=$id_t;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->password=$password;
		$this->h_travail=$h_travail;
        $this->salaire=$salaire;
        $this->tache=$tache;
      
	}

	function getH_travail(){
		return $this->h_travail;
	} 
	function getNom(){
		return $this->nom;
	} 
	function getPrenom(){
		return $this->prenom;
	}
    function getPassword() {
        return $this -> password;
    }
	function getEmail(){
		return $this->email;
	}
	function getSalaire(){
		return $this->salaire;
	}
	function getTache(){
		return $this->tache;
	}
	function getId(){
		return $this->id;
    }

	function setH_travai($h_travai){
		$this->h_travai=$h_travai;
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
    function setPassword($password) {
        $this -> password = $password;
    }
     function setH_travail($h_travail) {
        $this -> h_travail = $h_travail;
    }
     function setSalaire($salaire) {
        $this -> salaire = $salaire;
    }
     function setTache($tache) {
        $this -> tache = $tache;
    }
}

?>