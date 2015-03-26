<?php
require("conexion.php");
require("funciones.php");

$idempresa = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");

if ($action == "edit") {
	$idempresa = sqlValue($_POST["id"], "int");
	$nombre = sqlValue($_POST["nombre"], "text");
	$direccion = sqlValue($_POST["direccion"], "text");
	$telefono = sqlValue($_POST["telefono"], "int");
	
	$sql = "UPDATE empresa SET ";
	$sql.= "nombre=".$nombre.", direccion=".$direccion.", telefono=".$telefono." ";
	$sql.= "WHERE id=".$idempresa;
	mysql_query($sql, $conexion);
	header("location: listado.php");
}

$sql = "SELECT * FROM empresa WHERE id = ".sqlValue($idempresa, "int");
$queEmp = mysql_query($sql, $conexion);
$rsEmp = mysql_fetch_assoc($queEmp);
$total = mysql_num_rows($queEmp);
if ($total == 0) {
	header("location: listado.php");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP con MySQL: Editar datos en MySQL</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>Editar Empresa</h3>
<form method="post" id="frEmpresa" action="editar.php?action=edit">
	<label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $rsEmp["nombre"]; ?>" />
    <br />
    <label for="direccion">Direcci&oacute;n</label>
    <input type="text" id="direccion" name="direccion" value="<?php echo $rsEmp["direccion"]; ?>" />
    <br />
    <label for="telefono">Telefono</label>
    <input type="text" id="telefono" name="telefono" value="<?php echo $rsEmp["telefono"]; ?>" />
    <br />
    <label for="bts">&nbsp;</label>
    <button type="submit">Guardar</button>
    <button type="reset">Limpiar</button>
    <input type="hidden" id="id" name="id" value="<?php echo $rsEmp["id"]; ?>" />
</form>
</body>
</html>