<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'database.php';

/**
 * Description of evento
 *
 * @author Manuel-IT
 */
class eventModel extends database{
    public function __construct() {
        
    }
    
    public function insertarEvento($idDeporte, $idCategoria, $nombre, $fecha, $descripcion, $imagen) {
        $this->conectar();
        return $this->consulta("INSERT INTO `evento` (`id`, `idDeporte`, `idCategoria`, `nombre`, `fechaEvento`, `descripcion`, `resultado`, `imagen`) VALUES (NULL, '$idDeporte', '$idCategoria', '$nombre', '$fecha', '$descripcion', NULL, '$imagen')");
    }
    
    public function modificarEvento($param) {
        $this->conectar();
        return $this->consulta("UPDATE evento SET resultado='$resultado' WHERE id='$id'");
    }
    
    public function borrarEvento($id) {
        $this->conectar();
        return $this->consulta("DELETE FROM evento WHERE id='$id'");
    }
    
    public function insertarResultado($id, $resultado) {
        $this->conectar();
        return $this->consulta("UPDATE evento SET resultado='$resultado' WHERE id='$id'");
    }
}