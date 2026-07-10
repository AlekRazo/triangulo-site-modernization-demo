<?php
require_once '../model/panelModel.php';
require_once '../model/findHomeModel.php';

/**
 * Description of panelCtrl
 *
 * @author Manuel-IT
 */
class panelCtrl {
    public function __construct() {
    }
    
    public function nuevoAgregarInicio($nombre, $seccion, $imagen) {
        //Si la carga no produce error alguno
        if($_FILES['imagen']['error'] > 0){            
            if($_FILES['imagen']['name'] == "" || $_FILES['imagen']['name'] != NULL){
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
                switch ($seccion) {
                    case "inicio":
                        $folder = "carousel-inicio";
                        break;
                    
                    case "eventos":
                        $folder = "carousel-eventos";
                        $seccion = "eventoinicio";
                        break;
                    
                    case "promociones":
                        $folder = "carousel-promociones";
                        $seccion = "promocion";
                        break;
                    
                    default:
                        break;
                }
                
                $ruta = "../view/img/" . $folder . "/" . $_FILES['imagen']['name'];
                
                if (!file_exists($ruta)){
                    //mover imagen a la carpeta
                    $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    
                    if($resultado){
                        $model = new panelModel($seccion);
                        if($model->insertarPanelInicio($nombre, $imagen)){
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
    
    public function eliminarInicio($id, $seccion) {
        switch ($seccion) {
            case '1':
                $seccion = "inicio";
                $folder = "carousel-inicio";
                break;
            case '2':
                $seccion = "eventoinicio";
                $folder = "carousel-eventos";
                break;
            case '3':
                $seccion = "promocion";
                $folder = "carousel-promociones";
                break;
            default:
                break;
        }
        
        $find = new findHomeModel();
        $delete = new panelModel($seccion);
        $anuncio = $find->obtenerAnuncioPorID($id, $seccion);
        $imagen = "../view/img/". $folder ."/" . $anuncio["2"];
        
        if($delete->borrarPanelInicio($id)){
            unlink($imagen);
            return "success";
        }
        else {
            return "error";
        }
    }
    
    public function actualizarEstadoInicio($id, $seccion, $estado){
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
        
        $update = new panelModel($seccion);
        
        if($update->cambiarEstadoPanelInicio($id, $estado)){
            return "success";
        }
        else {
            return "error";
        }
    }
}