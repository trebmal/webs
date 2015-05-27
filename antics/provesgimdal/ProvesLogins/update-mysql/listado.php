<?php
require("conexion.php");
require("funciones.php");

$query = "SELECT * FROM empresa ORDER BY nombre ASC";
$queEmp = mysql_query($query, $conexion);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Listado de Empresas</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>Listado de  Empresas</h3>
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>&nbsp;</th>
  </tr>
  <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { ?>
  <tr>
    <td><?php echo $rsEmp['nombre']; ?></td>
    <td><?php echo $rsEmp['direccion']; ?></td>
    <td><a href="editar.php?id=<?php echo $rsEmp['id']; ?>">Editar</a></td>
  </tr>
  <?php } ?>
</table>
<p>&nbsp;</p>
</body>
</html>