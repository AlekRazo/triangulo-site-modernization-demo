<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Triangulo Sports Bar</title>
    <link rel="shortcut icon" href="view/img/principal/logo.png">
    <link href="view/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="view/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="view/css/bootstrap-ten-cols.css" rel="stylesheet" type="text/css">
    <link href="view/css/bootstrap-nine-cols.css" rel="stylesheet" type="text/css">
    <link href="view/css/bootstrap-eight-cols.css" rel="stylesheet" type="text/css">
    <link href="view/css/fonts.css" rel="stylesheet" type="text/css">
    <link href="view/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=".">
                <img id="img_brand" alt="Triangulo" src="view/img/principal/logo.png">
            </a>
        </div>
            <div id="navbar1" class="navbar-collapse collapse">
                <ul class="nav nav-justified" id="menu_bar">
                    <li class="menu-image-left">
                        <a href="menu.html">MENÚ</a>
                    </li>
                    <li class="menu-image-mid">
                        <a href="viewCalendario.php">CALENDARIO</a>
                    </li>
                    <li class="menu-image-mid">
                        <a href="servicios.html">SERVICIOS</a>
                    </li>
                    <li class="menu-image-right">
                        <a href="contacto.html">CONTÁCTANOS</a>
                    </li>
                </ul>
            </div>      
        </div>
    </nav>

    <div class="container-fluid">
        <div id="banner" class="row">
            <h1 class="text-uppercase text-center text-banner">DISFRUTA TUS DEPORTES FAVORITOS</h1>
        </div>
    </div>
        
    <div class="container">
        <!-- Main component for a primary marketing message or call to action -->
        <!-- Banner calendario para escritorio -->
        <header id="banner_calendario_escritorio" >
            <div id="banner_calendario" class="row">
                <div class="col-xs-12">
                    <h1 class="text-uppercase text-banner-calendario text-center">CALENDARIO</h1>
                </div>
            </div>
            <div class="row ten-cols">
<!--                <div class="col-sm-2-9">
                    <img src="view/img/principal/calendario.png" alt="" class="img-responsive img-calendario-menu">
                </div>

                <div class="js-menu-deportes col-xs-2-10 col-sm-1-9 filler">
                    <img src="view/img/principal/calendario-relleno.png" alt="" class="img-responsive img-logos">
                </div>-->
                
                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="1" href="#">
                        <img src="view/img/principal/fifa.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>

                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="2" href="#">
                        <img src="view/img/principal/nfl.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>

                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="3" href="#">
                        <img src="view/img/principal/mlb.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>

                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="4" href="#">
                        <img src="view/img/principal/nba.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>

                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="6" href="#">
                        <img src="view/img/principal/ufc.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>

                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="7" href="#">
                       <img src="view/img/principal/xolos.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>

                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="8" href="#">
                        <img src="view/img/principal/liga-mx.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>

                <div class="js-menu-deportes col-xs-2-8 col-sm-1-8">
                    <a class="js-buscar-eventos2" data-id-deporte="5" href="#">
                        <img src="view/img/principal/box.png" alt="" class="img-responsive img-logos">
                    </a>
                </div>
            </div>
        </header>
        <!-- Fin Banner para escritorio -->
        
        <!-- Container (This is what changes) -->
        <div id="contenido">
            <?php echo isset($content)?$content:'Error: archivo no encontrado'; ?>
        </div>
        <!-- End container -->

        <div id="banner_carousel" class="row">
            <div class="col-xs-12">
            </div>
        </div>
    </div>
      
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div id="footer_left" class="col-xs-12 col-md-6">
                    <div class="col-md-4 col-xs-5">
                        <img class="img-responsive" src="view/img/principal/logo.png">
                    </div>
                    <div class="col-md-8 col-xs-7">
                        <h2 class="text-uppercase text_contacto">CONTACTANOS</h2>
                        <p>Nos interesa saber tu opinión</p>
                        
                        <div id="social_networks_list">
                            <ul>
                                <li class="social_network">
                                    <a target="_blank" href="https://twitter.com/TrianguloSports">
                                        <img alt="Facebook" class="img-responsive img_footer_logos" src="view/img/footer/twitter.png">
                                    </a>
                                </li>
                                <li class="social_network">
                                    <a target="_blank" href="https://www.facebook.com/triangulosportsbar/">
                                        <img class="img-responsive img_footer_logos" alt="Twitter" src="view/img/footer/facebook.png">
                                    </a>
                                </li>
                                <li class="social_network">
                                    <a target="_blank" href="https://www.instagram.com/triangulosportsbar/">
                                        <img class="img-responsive img_footer_logos" alt="Gooogle +" src="view/img/footer/instagram.png">
                                    </a>
                                </li>
                                <li class="social_network">
                                    <a target="_blank" href="https://plus.google.com/u/0/116314240716101437997?hl=es">
                                        <img class="img-responsive img_footer_logos" alt="Facebook" src="view/img/footer/google.png">
                                    </a>
                                </li>
                                <li class="social_network">
                                    <a target="_blank" href="https://www.youtube.com/channel/UCaedJx3DS-GpZAhGf_WLpiw">
                                        <img class="img-responsive img_footer_logos"alt="Twitter" src="view/img/footer/youtube.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="social_networks_row" class="col-xs-12 ten-cols">
                        <div class="col-xs-2-10">
                            <a target="_blank" href="https://twitter.com/TrianguloSports">
                                <img alt="Facebook" class="img-responsive img-logos-menu" src="view/img/footer/twitter.png">
                            </a>
                        </div>
                        <div class="col-xs-2-10">
                            <a target="_blank" href="https://www.facebook.com/triangulosportsbar/">
                                <img class="img-responsive img-logos-menu" alt="Twitter" src="view/img/footer/facebook.png">
                            </a>
                        </div>
                        <div class="col-xs-2-10">
                            <a target="_blank" href="https://www.instagram.com/triangulosportsbar/">
                              <img class="img-responsive img-logos-menu" alt="Gooogle +" src="view/img/footer/instagram.png"></a>
                        </div>
                        <div class="col-xs-2-10">
                            <a target="_blank" href="https://plus.google.com/u/0/116314240716101437997?hl=es">
                              <img class="img-responsive img-logos-menu" alt="Facebook" src="view/img/footer/google.png"></a>
                        </div>
                        <div class="col-xs-2-10">
                            <a target="_blank" href="https://www.youtube.com/channel/UCaedJx3DS-GpZAhGf_WLpiw">
                              <img class="img-responsive img-logos-menu" alt="Twitter" src="view/img/footer/youtube.png"></a>
                        </div>
                    </div>
                    <!-- End of Social networks section -->
                    <div class="col-xs-12">
                        <address>
                            <abbr title="Phone">Tel: (664) 686-3688</abbr> <br>
                            Río Colorado 2396 Col. Marron, Tijuana, B.C.
                        </address>
                    </div>
                </div>
                <!-- End of Triangulo Logo -->
                <!-- Contact Form (at right) -->
                <div id="footer_right" class="col-xs-12 col-md-6">
                    <form id="form_contacto" class="form-horizontal" role="form" method="post" action="index.php">
                        <!-- Name field -->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="" required>
                            </div>
                        </div>
                        <!-- End of Name field -->
                        <!-- Email field -->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo" value="" required>
                            </div>
                        </div>
                        <!-- End of Email field -->
                        <!-- Subject field -->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" value="">
                            </div>
                        </div>
                        <!-- End of Subject field -->
                        <!-- Message field -->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="form-control" id="message" rows="2" name="message" placeholder="Mensaje" required></textarea>
                            </div>
                        </div>
                        <!-- End of Message field -->
                        <!-- Alert message -->
                        <div id="msgSubmit" class="form-group hidden">
                            <!-- Will be used to display an alert to the user -->
                            Gracias por su mensaje, estaremos en contacto.
                        </div>
                        <!-- End of Alert message -->
                        <!-- Submit button -->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-danger">
                            </div>
                        </div>
                        <!-- End of Submit button -->
                    </form>
                    <!-- End of Contact Form -->
                </div>
            </div>
        </div>  
    </footer>
    <!-- End of Footer -->
    
    <script type="text/javascript" src="view/js/jquery.min.js"></script>
    <script type="text/javascript" src="view/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="view/js/script.js"></script>
    
</body></html>