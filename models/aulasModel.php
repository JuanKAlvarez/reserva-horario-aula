<?php

require_once "clsConexion.php";

class aulasModel extends PDODB{
    protected $numero;
    protected $bloque;
    protected $descripcion;

    
    protected static function guardarAula(aulasController $aula){
        $con = new PDODB();
        $res = $con->connect()->prepare('INSERT INTO tbl_aulas(numero,bloque,correo,descripcion) 
                                        Values(:numero, :bloque, :descripcion )');
        $res->bindParam(':numero'  , $aula->numero  );
        $res->bindParam(':bloque', $aula->bloque);
        $res->bindParam(':descripcion' , $aula->descripcion );
        $res->execute();
        return $res;

    }

    protected static function listarAula(){
        $con = new PDODB();
        $res = $con->connect()->prepare('SELECT * FROM tbl_aulas ORDER BY id DESC');
        $res->execute();
        $data = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            array_push($data , $row);
        }
        return $data;
    }

    protected static function borrarAula(int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('DELETE FROM tbl_aulas WHERE id = :idRegistro');
        $res->bindParam(':idRegistro'  , $idRegistro );
        $res->execute();
        return $res;
    }

    protected static function editarAula(aulasController $aula, int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('UPDATE tbl_aulas 
                                        SET numero      = :numero, 
                                            bloque      = :bloque, 
                                            descripcion = :descripcion 
                                        WHERE id        = :idRegistro');
        $res->bindParam(':numero'       , $aula->numero  );
        $res->bindParam(':bloque'       , $aula->bloque);
        $res->bindParam(':descripcion'  , $aula->descripcion );
        $res->bindParam(':idRegistro'   , $idRegistro );
        $res->execute();
        return $res;
        
    }
    
    
    
}