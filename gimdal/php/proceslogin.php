

<?php

$bd_host="localhost"; 
$bd_usuari="root"; 
$bd_password=""; 
$bd_base="gimdal"; 


$connexio=new mysqli($bd_host,$bd_usuari,$bd_password,$bd_base);
if ($connexio->connect_errno) {
	echo "Error de Connexio {$connexio->connect_errno}";
}
echo"Connexio OK"
?>