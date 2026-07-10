$(function (){
    //Envio de datos del formulario de busqueda de eventos
    $("#form_buscar_eventos").submit(function(event){
        // cancels the form submission
        event.preventDefault();
        var deporte = $("#deporte_button_calendario").text();
        var fecha = $("#fecha_input_calendario").val();
        
        deporte = deporte.trim();
        
        deporte = deporte.trim();
        
        formDeporte = deporte;
        formFecha = fecha;
        
        if(deporte === "Deporte" || deporte === "Ninguno"){
            deporte = "";
        }
        
        console.log(deporte + ", " + fecha);
        
        if(deporte ==="" && fecha === ""){
            alert("Por favor seleccione una fecha o un deporte");
        }
        else{
            buscarResultados(fecha, deporte, 1);
            $("#fecha_input_calendario").trigger('reset');
            $("#deporte_button_calendario").html('Deporte <span class="caret"></span>');
        }
    });
    
    //Cambio de opcion de deporte en el calendario
//    $(".dropdown-menu li a").click(function(){
//        var deporte = $(this).text();
//        $(this).parents('.btn-group').find('.dropdown-toggle').html(deporte+' <span class="caret"></span>');
//    });
    
    //Despliegue del modal del alta de resultados.
    $(document).on('show.bs.modal', "#events-modal", function(event){
        var id = $(event.relatedTarget).data('id'); // Extrae dato-id del botón.
        var dataString = 'ajax=find&id=' + id;
        // Consulta AJAX a la base de datos de un evento específico.
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            dataType: 'json',
            success: function(data){
//                console.log(data);
                $('#input_nombre_evento').val(data[3]);
                $('#input_deporte_evento').val(data[1]);
                $('#input_categoria_evento').val(data[2]);
                $('#input_fecha_evento').val(data[4]);
                $('#textarea_descripcion_evento').val(data[5]);
//                $('#input_imagen_evento').val(data[7]);
                $('#button_update_event').data('id', data[0]);
            }
        });
    });
    
    //Despliegue del modal del eliminacion.
    $(document).on('show.bs.modal', "#events-delete-modal", function(event){
        var id = $(event.relatedTarget).data('id'); // Extrae dato-id del botón.
        var text = $('#text_question_delete').html();
        var dataString = 'ajax=find&id=' + id;
        // Consulta AJAX a la base de datos de un evento específico.
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            dataType: 'json',
            success: function(data){
                console.log(data);
                $('#text_question_delete').html(text.replace('\"evento\"', '\"' + data[3] + '\"'));
                $('#button_delete_event').data('id', data[0]);
            }
        });
    });
    
    //Eliminar evento (elimina su fotografía)
    $(document).on('click', '#button_delete_event', function(event){
        event.preventDefault();
        var id = $(this).data('id');        
        var dataString = 'ajax=delete&id=' + id;
        
        //Función Ajax para la actualización. 
        //Si la eliminacion es exitosa modifica los datos de la tabla
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            success: function(result){
                if(result === "success"){
                    alert("Evento eliminado.");
                }
                else{
                    alert("Ha ocurrido un error");
                }
            }
        });
        
        $('#events-delete-modal').modal("toggle");
    });
    
    $(document).on('hidden.bs.modal', "#events-delete-modal", function(){
        $('#text_question_delete').html('¿Desea eliminar el evento \"evento\"?');
    });
    
    //Al cerrar el modal se vuelve a realizar una búsqueda
    $(document).on('hidden.bs.modal', "#events-delete-modal", function(){
        buscarResultados(formFecha, formDeporte, 1);
    });
});