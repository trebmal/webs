<?php

/**
 * Clase para validar los distintos campos de los formularios de registro.
 *
 * @author Ivan
 */
class validadorFormularios {
    
    function validarNombreUsuario ($usuario){
        echo '<script> validarNombreUsuario("'.$usuario.'") </script>';      
        return (preg_match('/^[a-zA-Z0-9_-]{4,15}$/', $usuario));
    }
    
        
    function validarNombre ($nombre){
        echo '<script> validarNombre("'.$nombre.'") </script>';
        return (($nombre=="")||(preg_match('/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/', $nombre)));      
    }
    
    function validarApellidos ($apellidos){
        echo '<script> validarApellidos("'.$apellidos.'") </script>';
        return (($apellidos=="")||(preg_match('/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/', $apellidos))); 
    }
   
  
    function validarPassword ($password){
        echo '<script> validarPassword("'.$password.'") </script>';
        return (strlen($password)>=4);
    }
    
    function validarPasswordIguales ($password, $password2){
        echo '<script> validarPasswordIguales("'.$password.'","'.$password2.'") </script>';
        return ($password == $password2);
    }
}
?>