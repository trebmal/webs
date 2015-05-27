

<?php



 function conectar()
{

$bd_host="localhost"; 
$bd_usuari="root"; 
$bd_password=""; 
$bd_base="gimdal"; 


 if (!$conexion=mysql_connect($bd_host,$bd_usuari,$bd_password))
{
echo "Error al conectar a la base de datos ".mysql_error();
exit();
}
 if (!@mysql_select_db($bd_base,$conexion)) 
{
  echo "Error al seleccionar la base de datos ".mysql_error();
  exit();
}
}









/*


$bd_host="localhost"; 
$bd_usuari="root"; 
$bd_password=""; 
$bd_base="gimdal"; 


$connexio=new mysqli($bd_host,$bd_usuari,$bd_password,$bd_base);
if ($connexio->connect_errno) {
	echo "Error de Connexio {$connexio->connect_errno}";
}
echo"Connexio OK"

*/
?>