<?php 

//echo json_encode(array('success' => 1));
//echo json_encode(array('datos' => 1));
//echo "Hola";

require_once "../controllers/aulasController.php";

$objAula = new aulasController();
$method     = $_POST['method'];

switch ($method){
    case 'guardar':
        $dataForm   = $_POST['result'];
        $objAula->numero   = $dataForm["numero"];
        $objAula->bloque = $dataForm["bloque"];
        $objAula->descripcion  = $dataForm["descripcion"];
        
        $res = $objAula->guardarAula($objAula);
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
        $aulas ="'aulas'";
        $list =  $objAula->ListarAula();
        $tabla = '';
        foreach ($list as $key ){
            $tabla .= '
                    <tr>
                        <td id="id_'.$key['id'].'" >'.$key['id'].'</td>
                        <td id="numero_'.$key['id'].'" >'.$key['numero'].'</td>
                        <td id="bloque_'.$key['id'].'" >'.$key['bloque'].'</td>
                        <td id="descripcion_'.$key['id'].'" >'.$key['descripcion'].'</td>
                        <td> 
                            <button type="button" OnClick="editForm('.$aulas.', '.$key['id'].' )" class="btn btn-info btn-xs"> Editar </button>  
                            <button type="button" OnClick="deleteForm('.$aulas.', '.$key['id'].' )"   class="btn btn-danger btn-xs"> Eliminar </button>  
                        </td>
                    </tr>';
        }
        echo $tabla; 
        break;
    case 'listarCampo':
        // $list =  $objAula->ListarCampos();
        // $campos = '';
        // foreach ($list as $key ){
        //     $campos .= '<option value='. $key['id'].'>'. $key['id'].'</option>';
        // }
        $campo   = $_POST['campo'];
        $campos  = '';
        switch ($campo){
            case 'bloque':
                $campos .= '<option value="A"> A </option>';
                $campos .= '<option value="B"> B </option>';
                $campos .= '<option value="C"> C </option>';
                $campos .= '<option value="D"> D </option>';
            break;
        }        
        echo $campos; 
        break;
    case 'editar':
        $idRegistro   = $_POST['idRegistro'];
        $dataForm   = $_POST['result'];

        $objAula->numero   = $dataForm["numero"];
        $objAula->bloque = $dataForm["bloque"];
        $objAula->descripcion  = $dataForm["descripcion"];

        $resp =  $objAula->editarAula($objAula, $idRegistro);
        if ($resp) {
            echo "El registro se edito correctamente"; 
        } else {
            echo "El registro NO se Edito"; 
        }
        break;
    case 'eliminar':
        $idRegistro   = $_POST['idRegistro'];
        $resp =  $objAula->borrarAula($idRegistro);
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