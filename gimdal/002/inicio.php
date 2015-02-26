<?php
include('config.php');
if($_SESSION["logeado"] != "SI"){
header ("Location: index.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Usuarios v2.0</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
  body{background: #000;}
  </style>
  <body>
    <br>
        <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistema v2.0</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="inicio.php">Inicio</a></li>
              <li><a href="usuarios.php">Usuarios</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="">Fecha:
              	<?php
              	// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
              	date_default_timezone_set('UTC');
              	//Imprimimos la fecha actual dandole un formato
              	echo date("d / m / Y");
              	?></a></li>
              <li><a href="cerrar.php">Salir</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Sistema de Usuarios v2.0</h1>
        <p>
        	Este sistema de usuarios es originario del blog de <a href="http://www.marcofbb.com.ar">Marcofbb</a>, solamente que con unas
        	pequeñas y humildes modificaciones por parte mia, obviamente todos los derechos del codigo son del blog <a href="marcofbb.com.ar">Marcofbb</a>,
        	solamente que me parecio un ejemplo tan bueno y sencillo que me vi motivado a insertarle estilos y unas que otras cosillas extras,
        	espero este ejemplo sea de utilidad, ademas para agregarle mas cosas ( referente a estilos) puedes visitar <a href="http://www.bootsnipp.com/tags">Bootsnipp</a>,
        	la cual es una pagina dedicada a mostrar distintos tipos de ejemplos (como botones y demas) usando solamente <a href="http://www.getbootstrap.com">Bootstrap</a>,
        	lo cual es muy bueno por que la pagina es Responsive (si, se puede ver en muchos dispositivos sin problemas), bueno pues eso es todo, saludos desde mi amado México.<p></p>
        	<h3>Atte.- Jesux Herrera</h3> 
     </p>
        <p>
          <a class="btn btn-lg btn-primary" href="http://www.pilaresdelcodigo.wordpress.com" role="button">Somos Pilares del Codigo, Visitanos!! &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>