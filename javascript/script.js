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

    $('#idioma').children().on('click', function(){
        var actual = self.location.href;
        if(actual.includes("?animales=true")){
            location = "index.php?animales=true&idioma="+ $(this).html();
        }else{
            location = "index.php?idioma="+ $(this).html();
        }
        //location = self.location.href + '?idioma=' + $(this).html();
    });
});