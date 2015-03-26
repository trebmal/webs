<?php

/**
 * Description of Usuarios
 *
 * @author Ivan
 */
class Usuario {
    
    private $email;
    private $password;
    private $permisos;
   
     
    public function __construct($email,$password,$permisos) {
       
        $this->email=$email;
        $this->password=$password;
        $this->permisos=$permisos;
    }
    
   
          
    public function getNom(){
        return $this->email;
    }    

    public function getCognoms(){
        return $this->password;
    }

      public function getUsuari(){
        return $this->permisos;
    }
  
   }

?>
