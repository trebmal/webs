<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        // Se comprueba si ya se habia iniciado la sesion.
        if(isset($_SESSION['email'])){
            echo 'Sesion iniciada correctamente.<br />';
            echo 'Usuario: '.$_SESSION['email'].'<br />';
            echo 'Password: '.$_SESSION['password'].'<br />';
            echo 'Password: '.$_SESSION['permisos'].'<br />';
          
           // echo $permisos;
        }
        else{
           header("Location:formulario_login.php");
        }
        ?>
        <a href="controlador/tancar.php">Salir</a> 
    </body>
</html>
