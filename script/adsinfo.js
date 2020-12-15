$(function(){
    var id = getParameterByName('idanuncio');

    $('#form').submit(function(e){

        const postData = {
            idanuncio: id,
            mensaje: $('#mensaje').val()
        };

        $.post('../php/adsinfo/enviar-msg.php',postData,function(response){
            $('#success').html(response);
        });
        $('#form').trigger('reset');
        e.preventDefault();
    });
});




function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
