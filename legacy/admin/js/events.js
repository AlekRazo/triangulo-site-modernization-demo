$(function(){
    formDeporte = "";
    formFecha = "";
    
    //Envio de datos del formulario de busqueda de eventos
    $("#form_buscar_resultados").submit(function(event){
        // cancels the form submission
        event.preventDefault();
        var deporte = $("#deporte_button_resultados").text();
        var fecha = $("#fecha_input_resultados").val();
        
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
            buscarResultados(fecha, deporte, 2);
            $("#fecha_input_resultados").trigger('reset');
            $("#deporte_button_resultados").html('Deporte <span class="caret"></span>');
        }
    });
    
    //Despliegue del modal del alta de resultados.
    $(document).on('show.bs.modal', "#results-modal", function(event){
        var id = $(event.relatedTarget).data('id'); // Extrae dato-id del botón.
        var dataString = 'ajax=find&id=' + id;
        // Consulta AJAX a la base de datos de un evento específico.
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            dataType: 'json',
            success: function(data){
                console.log(data);
                $('#title-result').text(data[3]);
                $('#input-result').val(data[6]);
                $('#update_result_button').data('id', data[0]);
                
                if(data[6]){
                    $("#update_result_button").html("Cambiar resultado");
                }
            }
        });
    });
    
    //Alta de resultados o modificación de los mismos.
    $(document).on('click', "#update_result_button", function(event){
        event.preventDefault();
        var id = $(this).data("id");
        var resultado = $('#input-result').val();
        var dataString = 'ajax=edit&id=' + id + '&resultado=' + resultado;
        
        //Función Ajax para la actualización. 
        //Si el resultado es exitoso modifica los datos de la tabla
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            success: function(result){
                if(result === "success"){
                    alert("Alta exitosa.");
                    $("#results-modal").modal("toggle");
                }
                else{
                    if(result === "fail"){
                        alert("Ha ocurrido un error");
                    }
                    else{
                        if(result === "invalid"){
                            alert("Por favor introduzca un resultado");
                        }
                    }
                }
            }
        });
    });
    
    //Carga de la tabla de datos despues de cerrar el modal
    $(document).on('hidden.bs.modal', "#results-modal", function(){
        buscarResultados(formFecha, formDeporte, 2);
    });
    
    //Cambio de opcion de deporte en el calendario
    $(document).on('click', ".dropdown-menu li a", function(){
        var seleccion = $(this).text();
        $(this).parents('.btn-group').find('.dropdown-toggle').html(seleccion+' <span class="caret"></span>');
    });
});