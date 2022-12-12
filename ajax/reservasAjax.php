<?php 

//echo json_encode(array('success' => 1));
//echo json_encode(array('datos' => 1));
//echo "Hola";

require_once "../controllers/reservasController.php";

$objReserva = new reservasController();

$method     = $_POST['method'];

switch ($method){
    case 'guardar':
        $dataForm   = $_POST['result'];
        $objReserva->fecha   = $dataForm["fecha"];
        $objReserva->horario = $dataForm["horario"];
        $objReserva->docente = $dataForm["docente"];
        $objReserva->materia = $dataForm["materia"];
        $objReserva->grupo   = $dataForm["grupo"];
        $objReserva->aula    = $dataForm["aula"];
        
        $res = $objReserva->guardarReserva($objReserva);
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
        $reservas ="'reservas'";
        $list =  $objReserva->ListarReserva();        
        $tabla = '';
        foreach ($list as $key ){
            $tabla .= '
                    <tr>
                        <td val = "'.$key['id'].'" id="id_'.$key['id'].'" >'.$key['id'].'</td>
                        <td val = "'.$key['fecha'].'" id="fecha_'.$key['id'].'" >'.$key['fecha'].'</td>
                        <td val = "'.$key['id_horario'].'" id="horario_'.$key['id'].'" >'.$key['horario'].'</td>
                        <td val = "'.$key['id_docente'].'" id="docente_'.$key['id'].'" >'.$key['docente'].'</td>
                        <td val = "'.$key['id_materia'].'" id="materia_'.$key['id'].'" >'.$key['materia'].'</td>
                        <td val = "'.$key['id_grupo'].'" id="grupo_'.$key['id'].'" >'.$key['grupo'].'</td>
                        <td val = "'.$key['id_aula'].'" id="aula_'.$key['id'].'" >'.$key['aula'].'</td>
                        <td>             
                            <button type="button" OnClick="editForm('.$reservas.', '.$key['id'].' )" class="btn btn-info btn-xs"> Editar </button>  
                            <button type="button" OnClick="deleteForm('.$reservas.', '.$key['id'].' )"   class="btn btn-danger btn-xs"> Eliminar </button>  
                        </td>
                    </tr>';
        }
        echo $tabla; 
        break;
    case 'listarCampo':
        $campo  = $_POST['campo'];
        $list   =  $objReserva->ListarReserva();        
        $campos = '';
        switch ($campo){

            case 'horario':

            break;
            case 'docente':

            break;
            case 'materia':

            break;
            case 'grupo':

            break;
            case 'aula':
                
            break;
        }        
        echo $campos; 
        break;
    case 'editar':
        $idRegistro   = $_POST['idRegistro'];
        $dataForm   = $_POST['result'];

        $objReserva->fecha   = $dataForm["fecha"];
        $objReserva->horario = $dataForm["horario"];
        $objReserva->docente = $dataForm["docente"];
        $objReserva->materia = $dataForm["materia"];
        $objReserva->grupo   = $dataForm["grupo"];
        $objReserva->aula    = $dataForm["aula"];

        $resp =  $objReserva->editarReserva($objReserva, $idRegistro);
        if ($resp) {
            echo "El registro se edito correctamente"; 
        } else {
            echo "El registro NO se Edito"; 
        }
        break;
    case 'eliminar':
        $idRegistro   = $_POST['idRegistro'];
        $resp =  $objReserva->borrarReserva($idRegistro);
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