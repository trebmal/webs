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
    <style> body { padding:35px } </style><!-- Desplazament del cos de la pagina per donar cabuda al contingut-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default  navbar-fixed-top">

      <div class="container" style="font-size:1.3em">

        <div class="navbar-header"  >
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
            <li><a href="./m_admin.php"><span class="glyphicon glyphicon-home"></span>
              inici</a></li>
            <li><a href="./m_admin.php"><span class="glyphicon glyphicon-folder-open"></span>
              administracio</a></li>
            <li><a id="ven" href="#"><span class="glyphicon glyphicon-credit-card"></span>
              vendes</a></li>
            <li><a href="./m_admin.php"><span class="glyphicon glyphicon-wrench"></span>
              recanvis</a></li>
            <li><a href="./m_admin.php"><span class="glyphicon glyphicon-hdd"></span>
              admin</a></li>
            <li><a href="../auxiliars/tancar.php"><span class="glyphicon glyphicon-triangle-right"></span>
              sortir</a></li>
            </ul>
        </div><!--/.nav-collapse -->


        <!--Menu gestio de vendes -->
        <div id="vendes" style="height:15px;font-size:0.8em;text-align:center">
          <nav class="navbar">
            <div class="container-fluid"  style="background-color:PaleTurquoise;border-radius: 15px;">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">vendes</a>
              </div>
                <div>
                  <ul class="nav navbar-nav">
                    <li id="altausuaris"><a href="#">clients</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">merkur <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">gestió</a></li>
                        <li><a href="#">alta-màquines</a></li>
                        <li><a  href="#">Page 1-3</a></li>
                      </ul>
                    </li>
                      <li><a href="#">certificats</a></li>

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
