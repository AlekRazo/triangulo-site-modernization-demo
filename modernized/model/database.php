<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Manuel-IT
 */
class database {
    private $conexion = null;

    public function __construct() {
        $this->conectar();
    }

    public function __destruct() {
        if($this->conexion !== null) {
            $this->desconectar();
        }
    }
    
    /*
     * Conexion a la base de datos
     */
    public function conectar() {
        if($this->conexion === null){
            $this->conexion = new mysqli(
                Env::get('DB_HOST'),
                Env::get('DB_USER'),
                Env::get('DB_PASS'),
                Env::get('DATABASE')
            );

            if($this->conexion->connect_error){
                die($this->conexion->connect_error);
            }
            
            if (!$this->conexion->set_charset("utf8mb4")) {
                printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
                exit();
            }
        }
    }
    
    /*
     * Metodo para cerrar una conexion a la base de datos
     */
    public function desconectar() {
        $this->conexion->close();
    }
    
    /*
     * Metodo para realizar una consulta
     * @param $sql Consulta SQL Ej. 'SELECT * FROM tabla'
     */
    public function consulta($sql) {
        $resultado = $this->conexion->query($sql);
        
        if(!$resultado){
            echo $this->conexion->error;
            exit;
        }
        
        return $resultado;
    }

    /*
     * Metodo para obtener la cantidad de registros que se obtiene de una consulta 
     * @param $result 
     
    public function numero_de_filas($resultado) {
        return $resultado->num_rows;
    }*/
    
    /*
     * Devuelve un array asociativo que corresponde a la fila recuperada 
     * y mueve el puntero de datos interno hacia adelante
     
    public function fetch_assoc($resultado) {
        if(!is_resource($resultado)){
            return FALSE;
        }
        
        return $resultado->fetch_assoc();
    }*/
}