window.onload = function () {
    ch('views/pages/dashboard.php');
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