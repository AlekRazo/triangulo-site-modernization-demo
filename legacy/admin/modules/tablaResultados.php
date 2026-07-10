<h3>Resultado de la búsqueda</h3>

<table class="table">
    <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Fecha</th>
          <th>Resultado</th>
          <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $evento): ?>
        <tr>
            <td id="row-id<?php echo $evento['id']; ?>"><?php echo $evento['id']; ?></td>
            <td id="row-name<?php echo $evento['id']; ?>"><?php echo $evento['nombre'] ?></td>
            <td id="row-date<?php echo $evento['id']; ?>"><?php echo $evento['fechaEvento'] ?></td>
            <td id="row-result<?php echo $evento['id']; ?>"><?php echo $evento['resultado'] ?></td>
            <td><button id="button-edit<?php echo $evento['id']; ?>" class="btn btn-default" data-toggle="modal" data-target="#results-modal" data-id="<?php echo $evento['id'];?>"><?php echo ($evento['resultado']!= "") ? 'Editar' :'Agregar resultado'; ?></button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Modal -->
<div id="results-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="title-result" class="modal-title">Agregar resultado</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="input-result" class="control-label">Resultado: </label>
              <input type="text" class="form-control" id="input-result">
            </div>
        </div>
        <div class="modal-footer">
            <button id="update_result_button" type="button" class="btn btn-primary">Agregar resultado</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>