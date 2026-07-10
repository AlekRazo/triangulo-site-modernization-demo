<form id="form_nuevo_evento" class="form-horizontal" enctype="multipart/form-data">
    <!-- Form Name -->
    <legend>Crear evento</legend>

    <!-- Text input-->
    <div class="form-group">
      <input type="hidden" name="ajax" value="insert-event">
      <label class="col-md-4 control-label" for="input-nombre">Nombre</label>  
      <div class="col-md-4">
      <input id="input_nombre_nuevo" name="nombre" placeholder="Nombre" class="form-control input-md" required="" type="text">

      </div>
    </div>
    
    <!-- Datepicker -->
    <div class="form-group">
        <label for="fecha_input_resultados" class="col-md-4 control-label">Fecha</label>
        <div id="sandbox-container" class="col-md-4">
            <input id="input_fecha_nuevo" name="fecha" type="text" class="form-control">
        </div>
    </div>
    
    <!-- Button Drop Down -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="dropdown-deporte">Deporte</label>
      <input id="hidden_deporte_nuevo" type="hidden" name="deporte" value="">
      <div class="col-md-4">
        <div class="btn-group btn-block">
          <button id="button_deporte_nuevo" name="deporte" value="Deporte" class=" btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">Deporte <span class="caret"></span></button>
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
    </div>

    <!-- Button Drop Down -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="dropdown-categoria">Categoria</label>
      <input id="hidden_categoria_nuevo" type="hidden" name="categoria" value="">
      <div class="col-md-4">
        <div class="btn-group btn-block">
            <button id="button_categoria_nuevo" name="categoria" value="Categoria" class=" btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">Categoria <span class="caret"></span></button>
          <ul id="dropdown_categoria_nuevo" class="dropdown-menu dropdown-categoria-menu btn-block">
            
          </ul>
        </div>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textarea">Descripción</label>
      <div class="col-md-4">                     
          <textarea id="textarea_descripcion_nuevo" name="descripcion" class="form-control"></textarea>
      </div>
    </div>

    <!-- File Button --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">File Button</label>
      <div class="col-md-4">
          <input id="file_imagen_nuevo" name="imagen" class="input-file" type="file">
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