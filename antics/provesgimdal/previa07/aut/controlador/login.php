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

$result = mysqli_query($con,"SELECT email, password, permisos FROM usuaris WHERE email = '$email' and  password = '$password'");




if($row = mysqli_fetch_array($result)) {

         session_start();

        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['permisos'] = $row['permisos'];



echo $_SESSION['email'];
echo $_SESSION['password'];
echo $_SESSION['permisos'];

mysqli_close($con);

$permisos = $row['permisos'];

switch ($permisos) {
    case "00":
        echo "No tens permisos";
        header("Location: ../../index.htm");
        break;
    case "01":
        echo "Totals";

        break;
    case "02":
        echo "Lectura";
        break;
   case "03":
        echo "Especial";
       header("Location: ../../total.php");
        break;
        case "04":
        echo "vendes";
        header("Location: ../../vendes.php");
        break;



    default:
        echo "Your favorite color is neither red, blue, or green!";
}










}else {
       //no es troba torna al index
        mysqli_close($con);
        header("Location: ../../index.htm");
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
