<?php
require_once 'model/findHomeModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of homeCtrl
 *
 * @author Manuel-IT
 */
class homeCtrl {
    public function __construct() {
        
    }
    
    public function load() {
        
        if(is_readable('view/modules/home.php')){
            $find = new findHomeModel();
            $eventoDatos = $find->obtenerAnunciosActivos("eventoinicio");
            $inicioDatos = $find->obtenerAnunciosActivos("inicio");
            $promocionDatos = $find->obtenerAnunciosActivos("promocion");
            
            $eventoCuenta = count($eventoDatos);
            $inicioCuenta = count($inicioDatos);
            $promocionCuenta = count($promocionDatos);
            
            if($eventoDatos != NULL || $inicioDatos != NULL || $promocionDatos != NULL){
                ob_start();
            }
            
            include 'view/modules/home.php';
            $content = ob_get_clean();
        }
        else{
            $content = 'La pagina no existe o el archivo es ilegible';
        }
        
        include 'view/principal.php';
    }
}