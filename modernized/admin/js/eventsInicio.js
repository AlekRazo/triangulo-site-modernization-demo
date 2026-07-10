$(function(){
    //Envío de los datos del formulario al servidor
    $('#form_panel_inicio').submit(function(event){
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
    
    
    $(document).on('click', "#dropdown_seccion_inicio li a", function(){
        var seccion = $(this).text();
        $(this).parents('.btn-group').find('.dropdown-toggle').html(seccion + ' <span class="caret"></span>');
        $("#hidden_seccion_inicio").attr("value", seccion.toLowerCase());
    });
    
    $(document).on('click', '#button-cancel', function(){
        window.history.back();
    });
    
    $(document).on('click', '#button-delete', function(){
        window.history.back();
    });
});