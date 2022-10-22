<?php
require_once "../controllers/docentesController.php";

$objDocente = new docentesController();
$method     = $_POST['method'];
$dataForm   = $_POST['result'];
$dataForm   = json_decode("$dataForm", true);

switch ($method){
    case 'guardar':
        $objDocente->nombres  = $dataForm["nombre"];
        $objDocente->apellido = $dataForm["apellido"];
        $objDocente->telefono = $dataForm["telefono"];
        $objDocente->correo   = $dataForm["correo"];
        $objDocente->guardarDocente($objDocente);

        break;
    default:
        #code
        break;
}