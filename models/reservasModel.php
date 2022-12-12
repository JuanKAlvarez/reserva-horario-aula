<?php

require_once "clsConexion.php";

class reservasModel extends PDODB{
    protected $nombres;
    protected $apellidos;
    protected $telefono;
    protected $correo;
    
    protected static function guardarReserva(reservasController $reserva){
        $con = new PDODB();
        $res = $con->connect()->prepare('INSERT INTO tbl_reservas(fecha, horario_id, docente_id, materia_id, grupo_id, aula_id) 
                                        Values(:fecha, :horario, :docente, :materia, :grupo, :aula)');
        $res->bindParam(':fecha'  , $reserva->fecha);
        $res->bindParam(':horario', $reserva->horario);
        $res->bindParam(':docente', $reserva->docente);
        $res->bindParam(':materia', $reserva->materia);
        $res->bindParam(':grupo'  , $reserva->grupo);
        $res->bindParam(':aula'   , $reserva->aula);
        $res->execute();
        return $res;

    }

    protected static function listarReserva(){
        $con = new PDODB();
        $esp =" ";
        $res = $con->connect()->prepare('SELECT r.id,  
                                                r.fecha, 
                                                h.hora As horario, h.id as id_horario, 
                                                CONCAT(d.nombres, :esp , d.apellidos) As docente, d.id As id_docente,
                                                m.nombre As materia, m.id As id_materia,
                                                g.codigo As grupo, g.id As id_grupo,
                                                a.descripcion As aula, a.id As id_aula
                                        FROM tbl_reservas as r 
                                            JOIN tbl_horarios as h On r.id = h.id 
                                            JOIN tbl_docentes as d On r.id = d.id 
                                            JOIN tbl_materias as m On r.id = m.id 
                                            JOIN tbl_grupos as g On r.id = g.id 
                                            JOIN tbl_aulas as a On r.id = a.id 
                                        ORDER BY r.id DESC');
        $res->bindParam(':esp'  , $esp);
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