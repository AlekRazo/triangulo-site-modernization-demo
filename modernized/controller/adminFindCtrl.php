<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/findModel.php';
require_once '../model/findHomeModel.php';
/**
 * Description of adminFindCtrl
 *
 * @author Manuel-IT
 */
class adminFindCtrl {
    public function __construct() {
    }
    
    public function buscarCategorias($idDeporte) {
        $find = new findModel();
        return $find->obtenerCategorias($idDeporte);
    }
    
    public function buscarEventoPorID($id) {
        $find = new findModel();
        $evento = $find->obtenerEventoPorID($id);
        
        if($evento != NULL){
            return $evento;
        }
        else{
            return 'No hay resultados';
        }
    }
    
    public function buscarEventosPorFecha($fecha, $accion) {
        $find = new findModel();
        $eventos = $find->obtenerEventosPorFecha($this->cambiarFechaFormatoSQL($fecha));
        
        //Accion
        //1 = Busqueda en calendario
        //2 = Busqueda en los resultados
        return $this->render($eventos, $accion);
    }
    
    public function buscarEventosPorDeporte($deporte, $accion) {
        $find = new findModel();
        $eventos = $find->obtenerEventosPorDeporte($deporte);
        
        //Accion
        //1 = Busqueda en calendario
        //2 = Busqueda en los resultados
        return $this->render($eventos, $accion);
    }
    
    public function buscarEventosPorCategoria($categoria, $accion) {
        $find = new findModel();
        $eventos = $find->obtenerEventosPorCategoria($categoria);
        $liga = $find->obtenerCategoria($categoria);
        
        //Accion
        //1 = Busqueda en calendario
        //2 = Busqueda en los resultados
        return $this->render($eventos, $accion);
    }
    
    public function buscarEventosPorFechaDeporte($fecha, $deporte, $accion){
        $find = new findModel();
        $eventos = $find->obtenerEventosPorFechaDeporte($fecha, $deporte);
        //1 = Busqueda en calendario
        //2 = Busqueda en los resultados
        return $this->render($eventos, $accion);
    }
    
    public function buscarEventosPorFechaCategoria($fecha, $categoria, $accion){
        $find = new findModel();
        $eventos = $find->obtenerEventosPorFechaCategoria($fecha, $categoria);
        //1 = Busqueda en calendario
        //2 = Busqueda en los resultados
        return $this->render($eventos, $accion);
    }
    
    public function buscarAnuncioPorID($id, $seccion) {
        $find = new findHomeModel();
        switch ($seccion) {
            case '1':
                $seccion = "inicio";
                break;
            case '2':
                $seccion = "eventoinicio";
                break;
            case '3':
                $seccion = "promocion";
                break;
            default:
                break;
        }
        
        $anuncios = $find->obtenerAnuncioPorID($id, $seccion);
        return $anuncios;
    }
    
    private function render($datos, $accion) {
        if($datos != NULL){
            if($accion == 1){
                $file = 'modules/tablaCalendario.php';
            }
            if ($accion == 2){
                $file = 'modules/tablaResultados.php';
            }
            if(is_file($file)){
                ob_start();
                include $file;
                $tabla = ob_get_clean();
                
                return $tabla;
            }
            else{
                return 'Error: no existe el archivo de tabla';
            }
        }
        else{
            return 'No hay resultados';
        }
    }
    
    private function cambiarFechaFormatoSQL($fechadb){
        list($dd,$mm,$yy)=explode("/",$fechadb);
        $fecha = new DateTime();
        //definimos la fecha pasándole las variabes antes extraídas
        $fecha->setDate($yy, $mm, $dd);
        //y ahora el propio objeto nos permite definir el formato de fecha para imprimir que queramos       
        return $fecha->format('Y-m-d');
    }
}