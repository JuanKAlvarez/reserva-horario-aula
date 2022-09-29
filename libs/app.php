<?php

class App { 

    function __construct(){
        
        $url = $_GET['url'];            // Obtenemos la URL
        $url = rtrim($url , '/');       // Retirar / de la derecha
        $url = explode('/', $url);      // separa la URL por / convirtrirndolo en Array

        var_dump($url);
        
        
    }
    
}


?>