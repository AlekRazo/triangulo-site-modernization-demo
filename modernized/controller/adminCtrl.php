<?php
require_once '../model/findHomeModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminCtrl
 *
 * @author Manuel-IT
 */
class adminCtrl {
    public function __construct() {}
    
    public function load($fileName) {
        $fileParts = explode('.', $fileName);
        $extension = $fileParts[1];
        
        if($extension == "html"){
            $p = '../admin/modules/'.$fileName;
            $php = FALSE;
        }
        else{
            $p = '../admin/modules/'.$fileName;
            $php = TRUE;
        }
        
        if(is_readable($p) && $php ==FALSE){
            $content = file_get_contents($p);
        }
        elseif(is_readable($p) && $php ==TRUE){
            ob_start();
            include $p;
            $content = ob_get_clean();
        }
        else{
            $content = 'La pagina no existe o el archivo es ilegible';
        }
        
        include '../admin/admin.php';
    }
    
    public function loadInicio() {
        if(is_readable('../admin/modules/verinicio.php')){
            $find = new findHomeModel();
            $inicioDatos = $find->obtenerAnuncios("inicio");
                        
            if($inicioDatos != NULL){
                ob_start();
            }
            
            include '../admin/modules/verinicio.php';
            $content = ob_get_clean();
        }
        else{
            $content = 'La pagina no existe o el archivo es ilegible';
        }
        
        include '../admin/admin.php';
    }
    
    public function loadEventos() {
        if(is_readable('../admin/modules/vereventos.php')){
            $find = new findHomeModel();
            $eventoDatos = $find->obtenerAnuncios("eventoinicio");
                        
            if($eventoDatos != NULL){
                ob_start();
            }
            
            include '../admin/modules/vereventos.php';
            $content = ob_get_clean();
        }
        else{
            $content = 'La pagina no existe o el archivo es ilegible';
        }
        
        include '../admin/admin.php';
    }
    
    public function loadPromociones() {
        
        //Buscar datos
        
        if(is_readable('../admin/modules/verpromociones.php')){
            $find = new findHomeModel();
            $promocionDatos = $find->obtenerAnuncios("promocion");
            
            if($promocionDatos != NULL){
                ob_start();
            }
            
            include '../admin/modules/verpromociones.php';
            $content = ob_get_clean();
        }
        else{
            $content = 'La pagina no existe o el archivo es ilegible';
        }
        
        include '../admin/admin.php';
    }
}
