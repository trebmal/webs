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
       //if(isset($_SESSION ['permisos'] ='04')){
         if($_SESSION ['permisos'] =='03'){
            echo 'Sesion iniciada correctamente.<br />';
            echo 'Usuario: '.$_SESSION['email'].'<br />';
            echo 'Password: '.$_SESSION['password'].'<br />';
            echo 'Permisos: '.$_SESSION['permisos'].'<br />';
        }
        else{
          header("Location: index.php");
        }
        ?>
        <a href="php/tancar.php">Salir</a> 
    </body>
</html>
