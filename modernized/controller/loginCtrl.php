<?php
require_once '../model/loginModel.php';
/**
 * Description of loginCtrl
 *
 * @author Manuel-IT
 */
class loginCtrl {
    //put your code here
    public function __construct(){}
    
    public function login($usuario, $password) {
        $model = new loginModel();
        $result = $model->login($usuario, $password);

        if($result){
            $_SESSION['user'] = $usuario;
            echo 'success';
        }
        else{
            echo 'invalid';
        }
    }
    
    public function logout(){
        session_destroy();
    }
}