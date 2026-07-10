<?php
require_once 'database.php';
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
    public function login($user, $pass) {
        $query = $this->consulta("SELECT nombre, password FROM usuario WHERE nombre='$user'");

        if($query->num_rows > 0){
            $data = $query->fetch_assoc();
            
            if($user === $data["nombre"] && password_verify($pass, $data["password"])){
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
}
