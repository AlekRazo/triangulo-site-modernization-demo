<?php
session_start();
require_once 'config/Env.php';
Env::load(__DIR__ . '/.env');

if($_SESSION){
    if($_POST){        
        if( isset( $_POST['ajax'] ) ){            
            if( $_POST['ajax'] == 'find' ){
                //Buscar evento por ID
                if(isset($_POST['id'])){
                    include_once '../controller/adminFindCtrl.php';
                    $find = new adminFindCtrl();
                    $id = $_POST['id'];
                    echo json_encode($find->buscarEventoPorID($id));
                }
                elseif(isset($_POST['idDeporte'])){
                    include_once '../controller/adminFindCtrl.php';
                    $find = new adminFindCtrl();
                    $id = $_POST['idDeporte'];
                    echo json_encode($find->buscarCategorias($id));
                }
                elseif(isset($_POST['accion'])){
                    include_once '../controller/adminFindCtrl.php';
                    $find = new adminFindCtrl();
                    //echo $find->buscarResultados($_POST['deporte']);
                    $fecha = @$_POST['fecha'];
                    $deporte = @trim($_POST['deporte']);
                    $accion = $_POST['accion'];
                    
                    //Si se introdujo deporte (independientemente de si hay fecha o no)
                    if(@isset($_POST['deporte']) || @$_POST['deporte'] != null){
                        switch ($deporte) {
                            case 'FIFA':
                                $deporte = 1;
                                break;

                            case "NFL":
                                $deporte = 2;
                                break;

                            case "MLB":
                                $deporte = 3;
                                break;

                            case "NBA":
                                $deporte = 4;
                                break;

                            case "Box":
                                $deporte = 5;
                                break;

                            case "UFC":
                                $deporte = 6;
                                break;

                            case "Xolos":
                                $deporte = 7;
                                break;

                            case "Liga MX":
                                $deporte = 8;
                                break;

                            default:
                                $deporte = 0;
                                break;
                        }

                        //Si no es introdujo fecha
                        if(!isset($_POST['fecha'])){
                            if($deporte == 1 || $deporte == 2){
                                echo $find->buscarEventosPorDeporte($deporte, $accion);
                            }
                            elseif($deporte == 3 || $deporte == 4 || $deporte == 5 || $deporte == 6){
                                echo $find->buscarEventosPorDeporte($deporte, $accion);
                            }
                            elseif($deporte == 8){
                                // Buscar juegos de la Liga MX
                                echo $find->buscarEventosPorCategoria(2, $accion);
                            }

                            //Buscar juegos de Xolos

                            /*elseif($deporte == 7){
                                echo $find->buscarEventosXolos();
                            }*/
                        }
                        else{
                            //echo $find->buscarEventosPorDeporteFecha($deporte, $fecha, $accion);
                            if($deporte == 1 || $deporte == 2){
                                echo $find->buscarEventosPorFechaDeporte($deporte, $fecha, $accion);
                            }
                            elseif($deporte == 3 || $deporte == 4 || $deporte == 5 || $deporte == 6){
                                echo $find->buscarEventosPorFechaDeporte($deporte, $fecha, $accion);
                            }
                            elseif($deporte == 8){
                                // Buscar juegos de la Liga MX
                                echo $find->buscarEventosPorCategoriaFecha($deporte, $fecha, $accion);
//                                echo $find->buscarEventosPorCategoria(2, $accion);
                            }

                            //Buscar juegos de Xolos

                            /*elseif($deporte == 7){
                                echo $find->buscarEventosXolos();
                            }*/
                        }
                    }
                    else{
                        echo $find->buscarEventosPorFecha($fecha, $accion);
                    }
                }
            }
            elseif($_POST['ajax'] == 'find-panel'){
                if(isset($_POST['id']) && $_POST['section']){
                    include_once '../controller/adminFindCtrl.php';
                    $find = new adminFindCtrl();
                    $id = $_POST['id'];
                    $section = $_POST['section'];
                    echo json_encode($find->buscarAnuncioPorID($id, $section));
                }
            }
            elseif($_POST['ajax'] == 'edit'){
                if(isset($_POST['id'])){
                    include_once '../controller/eventCtrl.php';
                    $edit = new eventCtrl();
                    $id = $_POST['id'];
                    $resultado = $_POST['resultado'];
                    
                    echo $edit->agregarResultado($id, $resultado);
                }
            }
            elseif($_POST['ajax'] == 'edit-panel'){
                if(isset($_POST['id'])){
                    include_once '../controller/panelCtrl.php';
                    $edit = new panelCtrl();
                    $id = $_POST['id'];
                    $seccion = $_POST['section'];
                    $estado = $_POST['estado'];
                    
                    echo $edit->actualizarEstadoInicio($id, $seccion, $estado);
                }
            }
            elseif($_POST['ajax'] == 'insert-event'){
                include_once '../controller/eventCtrl.php';
                $insert = new eventCtrl();
                $idDeporte = $_POST['deporte'];
                $idCategoria = $_POST['categoria'];
                $nombre = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $descripcion = $_POST['descripcion'];
                $imagen = $_FILES['imagen']['name'];
                
                echo $insert->nuevoEvento($idDeporte, $idCategoria, $nombre, $fecha, $descripcion, $imagen);
            }
            elseif($_POST['ajax'] == 'insert-home'){
                include_once '../controller/panelCtrl.php';
                $insert = new panelCtrl();
                $nombre = $_POST['nombre'];
                $seccion = $_POST['seccion'];
                $imagen = $_FILES['imagen']['name'];
                
                echo $insert->nuevoAgregarInicio($nombre, $seccion, $imagen);
            }
            elseif($_POST['ajax'] == 'delete'){
                include_once '../controller/eventCtrl.php';
                $delete = new eventCtrl();
                $id = $_POST['id'];
                
                echo $delete->eliminarEvento($id);
            }
            elseif($_POST['ajax'] == 'delete-panel'){
                include_once '../controller/panelCtrl.php';
                $delete = new panelCtrl();
                $id = $_POST['id'];
                $section = $_POST['section'];
                
                echo $delete->eliminarInicio($id, $section);
            }
            else{
                //
            }
        }
    }
    elseif($_GET){
        if(isset($_GET['load']) && isset($_GET['fileName'])){
            if($_GET['fileName'] == "logout.php"){
                include_once '../controller/loginCtrl.php';
                $logout = new loginCtrl();
                $logout->logout();
                header("location: index.php"); 
            }
            if($_GET['fileName'] == "inicio.php"){
                include_once '../controller/inicioCtrl.php';
                $page = new inicioCtrl();
                echo $page->load();
            }
            elseif($_GET['fileName'] == "verinicio.php"){
                include_once '../controller/adminCtrl.php';
                $page = new adminCtrl();
                $page->loadInicio();
            }
            elseif($_GET['fileName'] == "vereventos.php"){
                include_once '../controller/adminCtrl.php';
                $page = new adminCtrl();
                $page->loadEventos();
            }
            elseif($_GET['fileName'] == "verpromociones.php"){
                include_once '../controller/adminCtrl.php';
                $page = new adminCtrl();
                $page->loadPromociones();
            }
            elseif(is_file('../controller/'.$_GET['load'].'Ctrl.php')){
                include_once '../controller/'.$_GET['load'].'Ctrl.php';
                $page = new adminCtrl();
                $page->load($_GET['fileName']);
            }
            else {
                echo 'Error en la carga de la página';
            }
        }
    }
    else{
        include_once '../controller/inicioCtrl.php';
        $page = new inicioCtrl();
        echo $page->load();
    }
}
else {
    if($_POST){
        if(isset($_POST['user']) && isset($_POST['pass']) ){
            include_once '../controller/loginCtrl.php';
            $login = new loginCtrl();
            $login->login($_POST['user'], $_POST['pass']);
        }
    }
    else{
        header('location: login.php');
        //include_once '../controller/adminCtrl.php';
        //$pagina = new adminCtrl();
        //$pagina->load("dashboard.php");
    }
}