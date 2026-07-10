<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Triangulo Admin</title>
    
    <link rel="shortcut icon" href="../view/img/principal/logo.png">
    <!-- Bootstrap Core CSS -->
    <link href="../view/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../view/css/sb-admin.css" rel="stylesheet">
    <link href="../view/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="view/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=".">
                    <img alt="Brand" width="20" height="20" src="../view/img/principal/logo.png">
                </a>
                <a class="navbar-brand" href=".">
                    Triangulo Admin
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="."><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="calendario.php"><i class="fa fa-fw fa-desktop"></i>Calendario</a>
                    </li>
                    <li>
                        <a href="resultados.php"><i class="fa fa-fw fa-bar-chart"></i>Resultados</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <?php echo isset($content)?$content:'Error: archivo no encontrado'; ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script type="text/javascript" src="../view/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-toggle.min.js"></script>
    <script src="js/components-config.js"></script>
    <script src="js/events.js"></script>
    <script src="js/eventsInicio.js"></script>
    <script src="js/eventsCalendario.js"></script>
    <script src="js/eventsPanel.js"></script>
    <script src="js/newevent.js"></script>
    <script src="js/inicio.js"></script>
</body>

</html>