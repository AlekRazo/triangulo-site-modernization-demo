<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mailCtrl {
    public function __construct() {
    }
    
    public function enviarCorreo() {  
        echo '<pre>';
        echo 'POST:';
        print_r($_POST);
        echo '</pre>';
                
        echo '<pre>';
        echo 'REQUEST:';
        print_r($_REQUEST);
        echo '</pre>';
          
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = isset($_POST['subject']) ? $_POST['subject'] : 'Sin asunto';
        $message = $_POST['message'];
        //$from = 'Demo Contact Form'; 
        $to = "ic.manuel.razo@gmail.com";
        $headers = 'From: '.$_REQUEST['email']. "\r\n" .
                    'Reply-To: '.$_REQUEST['email']. "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        $body = "Nombre: ";
        $body .= $name;
        $body .= "\n";

        $body .= "Email: ";
        $body .= $email;
        $body .= "\n";
        
        $body .= "Asunto: ";
        $body .= $subject;
        $body .= "\n";

        $body .= "Mensaje: ";
        $body .= $message;
        $body .= "\n";
        
        $success = mail($to, $subject, $body, $headers);
        /*echo $success;

        if($success){
            echo 'success';
        }
        else{
            error_get_last()
            echo error_get_last();
            echo $success;
        }*/

        if (!mail($to, $subject, $message, $headers)) {
            // 3. Extract the last recorded PHP error message
            $error = error_get_last();
            
            if ($error !== null) {
                echo "Mail failed with error: " . $error['message'];
            } else {
                echo "Mail failed, but no PHP error message was captured.";
            }
        } else {
            echo "Mail accepted by the local mail server.";
        }
    }
}