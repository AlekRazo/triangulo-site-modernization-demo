<div class="row">
  <div class="col-xs-12">
    <h1>Resultados</h1>
  </div>
</div>

<div class="row">
  <form id="form_buscar_resultados" class="form-horizontal" role="form">
    <div class="form-group col-sm-8">
        <div class="col-sm-2">
            <label for="fecha_input_resultados" class="control-label">Fecha</label>
        </div>
        <div id="sandbox-container" class="col-sm-9">
            <div class="input-group date">
                <input name="fecha" id="fecha_input_resultados" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
        </div>
    </div>
    <div class="form-group col-sm-4">
      <div class="col-xs-6">
        <div class="btn-group btn-block">
          <button id="deporte_button_resultados" class=" btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">Deporte <span class="caret"></span></button>
          <ul id="deporte_dropdown_resultados" class="dropdown-menu btn-block">
            <li><a href="#">Ninguno</a></li>
            <li><a href="#">FIFA</a></li>
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
  <!-- </div> -->
</div>

<div class="row">
  <div id="result" class="col-md-12">
    
  </div>
</div>