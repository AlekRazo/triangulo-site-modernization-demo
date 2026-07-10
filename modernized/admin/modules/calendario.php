<div class="row">
  <div class="col-xs-12">
    <h1>Calendario</h1>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-10">
      <form id="form_buscar_eventos" class="form-horizontal" role="form">
      <div class="form-group col-sm-8">
          <div class="col-sm-2">
            <label for="fecha_input_calendario" class="control-label">Fecha</label>
          </div>
          <div id="sandbox-container" class="col-sm-9">
            <div class="input-group date">
              <input name="fecha" id="fecha_input_calendario" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
          </div>
      </div>
      <div class="form-group col-sm-4">
        <div class="col-xs-6">
          <input id="deporte_hidden_calendario" type="hidden" name="deporte" value="" />
          <div class="btn-group btn-block">
            <button id="deporte_button_calendario" class=" btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">Deporte <span class="caret"></span></button>
            <ul id="deporte_dropdown_calendario" class="dropdown-menu btn-block">
              <li><a >FIFA</a></li>
              <li><a href="#">NFL</a></li>
              <li><a href="#">MLB</a></li>
              <li><a href="#">NBA</a></li>
              <li><a href="#">Box</a></li>
              <li><a href="#">UFC</a></li>
              <li><a href="#">Liga MX</a></li>
              <li><a href="#">Xolos</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-block btn-default">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  
  <div class="col-xs-12 col-sm-2">
      <a class="btn btn-block btn-primary" href="nuevoevento.php" role="button">Agregar</a>
  </div>
</div>

<div class="row">
  <div id="result" class="col-md-12">
    
  </div>
</div>