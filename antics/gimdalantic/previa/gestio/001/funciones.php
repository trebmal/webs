<?php

	define("cServidor", "localhost");
	define("cUsuario", "root");
	define("cPass","");
	define("cBd","gimdal");

	$conexion = mysqli_connect(cServidor, cUsuario, cPass, cBd);
	$consulta = "SELECT id, nom, cognoms FROM usuaris";
	$registro = mysqli_query($conexion, $consulta);

	//guardamos en un array multidimensional todos los datos de la consulta
	$i=0;
	$tabla = "";
	
	while($row = mysqli_fetch_array($registro))
	{
		$tabla.='{"id":"'.$row['id'].'","nom":"'.$row['nom'].'","cognoms":"'.$row['cognoms'].'"},';		
		$i++;
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	
	
?>