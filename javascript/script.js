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
            window.location.href = "index.php?animales=true&idioma="+ $(this).html();
        }else{
            window.location.href = "index.php?idioma="+ $(this).html();
        }


        //window.location.reload();
        //location = self.location.href + '?idioma=' + $(this).html();
    });

    function recargar() {
        alert('Me voy a recargar');
        window.location.reload();
    }
});