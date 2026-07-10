<?php
/* ===[ manejo de variables ]=== */
/*
 * Manejo de variables, para el manejo de las solicitudes POST. y GET.
 */

if($_POST)
{
    if( isset( $_POST['ajax'] ) ){
        if( $_POST['ajax'] == 'find' ){
            include_once 'controller/findCtrl.php';
            $find = new findCtrl();
            //echo $find->buscarResultados($_POST['deporte']);
            
            $deporte = $_POST['deporte'];
            
            if($deporte == 1){
                echo $find->buscarEventosDelMesConCategorias($deporte);
            }
            
            if($deporte == 2 || $deporte == 3 || $deporte == 4 || $deporte == 5 || $deporte == 6){
                echo $find->buscarEventosDelMesPorDeporte($deporte);
            }
            
            
            // Buscar juegos de la Liga MX
            if($deporte == 8){
                echo $find->buscarEventosDelMesPorCategoria(2);
            }
            
            if($deporte == 9){
                echo $find->buscarEventosDelMesPorCategoria(9);
            }
            
            //Buscar juegos de Xolos
            
            if($deporte == 7){
                echo $find->buscarEventosDelMesXolos();
            }
        }
    }
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
        include_once 'controller/mailCtrl.php';
        $mail = new mailCtrl();
        $mail->enviarCorreo();
    }
}
else if($_GET)
{
    if(isset($_GET['load']) && isset($_GET['fileName'])){
        if(is_file('controller/'.$_GET['load'].'Ctrl.php')){
            include_once 'controller/'.$_GET['load'].'Ctrl.php';
            $page = new pageCtrl();
            $page->load($_GET['fileName']);
        }
        else {
            echo 'Error en la carga de la página';
        }
    }
}
else
{
    include_once 'controller/homeCtrl.php';
    $home = new homeCtrl();
    $home->load();
}