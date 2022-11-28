<?php
require_once "../models/aulasModel.php";

class aulasController extends aulasModel {
    public $numero;
    public $bloque;
    public $descripcion;


    public static function guardarAula(aulasController $objAula){
        return aulasModel::guardarAula($objAula);
    }

    public static function ListarAula(){
        return aulasModel::listarAula();
    }
    
    public static function borrarAula(int $idRegistro){
        return aulasModel::borrarAula($idRegistro);
    }

    public static function editarAula(aulasController $objAula, int $idRegistro){
        return aulasModel::editarAula($objAula, $idRegistro);
    }

}