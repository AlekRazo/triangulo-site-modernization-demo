$(function(){
    //Despliegue del modal del eliminacion.
    $(document).on('show.bs.modal', "#panel-delete-modal", function(event){
        var id = $(event.relatedTarget).data('id'); // Extrae dato-id del botón.
        var section = $(event.relatedTarget).data('section');
        var text = $('#text_question_delete').html();
        
        var dataString = 'ajax=find-panel&id=' + id + '&section=' + section;
        // Consulta AJAX a la base de datos de un evento específico.
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            dataType: 'json',
            success: function(data){
                console.log(data);
                $('#text_question_delete').html(text.replace('\"anuncio\"', '\"' + data[1] + '\"'));
                $('#button_delete_panel').data('id', data[0]);
                $('#button_delete_panel').data('section', section);
            }
        });
    });
    
    //Eliminar evento (elimina su fotografía)
    $(document).on('click', '#button_delete_panel', function(event){
        event.preventDefault();
        var id = $(this).data('id');
        var section = $(this).data('section');
        var dataString = 'ajax=delete-panel&id=' + id + '&section=' + section;
        
        //Función Ajax para la actualización. 
        //Si la eliminacion es exitosa modifica los datos de la tabla
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            success: function(result){
                if(result === "success"){
                    alert("Evento eliminado.");
                    location.reload();
                }
                else{
                    alert("Ha ocurrido un error");
                }
            }
        });
        
        $('#panel-delete-modal').modal("toggle");
    });
    
    //Se restaura el mensaje de confirmacion en el modal
    $(document).on('hidden.bs.modal', "#panel-delete-modal", function(){
        $('#text_question_delete').html('¿Desea eliminar el anuncio \"anuncio\"?');
    });
    
    $('.js-toggle-status').change(function() {
        var id = $(this).data('id');
        var section = $(this).data('section');
        var estado = $(this).prop('checked')
        var dataString = 'ajax=edit-panel&id=' + id + '&section=' + section + '&estado=' + estado;
        
        //Función Ajax para la actualización. 
        //Si la eliminacion es exitosa modifica los datos de la tabla
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            success: function(result){
                if(result === "success"){
                    alert("Estado cambiado.");
                    location.reload();
                }
                else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
    
    //$(document).on('change', '.js-toggle-status', function(){
    //});
});


