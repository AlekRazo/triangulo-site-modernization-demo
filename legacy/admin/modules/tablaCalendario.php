<h3>Resultado de la búsqueda</h3>

<table class="table">
    <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Fecha</th>
          <th>Descripcion</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $evento): ?>
        <tr>
            <td><?php echo $evento['id']; ?></td>
            <td><?php echo $evento['nombre'] ?></td>
            <td><?php echo $evento['fechaEvento'] ?></td>
            <td><?php echo $evento['descripcion'] ?></td>
            <td><a href="../view/img/uploads/<?php echo $evento['imagen']; ?>">Imagen</a></td>
            <td><button class="btn btn-default" data-toggle="modal" data-target="#events-delete-modal" role="button" data-id="<?php echo $evento['id'];?>">Borrar</button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Modal de actualizacion -->
<div id="events-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modificar evento</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label" for="input-nombre">Nombre</label>
                        <input id="input_nombre_evento" name="nombre" placeholder="Nombre" class="form-control input-md" required="" type="text">
                    </div>

                    <!-- Button Drop Down -->
                    <div class="form-group">
                        <label class="control-label" for="dropdown-deporte">Deporte</label>
                        <input id="hidden_deporte_evento" type="hidden" name="deporte" value="">
                        <div class="btn-group btn-block">
                            <button id="button_deporte_evento" name="deporte" value="Deporte" class=" btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">Deporte <span class="caret"></span></button>
                            <ul id="dropdown_deporte_nuevo" class="dropdown-menu dropdown-menu-deporte btn-block">
                                <li><a data-id="1" href="#">FIFA</a></li>
                                <li><a data-id="2" href="#">NFL</a></li>
                                <li><a data-id="3" href="#">MLB</a></li>
                                <li><a data-id="4" href="#">NBA</a></li>
                                <li><a data-id="5" href="#">Box</a></li>
                                <li><a data-id="6" href="#">UFC</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Button Drop Down -->
                    <div class="form-group">
                        <label class="control-label" for="dropdown-categoria">Categoria</label>
                        <input id="hidden_categoria_evento" type="hidden" name="categoria" value="">
                        <div class="btn-group btn-block">
                            <button id="button_categoria_evento" name="categoria" value="Categoria" class=" btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">Categoria <span class="caret"></span></button>
                            <ul id="dropdown_categoria_evento" class="dropdown-menu dropdown-categoria-menu btn-block">
                                <li><a data-id="8" href="#">Ninguna</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Datepicker -->
                    <div class="form-group">
                        <label for="input_fecha_evento" class="control-label">Fecha</label>
                        <div id="fecha_contenedor">
                            <div class="input-group date">
                                <input name="fecha" id="input_fecha_evento" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="control-label" for="textarea">Text Area</label>
                        <div>                     
                            <textarea class="form-control" id="textarea_descripcion_evento" name="textarea"></textarea>
                        </div>
                    </div>

                    <!-- File Button --> 
                    <div class="form-group">
                        <label class="control-label" for="input_imagen_evento">File Button</label>
                        <div>
                            <input id="input_imagen_evento" name="imagen" class="input-file" type="file">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="button_update_event" type="button" class="btn btn-primary">Modificar evento</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de actualizacion -->

<!-- Modal para eliminar -->
<div id="events-delete-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar evento</h4>
      </div>
      <div class="modal-body">
        <p id="text_question_delete">¿Desea eliminar el evento "evento"?</p>
      </div>
      <div class="modal-footer">
        <button id="button_delete_event" type="button" class="btn btn-primary">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal para eliminar -->