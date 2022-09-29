<?php
require_once 'controllers/errorController.php';

class App { 

    function __construct(){
        
        $url = $_GET['url'];                    // Obtenemos la URL
        $url = rtrim($url , '/');               // Retirar / de la derecha
        $url = explode('/', $url);              // separa la URL por / convirtrirndolo en Array
        
        $archivoController = 'controllers/' . $url[0] . 'Controller.php';   // Obtiene el Nombre del Controlador 
                                                                            // desde  el primer parametro de la URL
        
        if (file_exists( $archivoController)) {  // valida la existencia del Controlador
            require_once $archivoController;     // importa el Aechivo del Controlador 
            $controller = new $url[0];           // instancia el controlador
        }else{
            $controller = new Error1();          // instancia el controlador de Error
        }
        
    }
    
}


?>