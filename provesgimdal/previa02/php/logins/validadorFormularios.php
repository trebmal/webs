<?php

/**
 * Clase para validar los distintos campos de los formularios de registro.
 *
 * @author Ivan
 */
class validadorFormularios {
    
  
    
    //function validarEmail ($email){
      //  echo '<script> validarEmail("'.$email.'") </script>';
       // return (preg_match('/^[a-zA-Z]+([\.]?[a-zA-Z0-9_-]+)*@[a-z0-9]+([\.-]+[a-z0-9]+)*\.[a-z]{2,4}$/', $email));
    //}
    

 



    function validarNom ($nom){
        echo '<script> validarNom("'.$nom.'") </script>';
        return (($nom=="")||(preg_match('/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/', $nom)));      
    }
    
    function validarCognoms ($cognoms){
        echo '<script> validarCognoms("'.$cognoms.'") </script>';
        return (($cognoms=="")||(preg_match('/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/', $cognoms))); 
    }
    
        function validarUsuari ($usuari){
        echo '<script> validarUsuari("'.$usuari.'") </script>';      
        return (preg_match('/^[a-zA-Z0-9_-]{4,15}$/', $usuari));
    }

 
      
    function validarPassword ($password){
        echo '<script> validarPassword("'.$password.'") </script>';
        return (strlen($password)>=4);
    }
    
    function validarPasswordIguales ($password, $password2){
        echo '<script> validarPasswordIguales("'.$password.'","'.$password2.'") </script>';
        return ($password == $password2);
    }


    function validarPermisos ($permisos){
        echo '<script> validarPermisos("'.$permisos.'") </script>';
       return (($permisos=="")||(preg_match('/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/', $permisos)));         
    }


}

?>