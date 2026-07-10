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
        $this->conectar();
        $query = $this->consulta("SELECT * FROM categoria WHERE idDeporte='$deporte'");
        
        if($query->num_rows > 0){
            while ($array = $query->fetch_assoc()) {
                $data[] = $array;
            }
            
            $this->desconectar();
            
            return $data;
        }
    }
    
    public function obtenerCategoria($categoria) {
        $this->conectar();
        $query = $this->consulta("SELECT categoria FROM categoria WHERE id='$categoria'");
        
        $data = $query->fetch_assoc();
        $this->desconectar();
        
        return $data['categoria'];
    }
    
    public function obtenerDeporte($deporte) {
        $this->conectar();
        $query = $this->consulta("SELECT deporte FROM deporte WHERE id='$deporte'");
        
        $data = $query->fetch_assoc();
        $this->desconectar();
        return $data['deporte'];
    }
    
    public function obtenerEventoPorID($id) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE id='$id'");
        
        if($query->num_rows > 0){
            $data = $query->fetch_row();
            $this->desconectar();
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorFecha($fecha) {
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE fechaEvento = '$fecha'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorDeporte($deporte) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE idDeporte='$deporte'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorCategoria($categoria) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE idCategoria='$categoria'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorFechaDeporte($fecha, $deporte) {
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE fechaEvento = '$fecha' AND idCategoria='$deporte'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosPorFechaCategoria($fecha, $categoria) {
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE fechaEvento = '$fecha' AND idDeporte='$deporte'");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesConCategorias($deporte, $categoria) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE idDeporte='$deporte' AND idCategoria='$categoria' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesPorDeporte($deporte) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE idDeporte='$deporte' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesPorCategoria($categoria) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE idCategoria='$categoria' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerEventosDelMesXolos() {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM evento WHERE nombre LIKE '%Xolos%' AND MONTH(fechaEvento) = MONTH(NOW())");
        
        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            return $data;
        }
        else{
            return NULL;
        }
    }
}