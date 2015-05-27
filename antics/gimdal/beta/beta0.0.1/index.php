  <!DOCTYPE html>
  <?php
  session_start();

  if(!empty($_SESSION ['permisos'])){
    require_once 'auxiliars/logats.php';

  } else {

  }

  ?>
  <html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Login GIMDAL</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>

      <body>


        <div class="container">

          <form data-dpmaxz-eid="1" class="form-signin" action="auxiliars/login.php" method="post">
           <!--  <h2 class="form-signin-heading">Introdueix Email i Password</h2> -->
            <label for="inputEmail" class="sr-only">Email </label>
            <input name="email" data-dpmaxz-eid="2" id="inputEmail" class="form-control" autocomplete="off" placeholder="Email" required="" autofocus="" type="email">
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" data-dpmaxz-eid="3" id="inputPassword" class="form-control" placeholder="Password" required="" type="password">

            <!--
            <div class="checkbox">
              <label>
                <input data-dpmaxz-eid="4" value="remember-me" type="checkbox"> Remember me
              </label>
            </div>
            -->
            <button data-dpmaxz-eid="5" class="btn btn-lg btn-primary btn-block" type="submit">Inici</button>
          </form>


        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>


      </body>
      </html>
