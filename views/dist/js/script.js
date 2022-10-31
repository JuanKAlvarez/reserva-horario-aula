window.onload = function () {
    ch('views/pages/docentes.php');
} 

const saveForm =  (parForm)  =>  {
    let dataForm = formatJson();
    let ruta = obtenerRuta(parForm);
    $.ajax({
        type    : "POST",
        url     : ruta,
        // dataType: "json",
        data    : {
            method  : 'guardar',
            result  : JSON.parse(dataForm)          
        },
        success : function(resp){
            alert(resp);
        } 
    });
    listTabla(parForm);
    const formulario = document.getElementById("Formulario");
    formulario.reset();
    
}

const listTabla =  (parTabla )  =>  {
    let ruta = obtenerRuta(parTabla);
    $.ajax({
        type    : "POST",
        url     : ruta,
        data    : { 'method'  : 'listar' },
        success : function(resp){
            $('tbody').text('');
            $('tbody').html(resp);
        } 
    });
    
}

const deleteForm =  (parTabla, parId )  =>  {
    let ruta = obtenerRuta(parTabla);
    $.ajax({
        type    : "POST",
        url     : ruta,
        data    : { 
            'method'      : 'eliminar', 
            'idRegistro'  : parId  
        },
        success : function(resp){
            alert(resp);
            listTabla(parTabla);
        } 
    });
    
}

const editForm =  (parForm, parId )  =>  {
    let ruta = obtenerRuta(parForm);

    const formulario = document.getElementById("Formulario");
    const btnGuardar = document.getElementById("guardar");
    const btnLimpiar = document.getElementById("limpiar");

    $nombres   = 'nombres_'   + parId;
    $apellidos = 'apellidos_' + parId;
    $correo    = 'correo_'    + parId;
    $telefono  = 'telefono_'  + parId;
    
    document.getElementById('nombres').value   = document.getElementById($nombres).innerText;
    document.getElementById('apellidos').value = document.getElementById($apellidos).innerText;
    document.getElementById('correo').value    = document.getElementById($correo).innerText;
    document.getElementById('telefono').value  = document.getElementById($telefono).innerText;

    btnGuardar.removeAttribute("Onclick");
    btnGuardar.setAttribute("Onclick", `editarRegistro('${parForm}',${parId})`);
    btnLimpiar.setAttribute("Onclick", `cancelarEditar('${parForm}')`);
    btnGuardar.innerHTML  = "Editar";
    btnLimpiar.innerHTML  = "Cancelar";
}

const editarRegistro = (parForm, parId) => {
    let dataForm = formatJson();
    let ruta = obtenerRuta(parForm);
    $.ajax({
        type    : "POST",
        url     : ruta,
        data    : { 
            'method'      : 'editar', 
            'idRegistro'  : parId ,
            'result'      : JSON.parse(dataForm)   
        },
        success : function(resp){
            alert(resp);
            listTabla(parForm);
        } 
    });
    const formulario = document.getElementById("Formulario");
    formulario.reset(); 
    cancelarEditar(parForm); 
}

const cancelarEditar = (parForm) => {
    const btnGuardar = document.getElementById("guardar");
    const btnLimpiar = document.getElementById("limpiar");
    btnGuardar.removeAttribute("Onclick");
    btnLimpiar.removeAttribute("Onclick");
    btnGuardar.innerHTML  = "Guardar";
    btnLimpiar.innerHTML  = "Limpiar";
    btnGuardar.setAttribute("Onclick", `saveForm('${parForm}')`);

}

const formatJson = () => {
    const formulario = document.getElementById("Formulario");
    const datos = new FormData(formulario);
    const datosCompletos = Object.fromEntries(datos.entries());
    return JSON.stringify(datosCompletos)
}

const obtenerRuta = (parForm) => {
    
    let rutas = {
        docentes : "./ajax/docentesAjax.php" ,
        aulas    : "" ,
        eventos  : "" ,
        grupos   : "" ,
        materias : "" ,
        reservas : "" 
    };

    return rutas[parForm];
}

function ch(urlHijo) {
    $.ajax({
        type: "POST",
        url: urlHijo,
        data:{},
        success: function(datosP){
            $('#qa').html(datosP);
        }
    });
}