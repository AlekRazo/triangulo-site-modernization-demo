<!-- Main component for a primary marketing message or call to action -->
<div id="banner_carousel" class="row">
    <div class="col-xs-12">
        
    </div>
</div>
<div class="row">
    <!-- Carousel -->
    <div class="col-xs-12">
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">       
                <?php for($count = 0; $count<$inicioCuenta; $count++):?>
                    <li data-target="#homeCarousel" data-slide-to="<?php echo $count; ?>" <?php echo ($count == 0) ? 'class="active"': '';?>></li>
                <?php endfor;?>
            </ol>

            <div class="carousel-inner" role="listbox">
                <?php $counter = 0; foreach ($inicioDatos as $inicio):?>
                    <div class="item <?php echo ($counter == 0) ? 'active' : ''; ?>">
                        <img class="first-slide" src="view/img/carousel-inicio/<?php echo $inicio["imagen"]; ?>" alt="<?php echo $inicio["descripcion"]; ?>">
                    </div>            
                <?php $counter++; endforeach;?>
            </div>

            <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6">
        <h2 class="text-center text-uppercase" id="encabezado-eventos">EVENTOS</h2>

        <!-- Carousel -->
        <div id="eventsCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php for($count = 0; $count<$eventoCuenta; $count++):?>
                    <li data-target="#eventsCarousel" data-slide-to="<?php echo $count; ?>" <?php echo ($count == 0) ? 'class="active"': '';?>></li>
                <?php endfor;?>
            </ol>

            <div class="carousel-inner" role="listbox">
                <?php $counter = 0; foreach ($eventoDatos as $evento):?>
                    <div class="item <?php echo ($counter == 0) ? 'active' : ''; ?>">
                        <img class="first-slide" src="view/img/carousel-eventos/<?php echo $evento["imagen"]; ?>" alt="<?php echo $evento["descripcion"]; ?>">
                    </div>            
                <?php $counter++; endforeach;?>
            </div>

            <a class="left carousel-control" href="#eventsCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#eventsCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="col-lg-6 col-sm-6">
        <h2 class="text-center text-uppercase" id="encabezado-promociones">PROMOCIONES</h2>

        <!-- Carousel -->
        <div id="promosCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php for($count = 0; $count<$promocionCuenta; $count++):?>
                    <li data-target="#promosCarousel" data-slide-to="<?php echo $count; ?>" <?php echo ($count == 0) ? 'class="active"': '';?>></li>
                <?php endfor;?>
            </ol>

            <div class="carousel-inner" role="listbox">
                <?php $counter = 0; foreach ($promocionDatos as $promocion):?>
                    <div class="item <?php echo ($counter == 0) ? 'active' : ''; ?>">
                        <img class="first-slide" src="view/img/carousel-promociones/<?php echo $promocion["imagen"]; ?>" alt="<?php echo $promocion["descripcion"]; ?>">
                    </div>            
                <?php $counter++; endforeach;?>
            </div>

            <a class="left carousel-control" href="#promosCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#promosCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>