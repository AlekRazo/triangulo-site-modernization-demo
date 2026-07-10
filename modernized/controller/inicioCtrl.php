<?php
require_once '../model/findHomeModel.php';

class inicioCtrl {
    public function __construct() {
        
    }
    
    public function load() {
        
        //Buscar datos
        
        if(is_readable('../admin/modules/inicio.php')){
            $find = new findHomeModel();
            $eventoDatos = $find->obtenerCincoAnuncios("eventoinicio");
            $inicioDatos = $find->obtenerCincoAnuncios("inicio");
            $promocionDatos = $find->obtenerCincoAnuncios("promocion");
            
            if($eventoDatos != NULL || $inicioDatos != NULL || $promocionDatos != NULL){
                ob_start();
            }
            
            include '../admin/modules/inicio.php';
            $content = ob_get_clean();
        }
        else{
            $content = 'La pagina no existe o el archivo es ilegible';
        }
        
        include '../admin/admin.php';
    }
}