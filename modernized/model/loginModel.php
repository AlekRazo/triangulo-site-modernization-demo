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
class loginModel {
    //put your code here
    public function __construct() {}
    
    public function login($user, $pass) {
        $loginData = include '../config/access.php';
        if($user === $loginData["user"] && $pass === $loginData["password"]){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
