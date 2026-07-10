<div class="row">
    <h1>Panel de promociones</h1>
</div>

<div class="row">  
  <div class="col-xs-12 col-sm-4 col-md-2 col-sm-offset-8 col-md-offset-10">
      <a class="btn btn-block btn-primary" href="agregarmenuinicio.php" role="button">Agregar</a>
  </div>
</div>

<div class="row">  
    <p class="text-justify">Nota: Dejar todos los elementos inactivos o dejar vacía la lista puede ocasionar un error en la página principal.</p>
</div>

<div class="row">
    <table class="table">
        <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Activo</th>
              <th></th>
              <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promocionDatos as $promocion): ?>
            <tr>
                <td id="row-id<?php echo $promocion['id']; ?>"><?php echo $promocion['id']; ?></td>
                <td id="row-name<?php echo $promocion['id']; ?>"><?php echo $promocion['descripcion'] ?></td>
                <td><a href="../view/img/promos/<?php echo $promocion['imagen']; ?>">Imagen</a></td>
                <td id="row-status<?php echo $promocion['id']; ?>"><input class="js-toggle-status" data-id="<?php echo $promocion['id'];?>" data-section="3" type="checkbox" <?php echo ($promocion['activo'] == '1') ? 'checked' :''; ?> data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger"></span></td>
                <td><button id="button-delete<?php echo $promocion['id']; ?>" class="btn btn-default" data-toggle="modal" data-target="#panel-delete-modal" data-id="<?php echo $promocion['id'];?>" data-section="3">Borrar</button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal para eliminar -->
<div id="panel-delete-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar anuncio</h4>
      </div>
      <div class="modal-body">
        <p id="text_question_delete">¿Desea eliminar el anuncio "anuncio"?</p>
      </div>
      <div class="modal-footer">
        <button id="button_delete_panel" type="button" class="btn btn-primary">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal para eliminar -->