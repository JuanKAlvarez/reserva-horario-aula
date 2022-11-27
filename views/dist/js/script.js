window.onload = function () {
    ch('views/pages/dashboard.php');
} 

const saveForm = (parForm)  =>  {
    let dataForm = formatJson();
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

const listTabla = (parTabla )  =>  {
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

const deleteForm = (parTabla, parId )  =>  {
    if  (confirm("¿Desea ELIMINAR el registro " + parId + "?")) {
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
    
}

const editForm = (parForm, parId )  =>  {

    const formulario = document.getElementById("Formulario");
    const btnGuardar = document.getElementById("guardar");
    const btnLimpiar = document.getElementById("limpiar");

    fillForm(parId);

    btnGuardar.removeAttribute("Onclick");
    btnGuardar.setAttribute("Onclick", `editarRegistro('${parForm}',${parId})`);
    btnLimpiar.setAttribute("Onclick", `cancelarEditar('${parForm}')`);
    btnGuardar.innerHTML  = "Editar";
    btnLimpiar.innerHTML  = "Cancelar";
}

const fillForm = ( parId )  =>  {
    let arrInputsNameForm = new Array;
    arrInputsNameForm = getNameInputs();
    arrInputsNameForm.forEach(e => {
        row  = e + '_' + parId;
        document.getElementById(e).value   = document.getElementById(row).innerText;
    });
}
const editarRegistro = (parForm, parId) => {
    let dataForm = formatJson();
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
    return JSON.stringify(datosCompletos);
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

const getNameInputs = () =>  {
    
    const formulario = document.getElementById("Formulario");
    const datos = new FormData(formulario);
    const datosCompletos = Object.fromEntries(datos.entries());
    
    idForms = new Array();
    idForms = Object.keys(datosCompletos);
    
    idRegistros = new Array();
    idRegistros = Object.keys(datosCompletos);
    
    return idRegistros;
}

const ch = (urlHijo) => {
    $.ajax({
        type: "POST",
        url: urlHijo,
        data:{},
        success: function(datosP){
            $('#qa').html(datosP);
        }
    });
    listTabla(page);
    
}