$(function(){    
    $(document).on('click', ".dropdown-menu-deporte li a", function(){
        var deporte = $(this).text();
        $(this).parents('.btn-group').find('.dropdown-toggle').html(deporte+' <span class="caret"></span>');
        var id = $(this).data('id'); // Extrae dato-id del botón.
        
        $("#hidden_deporte_nuevo").attr("value", id);
        var dataString = 'ajax=find&idDeporte=' + id;
        
        $("#button_categoria_nuevo").html('Categoria <span class="caret"></span>');
        $("#hidden_categoria_nuevo").attr("value", null);
        $(".dropdown-categoria-menu").empty();
        
        // Consulta AJAX a la base de datos de un evento específico.
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            dataType: 'json',
            success: function(data){
                console.log(data);
                
                //$( "<li><a data-id='8' href='#'>Ninguna</a></li>" ).appendTo( ".dropdown-categoria-menu" );
                
                //Llenar la lista con los elementos de la consulta en caso de que existan datos
                if(data){
                    $.each(data, function(i){
                        console.log(data[i]);
                        $( "<li><a data-id="+data[i].id+" href='#'>"+data[i].categoria+"</a></li>" ).appendTo(".dropdown-categoria-menu");
                    });
                }
            }
        });
    });
    
    $(document).on('click', "#dropdown_categoria_nuevo li a", function(){
        var categoria = $(this).text();
        $(this).parents('.btn-group').find('.dropdown-toggle').html(categoria+' <span class="caret"></span>');
        var id = $(this).data('id'); // Extrae dato-id del botón.
        
        $("#hidden_categoria_nuevo").attr("value", id);
    });
    
    $("#form_nuevo_evento").submit(function(event){
        event.preventDefault();
        var formData = new FormData($(this)[0]);        
        
        $.ajax({
            url: 'index.php',
            type: 'POST',
            data: formData,
            assync: false,
            success: function(data){
                if(data === "success"){
                    alert("Evento agregado exitosamente.");
                    window.history.back();
                }
                else{
                    alert(data);
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});