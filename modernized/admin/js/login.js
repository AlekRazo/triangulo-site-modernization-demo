$(document).ready(function(){
    $("#form_login").submit(function(event){
        event.preventDefault();
        
        var usuario = $("#inputEmail").val();
        var pass = $("#inputPassword").val();
        
        $.ajax({
            type: 'POST',
            url: "index.php",
            data: "user=" + usuario + "&pass=" + pass,
            success: function (result) {                
                if(result === "success"){
                    window.location.replace("index.php");
                }
                else{
                    alert("No existe el usuario o la contraseña no es correcta.");
                }
            }
        });
    });
});