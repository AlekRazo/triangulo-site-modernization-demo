<?php

require_once '../model/eventModel.php';
require_once '../model/findModel.php';
/**
 * Description of eventsCtrl
 *
 * @author Manuel-IT
 */
class eventCtrl {
    public function __construct() {
        
    }
    
    public function nuevoEvento($idDeporte, $idCategoria, $nombre, $fecha, $descripcion, $imagen){
        //Si la carga no produce error alguno
        if($_FILES['imagen']['error'] > 0){            
            if($_FILES['imagen']['name'] == "" || $_FILES['imagen']['name'] == NULL){
                return 'Inserte una imagen.';
            }
            elseif($_FILES['imagen']['error'] == 1){
                return 'El tamaño de la imagen supera el límite permitido';
            }
            else{
                return 'Se ha producido un error en la imagen.';
            }
        }
        else{
            $tipoArchivo = array("image/jpg", "image/jpeg", "image/gif", "image/png");
            
            //Si el archivo es del tipo permitido
            if(in_array($_FILES['imagen']['type'], $tipoArchivo)){
                $ruta = "../view/img/uploads/" . $_FILES['imagen']['name'];
                
                if (!file_exists($ruta)){
                    //mover imagen a la carpeta
                    $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    
                    if($resultado){
                        $model = new eventModel();
                        $fecha = $this->cambiarFechaFormatoSQL($fecha);
                        if($model->insertarEvento($idDeporte, $idCategoria, $nombre, $fecha, $descripcion, $imagen)){
                            return 'success';
                        }
                        else{
                            return 'invalid';
                        }
                    }
                }
                else{
                    //O modificar el archivo
                    return $_FILES['imagen']['name'].' ya existe';
                }
            }
            else{
                return "Solo se permite imágenes";
            }
        }
    }
    
    public function eliminarEvento($id) {
        $find = new findModel();
        $data = $find->obtenerEventoPorID($id);
        $imagen = "../view/img/uploads/" . $data["7"];
        
        $model = new eventModel();
        if($model->borrarEvento($id)){
            unlink($imagen);
            return "success";
        }
        else{
            return "error";
        }
    }
    
    public function agregarResultado($id, $resultado) {
        if(!$resultado){
            return "invalid";
        }
        else{
            $model = new eventModel();
            if($model->insertarResultado($id, $resultado)){
                return "success";
            }
            else{
                return "error";
            }
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