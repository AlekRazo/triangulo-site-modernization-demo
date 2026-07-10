<form id="form_panel_inicio" class="form-horizontal" enctype="multipart/form-data">
    <!-- Form Name -->
    <legend>Agregar imagenes</legend>

    <!-- Text input-->
    <div class="form-group">
      <input type="hidden" name="ajax" value="insert-home">
      <label class="col-md-4 control-label" for="input_nombre_inicio">Nombre</label>  
      <div class="col-md-4">
        <input id="input_nombre_inicio" name="nombre" placeholder="Nombre" class="form-control input-md" required="" type="text">
      </div>
    </div>
    
    <!-- Button Drop Down -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="dropdown-deporte">Sección</label>
      <input id="hidden_seccion_inicio" type="hidden" name="seccion" value="">
      <div class="col-md-4">
        <div class="btn-group btn-block">
          <button id="button_seccion_inicio" name="seccion" value="Ninguna" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">Tipo <span class="caret"></span></button>
          <ul id="dropdown_seccion_inicio" class="dropdown-menu btn-block">
            <li><a data-id="1" href="#">Inicio</a></li>
            <li><a data-id="2" href="#">Eventos</a></li>
            <li><a data-id="3" href="#">Promociones</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- File Button --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">File Button</label>
      <div class="col-md-4">
          <input id="file_imagen_inicio" name="imagen" class="input-file" type="file">
      </div>
    </div>
    
    <!-- Button (Double) -->
    <div class="form-group">
      <div class="col-md-8 col-md-offset-4">
        <button id="button-submit" class="btn btn-success">Agregar evento</button>
        <button id="button-cancel" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
</form>