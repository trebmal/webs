<?php

/**
 * Description of Usuarios
 *
 * @author Ivan
 */
class Usuario {
    
    private $id;
    private $nom;
    private $cognoms;
    private $usuari;
    private $password;
    private $password2='';
    private $permisos;  
     
    public function __construct($usuari,$nom,$cognoms,$password='',$password2='',$permisos) {
       
        $this->nom=$nom;
        $this->cognoms=$cognoms;
         $this->usuari=$usuari;
        $this->password=$password;   
        $this->password2=$password2;
         $this->permisos=$permisos;
    }
    

    
          
    public function getNom(){
        return $this->nom;
    }    

    public function getCognoms(){
        return $this->cognoms;
    }

      public function getUsuari(){
        return $this->usuari;
    }
  
    public function getPassword(){
        return $this->password;
    }
    
    public function getPassword2(){
        return $this->password2;
    }
       public function getPermisos(){
        return $this->permisos;
    }
}

?>
