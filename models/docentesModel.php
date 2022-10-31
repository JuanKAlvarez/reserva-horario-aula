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

    protected static function listarDocente(){
        $con = new PDODB();
        $res = $con->connect()->prepare('SELECT * FROM tbl_docentes ORDER BY id DESC');
        $res->execute();
        $data = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            array_push($data , $row);
        }
        return $data;
    }

    protected static function borrarDocente(int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('DELETE FROM tbl_docentes WHERE id = :idRegistro');
        $res->bindParam(':idRegistro'  , $idRegistro );
        $res->execute();
        return $res;
    }

    protected static function editarDocente(docentesController $docente, int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('UPDATE tbl_docentes 
                                        SET nombres   = :nombres, 
                                            apellidos = :apellidos, 
                                            correo    = :correo, 
                                            telefono  = :telefono 
                                        WHERE id = :idRegistro');
        $res->bindParam(':nombres'    , $docente->nombres  );
        $res->bindParam(':apellidos'  , $docente->apellidos);
        $res->bindParam(':correo'     , $docente->correo   );
        $res->bindParam(':telefono'   , $docente->telefono );
        $res->bindParam(':idRegistro' , $idRegistro );
        $res->execute();
        return $res;
        
    }
    
    
    
}