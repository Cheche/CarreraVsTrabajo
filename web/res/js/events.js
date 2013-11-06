function mostrartemas(){
    $( "#temaslista" ).empty();
    //Json via URL
    var data;
    var dataGet =$.ajax({ dataType: "json", url: "http://localhost/dmsosa/fichxxx/web/app_dev.php/getTemasID/1", data: data});
    var id = this.id[0];
    dataGet.done( function (data){
        var length = data.temas.length;
        var element;// = null;
        var element_id;// = null;
        var element_txt = "";
        //Armo HTML 
        for (var i = 0; i < length; i++) {
            element = data.temas[i];
            element_txt = element_txt + "<li class='buttonTema" + id + "' id='" + element.id + "'>"+element.nombre+"</li><br>";
        }
        $( element_txt ).appendTo( $( "#temaslista" ) );
        //Asigno eventos 
        for (var i = 0; i < length; i++){
            element = data.temas[i];
            element_id = "#"+element.id;
            $(element_id).click( function (){
                //!!! COMPLETAR ACÁ CON LOS DATOS
                $( "#central" ).empty();
                var priv = prompt("Rol?");
                var dataPost = $.post("http://localhost/dmsosa/fichxxx/web/app_dev.php/getIframe/"+priv);
                dataPost.done( function (data){
                    $( data ).appendTo( $( "#central" ) );
                });
            });
        }
    });
}

function iniciar(){
    $("#1a").click( mostrartemas );
    $("#2a").click( mostrartemas );
    $("#3a").click( mostrartemas );
    $("#4a").click( mostrartemas );
    $("#5a").click( mostrartemas );
    
    $("#1b").click( mostrartemas );
    $("#2b").click( mostrartemas );
    $("#3b").click( mostrartemas );
    $("#4b").click( mostrartemas );
    $("#5b").click( mostrartemas );
    
    $("#1c").click( mostrartemas );
    $("#2c").click( mostrartemas );
    $("#3c").click( mostrartemas );
    $("#4c").click( mostrartemas );
    $("#5c").click( mostrartemas );
}

$(document).ready(iniciar);