<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pageCtrl
 *
 * @author Manuel-IT
 */
class pageCtrl {
    public function __construct() {}
    
    public function load($fileName) {
        $fileParts = explode('.', $fileName);
        $extension = $fileParts[1];
        
        if($extension == "html"){
            $p = 'view/modules/'.$fileName;
            $php = FALSE;
        }
        else{
            $p = 'view/modules/'.$fileName;
            $php = TRUE;
        }
        
        if(is_readable($p) && $php ==FALSE){
            $content = file_get_contents($p);
        }
        elseif(is_readable($p) && $php ==TRUE){
            ob_start();
            include $p;
            $content = ob_get_clean();
        }
        else{
            $content = 'La pagina no existe o el archivo es ilegible';
        }
        
        include 'view/principal.php';
    }
}
