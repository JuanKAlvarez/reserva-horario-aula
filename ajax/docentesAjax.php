<?php 
require_once "../controllers/docentesController.php";

//Variables Globales
$method;
$idRegistro;
$dataForm;
$fields;
$objDocente = new docentesController();

// Obtiene las variables que fueron enviadas por POST
getPost();


switch ($method){
    case 'guardar':
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
        $arrFields = array();
        $arrFields = explode(",", $fields);

        $docentes ="'docentes'";
        $list =  $objDocente->ListarDocente();
        
        $tabla = '';
        $tabla .= ' <tr> ';

        foreach ($list as $key ){
            $tabla .= ' <td val = "'.$key['id'].'" id="id_'.$key['id'].'" >'.$key['id'].'</td> ';
            for ($i=0; $i < count($arrFields) ; $i++) { 
                $field = $arrFields[$i];
                $value = $key[$field];
                $id_   = $field.'_'.$key['id'];
                $tabla .= '<td val = "'.$value.'" id="'.$id_.'" >'.$value.'</td>';
            }
            
            $tabla .= ' <td> 
                            <button type="button" OnClick="editForm('.$docentes.', '.$key['id'].' )" class="btn btn-info btn-xs"> Editar </button>  
                            <button type="button" OnClick="deleteForm('.$docentes.', '.$key['id'].' )"   class="btn btn-danger btn-xs"> Eliminar </button>  
                        </td>
                    </tr>';
        }
        
        echo $tabla; 
        break;

    case 'editar':
        $resp =  $objDocente->editarDocente($objDocente, $idRegistro);
        if ($resp) {
            echo "El registro se edito correctamente"; 
        } else {
            echo "El registro NO se Edito"; 
        }
        break;

    case 'eliminar':
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

function getPost() {
    global $method ;
    global $idRegistro;
    global $dataForm;
    global $fields;

    if (isset($_POST['method'])) {
        $method = $_POST['method'];
    }

    if (isset($_POST['idRegistro'])) {
        $idRegistro = $_POST['idRegistro'];
    }
    
    if (isset($_POST['fields'])) {
        $fields = $_POST['fields'];
    }

    if (isset($_POST['result'])) {
        $dataForm = $_POST['result'];
        fillControllerVariables();
    }

}

function fillControllerVariables() {
    global $objDocente;
    global $dataForm;

    $objDocente->nombres   = $dataForm["nombres"];
    $objDocente->apellidos = $dataForm["apellidos"];
    $objDocente->telefono  = $dataForm["telefono"];
    $objDocente->correo    = $dataForm["correo"];
}