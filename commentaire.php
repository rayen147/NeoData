<?php

    class Commentaire{
        private $id;
        private $texte;
      
       
        function __construct($texte){
            $this->texte = $texte;
            


        }   
      
        
        public function getTexte()
        {
                return $this->texte;
        }
        
       
    }
?>