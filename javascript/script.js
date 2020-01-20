$(document).ready(function () {
    var valores = $(".errores").text();
    var camposErrores = [];
    if (valores != "") {
        var separados = valores.split("\n");

        separados.forEach(element => {
            var separacion = element.split(" ");
            camposErrores.push(separacion[0].toString().toLowerCase());
        });

        camposErrores.forEach(element => {
            //$("#" + element).css('border', '2px solid red');
            $("#" + element).addClass("border border-danger");

            
        });
    }
});