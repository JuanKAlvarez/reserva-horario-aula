<?php

require_once "./clsConexion.php";

class docentesModel extends PDODB{
    private $nombres;
    private $apellidos;
    private $telefono;
    private $correo;
    
    protected function guardarDocente(docentesController $docente){
        $con = new PDODB();
        $res = $con->connect()->prepare('INSERT INTO tblDocentes Values(null, :nombre, :apellidos, :correo, :telefono )');
        $res->bindParam(':nombres'  , $docente->nombres  , PDO::PARAM_STR, 50);
        $res->bindParam(':apellidos', $docente->apellidos, PDO::PARAM_STR, 50);
        $res->bindParam(':telefono' , $docente->telefono , PDO::PARAM_STR, 60);
        $res->bindParam(':correo'   , $docente->correo   , PDO::PARAM_STR, 20);
        $res->execute();

    }
    
    
    
}