<?php 

//echo json_encode(array('success' => 1));
//echo json_encode(array('datos' => 1));
//echo "Hola";

require_once "../controllers/docentesController.php";

$objDocente = new docentesController();
$method     = $_POST['method'];

switch ($method){
    case 'guardar':
        $dataForm   = $_POST['result'];
        $objDocente->nombres   = $dataForm["nombres"];
        $objDocente->apellidos = $dataForm["apellidos"];
        $objDocente->telefono  = $dataForm["telefono"];
        $objDocente->correo    = $dataForm["correo"];
        
        $res = $objDocente->guardarDocente($objDocente);
        //se puede devolver un Json para entregar notificaciones
        if ($res) {
            echo "Guardado Correctamente";
            //echo json_encode(array('success' => 1));
        } else {
            echo "No se Guardo Correctamente";
            //echo json_encode(array('success' => 0));
        }
        // nos quedamos en el  minuto 21:39 del video
        break;
    case 'listar':
        $comilla ="'";
        $list =  $objDocente->ListarDocente();
        $tabla = '';
        foreach ($list as $key ){
            $tabla .= '
                    <tr>
                        <td>'.$key['id'].'</td>
                        <td>'.$key['nombres'].'</td>
                        <td>'.$key['apellidos'].'</td>
                        <td>'.$key['correo'].'</td>
                        <td>'.$key['telefono'].'</td>
                        <td> 
                            <button type="button" OnClick="editForm('.$comilla.'docentes'.$comilla.' )" class="btn btn-info btn-xs"> Editar </button>  
                            <button type="button" OnClick="deleteForm('.$comilla.'docentes'.$comilla.', '.$key['id'].' )"   class="btn btn-danger btn-xs"> Eliminar </button>  
                        </td>
                    </tr>';
        }
        echo $tabla; 
        break;
    case 'eliminar':
        $idRegistro   = $_POST['idRegistro'];
        $resp =  $objDocente->borrarDocente($idRegistro);
        if ($resp) {
            echo "El registro Se elimino correctamente"; 
        } else {
            echo "El registro NO se Elimino"; 
        }
        break;
        default:
            echo "Seleccione un Método Correcto"; 
        break;
}