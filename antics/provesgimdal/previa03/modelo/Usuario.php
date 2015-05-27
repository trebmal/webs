<?php

/**
 * Description of Usuarios
 *
 * @author Ivan
 */
class Usuario {
    
    
    private $nom;
    private $cognoms;
    private $email;
      private $password;
    private $password2='';
    private $permisos;
   // private $telefono;
  
      
     
   // public function __construct($usuario,$nombre,$apellidos,$email,$edad,$telefono,$password='',$password2='') {
    public function __construct($usuario,$nombre,$apellidos,$password='',$password2='') {
        $this->nom=$usuario;
        $this->cognoms=$cognoms;
        $this->email=$email;
        $this->password=$password;   
        $this->password2=$password2;
    }
    
    public function getnom(){
        return $this->id_usuaris;
    }
         
    public function getNombre(){
        return $this->nombre;
    }    

    public function getApellidos(){
        return $this->apellidos;
    }
       
    public function getPassword(){
        return $this->password;
    }
    
    public function getPassword2(){
        return $this->password2;
    }
    
}

?>
