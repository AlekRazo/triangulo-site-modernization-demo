<?php
require_once 'model/findModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of findCtrl
 *
 * @author Manuel-IT
 */
class findCtrl {
    public function __construct() {
    }
    
    public function buscarEventosDelMesConCategorias($deporte) {
        $find = new findModel();    
        
        $categorias = $find->obtenerCategorias($deporte);
        
        foreach ($categorias as $categoria) {
            $eventos = $find->obtenerEventosDelMesPorCategoria($categoria['id']);
            $liga = $categoria['categoria'];
            
            if($eventos != NULL){
                if(is_file('view/modules/lista.php')){
                    ob_start();
                    include 'view/modules/lista.php';
                    
                }
                else{
                    return 'Error: no existe el archivo [view/modules/lista.php]';
                }
            }
        }
        
        $lista = ob_get_clean();
        
        if(isset($lista) && $lista!= NULL){
            return $lista;
        }
        else{
            return "No existen eventos.";
        }
    }
    
    public function buscarEventosDelMesPorDeporte($deporte) {
        $find = new findModel();
        $eventos = $find->obtenerEventosDelMesPorDeporte($deporte);
        $liga = $find->obtenerDeporte($deporte);
        
        if($eventos != NULL){
            if(is_file('view/modules/lista.php')){
                ob_start();
                include 'view/modules/lista.php';
                $lista = ob_get_clean();
                
                return $lista;
            }
            else{
                return 'Error: no existe el archivo [view/modules/lista.php]';
            }
        }
        else{
            return 'No existen eventos';
        }
    }
    
    public function buscarEventosDelMesPorCategoria($categoria) {
        $find = new findModel();
        $eventos = $find->obtenerEventosDelMesPorCategoria($categoria);
        $liga = $find->obtenerCategoria($categoria);
        
        if($eventos != NULL){
            if(is_file('view/modules/lista.php')){
                ob_start();
                include 'view/modules/lista.php';
                $lista = ob_get_clean();
                
                return $lista;
            }
            else{
                return 'Error: no existe el archivo [view/modules/lista.php]';
            }
        }
        else{
            return 'No hay resultados';
        }
    }
    
    public function buscarEventosDelMesXolos() {
        $find = new findModel();
        $eventos = $find->obtenerEventosDelMesXolos();
        
        $liga = "XOLOS";
        
        if($eventos != NULL){
            if(is_file('view/modules/lista.php')){
                ob_start();
                include 'view/modules/lista.php';
                $lista = ob_get_clean();
                
                return $lista;
            }
            else{
                return 'Error: no existe el archivo [view/modules/lista.php]';
            }
        }
        else{
            return 'No hay resultados';
        }
    }
    
    //Convierte fecha de mysql a español
    
    public function cambiarFormatoDeFecha($fechadb){
        list($yy,$mm,$dd)=explode("-",$fechadb);
        $fecha = new DateTime();
        //definimos la fecha pasándole las variabes antes extraídas
        $fecha->setDate($yy, $mm, $dd);
        //y ahora el propio objeto nos permite definir el formato de fecha para imprimir que queramos       
        return $fecha->format('d/m/Y');
    }
}