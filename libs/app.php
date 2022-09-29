<?php

class App { 

    function __construct(){
        
        $url = $_GET['url'];                // Obtenemos la URL
        $url = rtrim($url , '/');           // Retirar / de la derecha
        $url = explode('/', $url);          // separa la URL por / convirtrirndolo en Array
        
        $archivoController = 'controllers/' . $url[0] . 'Controller.php';   // Obtiene el Nombre del Controlador desde  el primer parametro de la URL
        
        require_once $archivoController;    // importa el Aechivo del Controlador 
        $controller = new $url[0];          // instancia el controlador
        
    }
    
}


?>