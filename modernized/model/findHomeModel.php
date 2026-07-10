<?php
require_once 'database.php';

/**
 * Description of findHomeModel
 *
 * @author Manuel-IT
 */
class findHomeModel extends database{    
    public function obtenerCincoAnuncios($seccion) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM " .$seccion. " LIMIT 5");
        
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
    
    public function obtenerAnuncios($seccion) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM " .$seccion);
        
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
    
    public function obtenerAnuncioPorID($id, $seccion) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM ".$seccion." WHERE id='$id'");
        
        if($query->num_rows > 0){
            $data = $query->fetch_row();
            $this->desconectar();
            return $data;
        }
        else{
            return NULL;
        }
    }
    
    public function obtenerAnunciosActivos($seccion) {        
        $this->conectar();
        $query = $this->consulta("SELECT * FROM ".$seccion ." WHERE activo = 1");
        
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
    
    public function obtenerCuentaAnunciosActivos($seccion) {        
        $this->conectar();
        $query = $this->consulta("SELECT COUNT(*) FROM ".$seccion ."WHERE activo = 1");
        
        if($query->num_rows > 0){
            $data = $query->fetch_row();
            $this->desconectar();
            return $data;
        }
        else{
            return NULL;
        }
    }
}
