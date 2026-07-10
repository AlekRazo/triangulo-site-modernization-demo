<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../view/img/principal/logo.png">

    <title>Triangulo Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../view/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form id="form_login" class="form-signin" method="post" action="index.php">
        <h2 class="form-signin-heading">Iniciar sesion</h2>
        <label for="inputEmail" class="sr-only">Correo</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recuerdame
          </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
    <script type="text/javascript" src="../view/js/jquery.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
