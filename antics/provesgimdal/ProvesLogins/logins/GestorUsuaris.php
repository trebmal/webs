<?php

include_once 'Usuario.php';

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
     * Comprueba si existe algun usuario con los datos pasados como parametros. 
     * 
     * @param type $id Id del usuario.
     * @param type $pass Pass del usuario.
     * @return boolean 
     */
    public function comprobarUsuario($email,$password){
        $consulta = sprintf("SELECT email, password, permisos FROM usuaris WHERE email='%s' AND pasword='%s'",
            $this->mysqli->real_escape_string($email),
            $this->mysqli->real_escape_string($password)
        );
        $result = $this->mysqli->query($consulta);
        $row = $result->fetch_array();
        
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
