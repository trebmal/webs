<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/css//sticky-footer-navbar.css" rel="stylesheet">


<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="../../DataTables-1.10.5/media/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="../../DataTables-1.10.5/media/js/jquery.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="../../DataTables-1.10.5/media/js/jquery.dataTables.js"></script>




    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Sticky%20Footer%20Navbar%20Template%20for%20Bootstrap_fitxers/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GIMDAL</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="../administracio/adm.php">Administracio</a></li>
            <li><a href="../vendes/index.php">Vendes</a></li>
            <li><a href="../recanvis/recanvis.php">Recanvis</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="altausuaris/index.php">Usuaris</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            <li><a href="../../auxiliars/tancar.php">Sortir</a><li> 
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>



<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="usuaris" width="100%">
			
<!--
      	<thead>
					<tr>
						<th>nom</th>
						<th>cognoms</th>
						<th>usuari</th>
						<th>permisos</th>
					</tr>
				</thead>
			</table>
      -->

      <p class="lead">Pin a fixed-height footer to the bottom of the 
viewport in desktop browsers with this custom HTML and CSS. A fixed 
navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
      <p>Back to <a href="http://getbootstrap.com/examples/sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Sticky%20Footer%20Navbar%20Template%20for%20Bootstrap_fitxers/jquery.js"></script>
    <script src="Sticky%20Footer%20Navbar%20Template%20for%20Bootstrap_fitxers/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Sticky%20Footer%20Navbar%20Template%20for%20Bootstrap_fitxers/ie10-viewport-bug-workaround.js"></script>
  

</body></html>