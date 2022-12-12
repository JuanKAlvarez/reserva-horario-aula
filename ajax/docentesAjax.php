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
        $docentes ="'docentes'";
        $list =  $objDocente->ListarDocente();
        $tabla = '';
        foreach ($list as $key ){
            $tabla .= '
                    <tr>
                        <td val = "'.$key['id'].'" id="id_'.$key['id'].'" >'.$key['id'].'</td>
                        <td val = "'.$key['nombres'].'" id="nombres_'.$key['id'].'" >'.$key['nombres'].'</td>
                        <td val = "'.$key['apellidos'].'" id="apellidos_'.$key['id'].'" >'.$key['apellidos'].'</td>
                        <td val = "'.$key['correo'].'" id="correo_'.$key['id'].'" >'.$key['correo'].'</td>
                        <td val = "'.$key['telefono'].'" id="telefono_'.$key['id'].'" >'.$key['telefono'].'</td>
                        <td> 
                            <button type="button" OnClick="editForm('.$docentes.', '.$key['id'].' )" class="btn btn-info btn-xs"> Editar </button>  
                            <button type="button" OnClick="deleteForm('.$docentes.', '.$key['id'].' )"   class="btn btn-danger btn-xs"> Eliminar </button>  
                        </td>
                    </tr>';
        }
        echo $tabla; 
        break;
    case 'editar':
        $idRegistro   = $_POST['idRegistro'];
        $dataForm   = $_POST['result'];

        $objDocente->nombres   = $dataForm["nombres"];
        $objDocente->apellidos = $dataForm["apellidos"];
        $objDocente->telefono  = $dataForm["telefono"];
        $objDocente->correo    = $dataForm["correo"];

        $resp =  $objDocente->editarDocente($objDocente, $idRegistro);
        if ($resp) {
            echo "El registro se edito correctamente"; 
        } else {
            echo "El registro NO se Edito"; 
        }
        break;
    case 'eliminar':
        $idRegistro   = $_POST['idRegistro'];
        $resp =  $objDocente->borrarDocente($idRegistro);
        if ($resp) {
            echo "El registro se elimino correctamente"; 
        } else {
            echo "El registro NO se Elimino"; 
        }
        break;
        default:
            echo "Seleccione un Método Correcto"; 
        break;
}