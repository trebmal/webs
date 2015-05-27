<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Menu admin</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.editor.css">
    <style> body { padding-top: 35px } </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" >

        <div class="container" style="font-size:1.1em;height: 0.2em;">

         <div class="navbar-header" >
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
            <li><a href="./m_admin.php">Inici</a></li>
            <li><a href="./m_admin.php">administracio</a></li>
            <li><a id="mos" href="#">vendes</a></li>
            <li><a href="./m_admin.php">recanvis</a></li>
            <li><a href="./m_admin.php">admin</a></li>
            <li><a href="../auxiliars/tancar.php">Sortir</a></li>
          </ul>
        </div><!--/.nav-collapse -->





            <div id="vendes">

              <nav>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">vendes</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li id="altausuaris"><a style="color:blue;font-size:0.8em" href="#">clients</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Merkur <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a  href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">certificats</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </div>
</nav>




            </div> <!--/.div vendes -->










      </div> <!--/.div class container -->
    </nav>






    <!-- Begin page content -->
    <div class="container">
      <div id="contingut"class="page-header">
        <h1>Gimdal</h1>
      </div>
    </div>



    <footer class="footer">
      <div class="container">
        <p class="text-muted">Miky 2015</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="js/funcionsmenu.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>


</body>
</html>
