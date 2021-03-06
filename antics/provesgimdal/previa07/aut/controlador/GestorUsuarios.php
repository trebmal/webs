<?php

include_once './modelo/Usuario.php';
include_once 'validadorFormularios.php';
/**
 * Clase para gestionar las operaciones con los usuarios en la base de datos.
 *
 * @author Ivan
 */
class GestorUsuarios {
    
    private $mysqli;
    
    public function __construct($conexion){
        $this->mysqli = $conexion;
    }
    
    /**
     * Comprueba si todos los datos del usuario son validos.
     * 
     * @param type $usuario Usuario que se quiere validar.
     * @return boolean 
     */
 /**   public function validarUsuario($usuario){
        $validador = new validadorFormularios();

        return (
            $validador->validarNombreUsuario($usuario->getId()) &
            $validador->validarNombre($usuario->getnom()) &
            $validador->validarApellidos($usuario->getcognoms()) &
            $validador->validarEmail($usuario->getemail()) &
            $validador->validarEdad($usuario->getpassword()) &
            $validador->validarTelefono($usuario->getpermisos()) &
          //  $validador->validarPassword($usuario->getPassword()) &
            //$validador->validarPasswordIguales($usuario->getPassword(), $usuario->getPassword2()) &
            !$this->existeUsuario($usuario->getnom())    
        );
    }
    
    /**
     * Añade el usuario a la base de datos. 
     * 
     * @param type $usuario El usuario que se quiere añadir a la base de datos.
     * @return boolean 
     */
   
/*
    public function insertarUsuario($usuario){
        // mysqli_real_escape_string -> Escapa caracteres especiales en la cadena dada.
        $consulta = sprintf("INSERT INTO usuarios (id, nombre, apellidos, email, edad, telefono, password) VALUES ('%s','%s','%s','%s','%d','%d','%s')",        
            $this->mysqli->real_escape_string($usuario->getId()),
            $this->mysqli->real_escape_string($usuario->getNombre()),
            $this->mysqli->real_escape_string($usuario->getApellidos()),
            $this->mysqli->real_escape_string($usuario->getEmail()),
            $this->mysqli->real_escape_string($usuario->getEdad()),
            $this->mysqli->real_escape_string($usuario->getTelefono()),
            // Encripta la password usando primero sha1 y al resultado concatenado con el usuario le aplica md5. 
            $this->mysqli->real_escape_string(md5(sha1($usuario->getPassword()).$usuario->getId()))
        );
        
        // Se ejecuta la consulta.
        $this->mysqli->query($consulta);  
        
        // Se comprueba que si se ha insertado.
        if(!$this->mysqli->affected_rows){
            die("<h3>Error: No se ha podido insertar el usuario en la base de datos.</h3>");
            return false;
        }
        else{
            return true;
        }
    }
    
    /**
     * Comprueba si existe algun usuario con el id pasado por parametro.
     * 
     * @param type $id Identidicador del usuario.
     * 
     * @return boolean 
     */
   
    
    /**
     * Comprueba si existe algun usuario con los datos pasados como parametros. 
     * 
     * @param type $id Id del usuario.
     * @param type $pass Pass del usuario.
     * @return boolean 
     */
    public function comprobarUsuario($email,$password){
     $consulta = sprintf("SELECT email, password, permisos FROM usuaris WHERE email='%s' AND password='%s' ",
        //$consulta = sprintf("SELECT email, password, permisos FROM usuaris  ",

            $this->mysqli->real_escape_string($email),
            //echo "$permisos",
           //$permisos = "permisos",
           // $permisos=($this->mysqli->real_escape_string('permisos')),
           // permisos==$permisos,
        
           // $this->mysqli->real_escape_string(md5(sha1($pass).$id))
             $this->mysqli->real_escape_string($password));
            // $this->mysqli->real_escape_string($permisos));
             

      // $filasn= mysql_num_rows($result);


        $result = $this->mysqli->query($consulta);
        $row = $result->fetch_array();
         $_SESSION['permisos']= $row['permisos'];
        
       //  $_SESSION['permisos']= $row['permisos'];

        if ($this->mysqli->affected_rows){



            $result->free();



           return true;
        }
        else{
            $result->free();
            return false;
        }
    }
    
    public function listarUsuarios(){
        //TODO
    }
}

?>
