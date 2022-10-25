<?php
require_once "../models/docentesModel.php";

class docentesController extends docentesModel {
    public $nombre;
    public $apellido;
    public $telefono;
    public $correo;

    public function guardarDocente(docentesController $objDocente){

        return docentesModel::guardarDocente($objDocente);
 
    }

}