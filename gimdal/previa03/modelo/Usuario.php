<?php

/**
 * Description of Usuarios
 *
 * @author Ivan
 */
class Usuario {
    
    private $id_usuaris;
    private $nombre;
    private $apellidos;
    private $email;
    private $permisos;
   // private $telefono;
    private $password;
    private $password2='';
      
     
   // public function __construct($usuario,$nombre,$apellidos,$email,$edad,$telefono,$password='',$password2='') {
    public function __construct($usuario,$nombre,$apellidos,$password='',$password2='') {
        $this->id_usuaris=$usuario;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->password=$password;   
        $this->password2=$password2;
    }
    
    public function getId(){
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
