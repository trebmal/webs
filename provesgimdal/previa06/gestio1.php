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
 $conexion->close();
        //header("Location:../../index.php?error=error");

        header("Location: index.htm");

         }
         else
         {
        $rowsresult=mysql_fetch_array($result);          
       // $_SESSION['idusuario']= $rowsresult['id'];
         //    $valido=true;
             //guardamos en sesion el nombre del usuario 
           //  $_SESSION["usuario"]=$email;
            // header("location:pagina.php?login=true");


     //pat nova
            session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
      $valido=true;
        header("Location: pagina1.php");
   




         }               
      }







?>


