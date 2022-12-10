<?php

require_once "clsConexion.php";

class reservasModel extends PDODB{
    protected $nombres;
    protected $apellidos;
    protected $telefono;
    protected $correo;
    
    protected static function guardarReserva(reservasController $reserva){
        $con = new PDODB();
        $res = $con->connect()->prepare('INSERT INTO tbl_reservas(nombres,apellidos,correo,telefono) 
                                        Values(:nombres, :apellidos, :correo, :telefono )');
        $res->bindParam(':nombres'  , $reserva->nombres  );
        $res->bindParam(':apellidos', $reserva->apellidos);
        $res->bindParam(':correo'   , $reserva->correo   );
        $res->bindParam(':telefono' , $reserva->telefono );
        $res->execute();
        return $res;

    }

    protected static function listarReserva(){
        $con = new PDODB();
        $res = $con->connect()->prepare('SELECT * FROM tbl_reservas ORDER BY id DESC');
        $res->execute();
        $data = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            array_push($data , $row);
        }
        return $data;
    }

    protected static function borrarReserva(int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('DELETE FROM tbl_reservas WHERE id = :idRegistro');
        $res->bindParam(':idRegistro'  , $idRegistro );
        $res->execute();
        return $res;
    }

    protected static function editarReserva(reservasController $reserva, int $idRegistro){
        $con = new PDODB();
        $res = $con->connect()->prepare('UPDATE tbl_reservas 
                                        SET nombres   = :nombres, 
                                            apellidos = :apellidos, 
                                            correo    = :correo, 
                                            telefono  = :telefono 
                                        WHERE id = :idRegistro');
        $res->bindParam(':nombres'    , $reserva->nombres  );
        $res->bindParam(':apellidos'  , $reserva->apellidos);
        $res->bindParam(':correo'     , $reserva->correo   );
        $res->bindParam(':telefono'   , $reserva->telefono );
        $res->bindParam(':idRegistro' , $idRegistro );
        $res->execute();
        return $res;
        
    }
    
    
    
}