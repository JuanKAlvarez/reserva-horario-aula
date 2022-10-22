window.onload = function () {
    ch('views/pages/dashboard.php');
} 

// $("#guardar").on("click",function(event){
//     event.preventDefault();
//     // resto de tu codigo
//  });

const saveDocentes = (event) => {
    // event.preventDefault();
    const formulario = document.getElementById("Formulario");
    //formulario.preventDefault();
    //formulario.addEventListener('submit',saveDocentes);
    const datos = new FormData(formulario);
    const datosCompletos = Object.fromEntries(datos.entries());
    console.log (JSON.stringify(datosCompletos) );

}

const saveForm =  (parForm )  =>  {
    let dataForm = formatJson();
    let ruta = obtenerRuta(parForm);
    $.ajax({
        type : "POST",
        url  : ruta,
        data : {
            method : 'guardar',
            result: JSON.stringify(dataForm),
            success : function(resp){
                alert(resp);
            }
        }
    });
    
}

const formatJson = () => {
    const formulario = document.getElementById("Formulario");
    const datos = new FormData(formulario);
    const datosCompletos = Object.fromEntries(datos.entries());
    return JSON.stringify(datosCompletos)
}

function guardarDocentessaveDocentes(){
    const form = document.getElementById("Formulario");
    form.addEventListener("submit", function(event){
        event.preventDefault();
        let objFormData = new FormData (form); 
        
        console.log(objFormData);
    });
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