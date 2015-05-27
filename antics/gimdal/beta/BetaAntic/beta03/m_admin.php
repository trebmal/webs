<!DOCTYPE html>

<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.editor.css">

    <!--	<script type="text/javascript" charset="utf-8" src="https://code.jquery.com/jquery-1.11.2.js"></script> -->









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
            <li><a href="../administracio/adm.php">administracio</a></li>


            <li><a href="../vendes/index.php">vehicles</a></li>



            <li><a href="../recanvis/recanvis.php">telefonia</a></li>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">vendes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <li><a id="altausuaris" href="#">Usuaris</a></li>

               <!--<li><a href="../gestio/altausuaris/index.php">Usuaris</a></li>  -->
                <li><a  href="../gestio/proves/examples/simple/dates.html" target="_blank">Mercur</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            <li><a href="../auxiliars/tancar.php">Sortir</a><li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div id="contingut"class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>



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
    <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-2.1.3.min.js"></script>

    <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/table.persones.js"></script>



    <script src="jspropi/funcionsmenu.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>




</body>









</html>
