<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginModel
 *
 * @author Manuel-IT
 */
class loginModel extends database {
    //put your code here
    public function __construct() {}
    
    public function login($user, $pass) {
        $this->conectar();
        $query = $this->consulta("SELECT nombre, password FROM usuarios WHERE nombre='$user');

        if($query->num_rows > 0){
            while ($fetchData = $query->fetch_assoc()){
                $data[] = $fetchData;
            }
            
            $this->desconectar();
            
            if($user === $data["nombre"] && password_verify($password, $data["password"])){
                return TRUE;
            }
            else{
                return FALSE;
            }
            
        }
        else{
            return FALSE;
        }
    }

    //Comentario de prueba

    /*
    public function login($user, $pass) {
        $loginData = include '../config/access.php';
        if($user === $loginData["user"] && $pass === $loginData["password"]){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }*/
}
