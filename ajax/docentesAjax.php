<?php
echo json_encode(array('resp' => 1));

// <?php
// echo json_encode(array('success' => 1));
// require_once "../controllers/docentesController.php";
// 
// $objDocente = new docentesController();
// $method     = $_POST['method'];
// $dataForm   = $_POST['result'];
// $dataForm   = json_decode("$dataForm", true);
// 
// switch ($method){
//     case 'guardar':
//         
//         $objDocente->nombres  = $dataForm["nombre"];
//         $objDocente->apellido = $dataForm["apellido"];
//         $objDocente->telefono = $dataForm["telefono"];
//         $objDocente->correo   = $dataForm["correo"];
//         $res = $objDocente->guardarDocente($objDocente);
//         //se puede devolver un Json para entregar notificaciones
//         if ($res) {
//             //echo "Guardado Correctamente";
//             echo json_encode(array('success' => 1));
//         } else {
//             //echo "No se Guardo Correctamente";
//             echo json_encode(array('success' => 0));
//         }
//         // nos quedamos en el  minuto 21:39 del video
//         break;
//     default:
//         #code
//         break;
// }