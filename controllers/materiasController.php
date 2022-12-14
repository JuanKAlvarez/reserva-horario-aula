<?php
require_once "../models/materiasModel.php";

class materiasController extends materiasModel {
    public $numero;
    public $bloque;
    public $descripcion;


    public static function guardarMateria(materiasController $objMateria){
        return materiasModel::guardarMateria($objMateria);
    }

    public static function ListarMateria(){
        return materiasModel::listarMateria();
    }
    
    public static function borrarMateria(int $idRegistro){
        return materiasModel::borrarMateria($idRegistro);
    }

    public static function editarMateria(materiasController $objMateria, int $idRegistro){
        return materiasModel::editarMateria($objMateria, $idRegistro);
    }

}