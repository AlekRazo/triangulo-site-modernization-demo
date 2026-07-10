<div class="row">
  <div class="col-xs-12">
    <h1>Panel de inicio</h1>
  </div>
    
</div>

<div class="row">  
  <div class="col-xs-12 col-sm-4 col-md-2 col-sm-offset-8 col-md-offset-10">
      <a class="btn btn-block btn-primary" href="verinicio.php" role="button">Administrar</a>
  </div>
</div>
<div class="row">
  <div id="result" class="col-md-12">
      <table class="table">
        <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inicioDatos as $inicio): ?>
            <tr>
                <td id="row-id<?php echo $inicio['id']; ?>"><?php echo $inicio['id']; ?></td>
                <td id="row-name<?php echo $inicio['id']; ?>"><?php echo $inicio['descripcion'] ?></td>
                <td><a href="../view/img/carousel-inicio/<?php echo $inicio['imagen']; ?>"><img class="img-responsive img_panel_eventos" src="../view/img/carousel-inicio/<?php echo $inicio['imagen']; ?>"></a></td>
                <td id="row-date<?php echo $inicio['id']; ?>"><?php echo ($inicio['activo'] == '1') ? 'Activo' :'Inactivo'; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>     
  </div>
</div>


<!-- Panel de Eventos -->

<div class="row">
  <div class="col-xs-12">
    <h1>Panel de eventos</h1>
  </div>
</div>

<div class="row">  
  <div class="col-xs-12 col-sm-4 col-md-2 col-sm-offset-8 col-md-offset-10">
      <a class="btn btn-block btn-primary" href="vereventos.php" role="button">Administrar</a>
  </div>
</div>

<div class="row">
  <div id="result" class="col-md-12">
      <table class="table">
        <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventoDatos as $eventos): ?>
            <tr>
                <td id="row-id<?php echo $eventos['id']; ?>"><?php echo $eventos['id']; ?></td>
                <td id="row-name<?php echo $eventos['id']; ?>"><?php echo $eventos['descripcion'] ?></td>
                <td><a href="../view/img/carousel-eventos/<?php echo $eventos['imagen']; ?>"><img class="img-responsive img_panel_eventos" src="../view/img/carousel-eventos/<?php echo $eventos['imagen']; ?>"></a></td>
                <td id="row-date<?php echo $eventos['id']; ?>"><?php echo ($eventos['activo'] == '1') ? 'Activo' :'Inactivo'; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>

<!-- Panel de promociones -->

<div class="row">
  <div class="col-xs-12">
    <h1>Panel de promociones</h1>
  </div>
</div>

<div class="row">  
  <div class="col-xs-12 col-sm-4 col-md-2 col-sm-offset-8 col-md-offset-10">
      <a class="btn btn-block btn-primary" href="verpromociones.php" role="button">Administrar</a>
  </div>
</div>

<div class="row">
  <div id="result" class="col-md-12">
    <table class="table">
        <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promocionDatos as $promocion): ?>
            <tr>
                <td id="row-id<?php echo $promocion['id']; ?>"><?php echo $promocion['id']; ?></td>
                <td id="row-name<?php echo $promocion['id']; ?>"><?php echo $promocion['descripcion'] ?></td>
                <td><a href="../view/img/carousel-promociones/<?php echo $promocion['imagen']; ?>"><img class="img-responsive img_panel_eventos" src="../view/img/carousel-promociones/<?php echo $promocion['imagen']; ?>"></a></td>
                <td id="row-date<?php echo $promocion['id']; ?>"><?php echo ($promocion['activo'] == '1') ? 'Activo' :'Inactivo'; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>