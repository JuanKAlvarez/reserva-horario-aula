<?php

require_once "./clsConexion.php";

class docentesModel{
    private $nombres;
    private $apellidos;
    private $telefono;
    private $correo;
    
    protected function guartdarDocente(obj $docente){
        $con = new PDODB();
        $con->connect();
        


        

    }
    
    
    
}