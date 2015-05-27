<?php

    include 'config.php';
    require_once 'GestorUsuarios.php';
    
    
    $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);
    $gestor = new GestorUsuarios($conexion);  
    
    if($gestor->comprobarUsuario($_POST['email'],$_POST['password'])){
        $conexion->close();
        // Iniciamos la sesion.
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
       
      
      
        header("Location:../pagina1.php");
    }else{
        $conexion->close();
        header("Location:../formulario_login.php?error=error");
    }
?>
