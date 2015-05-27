<?php

    include 'config.php';
   // require_once 'GestorUsuarios.php';
    
    
    $con = mysqli_connect("localhost","root","","gimdal");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

            $email = ($_POST['email']);
            $password = ($_POST['password']);

$result = mysqli_query($con,"SELECT email, password, permisos FROM usuaris WHERE email='".$email."' ");




if($row = mysqli_fetch_array($result)) {

        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['permisos'] = $row['permisos'];



echo $_SESSION['email'];
echo $_SESSION['password'];
echo $_SESSION['permisos'];

mysqli_close($con);
}else {
        echo "Operación incorrecta.";
        mysqli_close($con);
        header("Location: ../formulario_login.php");
    }





/*


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


    */
?>
