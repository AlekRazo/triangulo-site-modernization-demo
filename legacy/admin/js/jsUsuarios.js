$(function(){
    //Activacion de los elementos del menú
    var url = window.location;
    $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
    $('ul.nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
    
    //Configuracion del selector de fecha de los modales de modicicacion
    $('.input-group.date').datepicker({
        weekStart: 1,
        maxViewMode: 2,
        format: "dd/mm/yyyy",
        language: "es",
        todayBtn: "linked",
        daysOfWeekDisabled: "0",
        autoclose: true,
        todayHighlight: true
    });
    
    //Configuracion de los selectores de fecha de las paginas de busqueda
    $('#sandbox-container input').datepicker({
        weekStart: 1,
        maxViewMode: 2,
        format: "dd/mm/yyyy",
        language: "es",
        todayBtn: "linked",
        daysOfWeekDisabled: "0",
        autoclose: true,
        todayHighlight: true,
        orientation: "bottom left"
    });
});

function validarFormatoFecha(campo) {
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    if ((campo.match(RegExPattern)) && (campo!='')) {
          return true;
    } else {
          return false;
    }
}

function buscarResultados(fecha, deporte, accion){
    var dataString = "ajax=find&fecha=" + fecha + "&deporte=" + deporte + "&accion=" + accion;
    
    if(!fecha){
        dataString = "ajax=find&deporte=" + deporte + "&accion="+accion;
    }
    if(!deporte){
        dataString = "ajax=find&fecha=" + fecha + "&accion="+accion;
    }
    
    console.log(dataString);
    $.ajax({
        type: 'POST',
        url: 'index.php',
        data: dataString,
        success: function(data){
            $('#result').html(data);
        }
    });
}