/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    if ($(this).width() >= 480) {
        $(".js-menu-deportes").removeClass("col-xs-2-9").addClass("col-xs-1-9");
    }
    
    $('a[href^="#"]').on('click', function(event) {
        var target = $( $(this).attr('href') );
        
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
    
    $('.carousel').carousel({
        interval: 8000
    });
    
    $('.carousel').carousel({
        interval: 8000
    });
    
    $('.carousel').carousel({
        interval: 5000
    });
    
    $('.carousel').on('slid', function() {
        $('.carousel').carousel('pause');
    });
    
    $(window).resize(function() {
        if ($(this).width() >= 480) {
            $(".js-menu-deportes").removeClass("col-xs-2-8").addClass("col-xs-1-8");
            $(".js-img-deportes").removeClass("col-xs-2-8").addClass("col-xs-1-8");
        }
        if ($(this).width() < 480) {
            $(".js-menu-deportes").removeClass("col-xs-1-8").addClass("col-xs-2-8");
            $(".js-img-deportes").removeClass("col-xs-1-8").addClass("col-xs-2-8");
        }
    });
    
    $(document).on('click', ".js-buscar-eventos", function(){
        var dataString = 'ajax=find&deporte=' + $(this).data("id-deporte");
        
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            success: function(data){
                $('#result').html(data);
            }
        });
    });
    
    $(".js-buscar-eventos2").click(function(){
        //$('#result').html('<img src="' + global_data.theme + 'images/load16.gif" alt="procesando" title="procesando">');
        var dataString = 'ajax=find&deporte=' + $(this).data("id-deporte");
        
        $('#contenido').load('view/modules/viewCalendario.php');
        
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: dataString,
            success: function(data){ 
                $('#result').html(data);
            }
        });
    });
    
    $("#form_contacto").submit(function(event){
        // cancels the form submission
        event.preventDefault();
        submitForm();
    }); 
});

function submitForm(){
    // Initiate Variables With Form Content
    var nombre = $("#name").val();
    var correo = $("#email").val();
    var asunto = $("#subject").val();
    var mensaje = $("#message").val();
    
    $.ajax({
        type: "POST",
        url: "index.php",
        data: "name=" + nombre + "&email=" + correo + "&subject=" + asunto + "&message=" + mensaje,
        success : function(text){            
            if (text == "success"){
                $( "#msgSubmit" ).removeClass( "hidden" );
            }
            else {
                alert("Hubo un problema en el envío.");
            }
        }
    });
}