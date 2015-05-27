<?php
session_start();
$valido=true;
      if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
        
         //datos de acceso
         $host="localhost";
         $usuario="root";
         $contra="";
         $db="gimdal";
         
         //establecer la conexion
       // $testconec= mysql_pconnect($host,$usuario,$contra) or die ("No se puede conectar");
         $testconec= mysql_connect($host,$usuario,$contra) or die ("No se puede conectar");
        mysql_select_db($db) or die ("No se encuentra la base de datos especificada");
        
        
         $email=$_POST['email'];
         $password=$_POST['password'];
         $consulta="SELECT id, email,password, permisos FROM usuaris where email='$email' AND password='$password'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
             //guardamos en sesion el nombre del usuario 
             $_SESSION["usuario"]=$email;
             header("location:pagina.php?login=true");
         }               
      }
?>



<!DOCTYPE html>

<html>
<head>
    <title>Validacion de Formulario PHP</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
    <p class="texto">Sistema de Logueo<br>
    ‘Saul Guardado’</p>

    <div id="form">
        <p>Ingresa los datos correspondientes</p>

        <form action="index.php" method=
        "post">
            <p>Usuario:</p><input name="email" type="text"><br>

            <p>Contraseña:</p><input name="password" type="password"><br>
            <input name="entrar" type="submit" value="ENTRAR">
            <?php if ($valido==false) {
                echo '<p>Datos incorrectos <br/><a href="index.php">Intente de nuevo</a></p>';
            }?>
        </form>
    </div>
</body>
</html>