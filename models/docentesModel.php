<?php

require_once "clsConexion.php";

class docentesModel extends PDODB{
    protected $nombres;
    protected $apellidos;
    protected $telefono;
    protected $correo;
    
    protected static function guardarDocente(docentesController $docente){
        $con = new PDODB();
        $res = $con->connect()->prepare('INSERT INTO tbl_docentes(nombres,apellidos,correo,telefono) 
                                        Values(:nombres, :apellidos, :correo, :telefono )');
        $res->bindParam(':nombres'  , $docente->nombres  );
        $res->bindParam(':apellidos', $docente->apellidos);
        $res->bindParam(':correo'   , $docente->correo   );
        $res->bindParam(':telefono' , $docente->telefono );
        $res->execute();
        return $res;

    }
    
    
    
}