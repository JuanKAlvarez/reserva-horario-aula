<?php 

//echo json_encode(array('success' => 1));
//echo json_encode(array('datos' => 1));
//echo "Hola";
// codigo
// nombre
// duracion_horas
// codigo, nombre, duracion_horas
require_once "../controllers/materiasController.php";

$objMateria = new materiasController();
$method     = $_POST['method'];

switch ($method){
    case 'guardar':
        $dataForm   = $_POST['result'];
        $objMateria->codigo          = $dataForm["codigo"];
        $objMateria->nombre          = $dataForm["nombre"];
        $objMateria->duracion_horas  = $dataForm["duracion_horas"];
        
        $res = $objMateria->guardarMateria($objMateria);
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
        $materias ="'materias'";
        $list =  $objMateria->ListarMateria();
        $tabla = '';
        foreach ($list as $key ){
            $tabla .= '
                    <tr>
                        <td val= "'.$key['id'].'" id="id_'.$key['id'].'" >'.$key['id'].'</td>
                        <td val= "'.$key['codigo'].'" id="codigo_'.$key['id'].'" >'.$key['codigo'].'</td>
                        <td val= "'.$key['nombre'].'" id="nombre_'.$key['id'].'" >'.$key['nombre'].'</td>
                        <td val= "'.$key['duracion_horas'].'" id="duracion_horas_'.$key['id'].'" >'.$key['duracion_horas'].'</td>
                        <td> 
                            <button type="button" OnClick="editForm('.$materias.', '.$key['id'].' )" class="btn btn-info btn-xs"> Editar </button>  
                            <button type="button" OnClick="deleteForm('.$materias.', '.$key['id'].' )"   class="btn btn-danger btn-xs"> Eliminar </button>  
                        </td>
                    </tr>';
        }
        echo $tabla; 
        break;
    case 'listarCampo':
        // $list =  $objMateria->ListarCampos();
        // $campos = '';
        // foreach ($list as $key ){
        //     $campos .= '<option value='. $key['id'].'>'. $key['id'].'</option>';
        // }
        $campo   = $_POST['campo'];
        $campos  = '';
        switch ($campo){
            case 'bloque':

            break;
        }        
        echo $campos; 
        break;
    case 'editar':
        $idRegistro   = $_POST['idRegistro'];
        $dataForm   = $_POST['result'];

        $objMateria->codigo   = $dataForm["codigo"];
        $objMateria->nombre = $dataForm["nombre"];
        $objMateria->duracion_horas  = $dataForm["duracion_horas"];

        $resp =  $objMateria->editarMateria($objMateria, $idRegistro);
        if ($resp) {
            echo "El registro se edito correctamente"; 
        } else {
            echo "El registro NO se Edito"; 
        }
        break;
    case 'eliminar':
        $idRegistro   = $_POST['idRegistro'];
        $resp =  $objMateria->borrarMateria($idRegistro);
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