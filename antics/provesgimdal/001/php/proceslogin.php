

 <?php
/* Llamar a Cadena de Conexion*/ 
//require ("connexio.php");

include ("connexio.php");
conectar();
if($_POST && !empty($_POST['usuari']) &&  !empty($_POST['pass']) ) 
{
//quitamos el posible SQLInjection del usuario
$usuario = mysql_real_escape_string($_POST['usuari']);  
//sacamos el hash del password para que se compare ya encriptado
$password = md5(mysql_real_escape_string($_POST['pass']));
//vemos si existen registros que coincidan
$query = mysql_query("SELECT * FROM personal ".
"WHERE usuari  = '{$usuari}' AND ".
"pass = '{$pass}' and status='1' ");
if(mysql_num_rows($query) == 1) 
{
session_start();
           $_SESSION['login'] = $usuari;
           //generamos un token aleatorio para el usuario
          $_SESSION['token'] = md5(rand().$_SESSION['login']);

           //actualizamos el token para qu sean iguales el de la db
           //y el de la sesión
           mysql_query("UPDATE user SET ".
           "token= '{$_SESSION['token']}' WHERE ".
           "username = '{$_SESSION['login']}'");
           
           //todo bien
           header("Location: sig.htm");
           exit;

} 
else {
//Destruimos la Sesion
Session_Start();
unset($_SESSION["login"]);
      header("Location: ../index.htm");  
     }
}
else
{
//Si hay campos vacios redirecciono
header("Location: index.htm");
}