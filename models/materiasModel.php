<?php

require_once "clsConexion.php";

class materiasModel extends PDODB{
    protected $numero;
    protected $bloque;
    protected $descripcion;

    
    protected static function guardarMateria(materiasController $materia){
        $con = new PDODB();
        $res = $con->connect()->prepare('INSERT INTO tbl_materias(numero,bloque,descripcion) 
                                        Values(:numero, :bloque, :descripcion )');
        $res->bindParam(':numero'  , $materia->numero  );
        $res->bindParam(':bloque', $materia->bloque);
        $res->bindParam(':descripcion' , $materia->descripcion );
        $res->execute();
        return $res;

    }

    protected static function listarMateria(){
        $con = new PDODB();
        $res = $con->connect()->prepare('SELECT * FROM tbl_materias ORDER BY id DESC');
        $res->execute();
        $data = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            array_push($data , $row);
        }
        return $data;
    }

    protected static function borrarMateria(int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('DELETE FROM tbl_materias WHERE id = :idRegistro');
        $res->bindParam(':idRegistro'  , $idRegistro );
        $res->execute();
        return $res;
    }

    protected static function editarMateria(materiasController $materia, int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('UPDATE tbl_materias 
                                        SET numero      = :numero, 
                                            bloque      = :bloque, 
                                            descripcion = :descripcion 
                                        WHERE id        = :idRegistro');
        $res->bindParam(':numero'       , $materia->numero  );
        $res->bindParam(':bloque'       , $materia->bloque);
        $res->bindParam(':descripcion'  , $materia->descripcion );
        $res->bindParam(':idRegistro'   , $idRegistro );
        $res->execute();
        return $res;
        
    }
    
    
    
}