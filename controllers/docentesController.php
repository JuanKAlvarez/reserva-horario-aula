<?php
require_once "../models/docentesModel.php";

class docentesController extends docentesModel {
    public $nombres;
    public $apellidos;
    public $telefono;
    public $correo;

    public static function guardarDocente(docentesController $objDocente){
        return docentesModel::guardarDocente($objDocente);
    }

    public static function ListarDocente(){
        return docentesModel::listarDocente();
    }
    
    public static function borrarDocente(int $idRegistro){
        return docentesModel::borrarDocente($idRegistro);
    }

}