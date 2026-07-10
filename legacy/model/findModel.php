<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'database.php';

/**
 * Description of findModel
 *
 * @author Manuel-IT
 */
class findModel extends database{
    
    public function obtenerCategorias($deporte) {
        $query = $this->consulta("SELECT * FROM categoria WHERE idDeporte='$deporte'");
        
        if($query->num_rows > 0){
            while ($array = $query->fetch_assoc()) {
                $data[] = $array;
            }

            return $data;
        }
    }
    
    public function obtenerCategoria($categoria) {
        $query = $this->consulta("SELECT categoria FROM categoria WHERE id='$categoria'");
        $data = $query->fetch_assoc();
        return $data['categoria'];
    }
    
    public function obtenerDeporte($deporte) {
        $query = $this->consulta("SELECT deporte FROM deporte WHERE id='$deporte'");
        $data = $query->fetch_assoc();
        return $data['deporte'];
    }
    
    public function obtenerEventoPorID($id) {
        $query = $this->consulta("SELECT * FROM evento WHERE id='$id'");
        
        if($query->num_rows > 0){
            $data = $query->fetch_row();

            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorFecha($fecha) {
        $query = $this->consulta("SELECT * FROM evento WHERE fechaEvento = '$fecha'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorDeporte($deporte) {
        $query = $this->consulta("SELECT * FROM evento WHERE idDeporte='$deporte'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorCategoria($categoria) {
        $query = $this->consulta("SELECT * FROM evento WHERE idCategoria='$categoria'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorFechaDeporte($fecha, $deporte) {
        $query = $this->consulta("SELECT * FROM evento WHERE fechaEvento = '$fecha' AND idCategoria='$deporte'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorFechaCategoria($fecha, $categoria) {
        $query = $this->consulta("SELECT * FROM evento WHERE fechaEvento = '$fecha' AND idDeporte='$deporte'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesConCategorias($deporte, $categoria) {
        $query = $this->consulta("SELECT * FROM evento WHERE idDeporte='$deporte' AND idCategoria='$categoria' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesPorDeporte($deporte) {
        $query = $this->consulta("SELECT * FROM evento WHERE idDeporte='$deporte' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesPorCategoria($categoria) {
        $query = $this->consulta("SELECT * FROM evento WHERE idCategoria='$categoria' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesXolos() {
        $query = $this->consulta("SELECT * FROM evento WHERE nombre LIKE '%Xolos%' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            return $data;
        }
        else{
            return NULL;
        }
    }
}