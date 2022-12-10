<?php
require_once "../models/reservasModel.php";

class reservasController extends reservasModel {
    public $fecha;
    public $docente;
    public $aula;
    public $horario;

    public static function guardarReserva(reservasController $objReserva){
        return reservasModel::guardarReserva($objReserva);
    }

    public static function ListarReserva(){
        return reservasModel::listarReserva();
    }
    
    public static function borrarReserva(int $idRegistro){
        return reservasModel::borrarReserva($idRegistro);
    }

    public static function editarReserva(reservasController $objReserva, int $idRegistro){
        return reservasModel::editarReserva($objReserva, $idRegistro);
    }

}