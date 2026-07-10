<?php
require_once 'database.php';

/**
 * Description of panelModel
 *
 * @author Manuel-IT
 */
class panelModel extends database {
    private $seccion;
    
    public function __construct($seccion) {
        $this->seccion = $seccion;
    }
    
    public function insertarPanelInicio($nombre, $imagen) {
        $this->conectar();
        return $this->consulta("INSERT INTO " .$this->seccion. " (`id`, `descripcion`, `imagen`, `activo`) VALUES (NULL, '$nombre', '$imagen', '1')");
    }
    
    public function modificarPanelInicio($id, $descripcion, $imagen, $activo) {
        $this->conectar();
        return $this->consulta("UPDATE " .$this->seccion. " SET descripcion='$descripcion', imagen='$imagen', activo='$activo' WHERE id='$id'");
    }
    
    public function borrarPanelInicio($id) {
        $this->conectar();
        return $this->consulta("DELETE FROM " .$this->seccion. " WHERE id='$id'");
    }
    
    public function cambiarEstadoPanelInicio($id, $estado) {
        $this->conectar();
        return $this->consulta("UPDATE " .$this->seccion. " SET activo=" .$estado. " WHERE id='$id'");
    }
}
