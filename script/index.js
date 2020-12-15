$(function(){

    let listado=0;

    cargar();

    function cargar(){
        $('#section__vermas').html('<img src="sources/loading.svg" width="50px">')
        $.ajax({
            url: '../php/index/cargar-anuncios.php',
            type: 'POST',
            data: {listado},
            success: function(response){
                let data = JSON.parse(response);
                html = '';
                data.forEach(pb => {
                    html+= `
                        <a href='adsinfo.php?idanuncio=${pb.id}' class="section__productos-cuadro">
                            <img src="${pb.direccion}" alt="IMAGEN" width="300px" height="250px">
                            <p>${pb.nombre}</p>
                            <p>${pb.condicion}</p>
                            <p>$${pb.precio}</p>
                        </a>
                    `
                });
                $("#section__productos").append(html);
                $('#section__vermas').html('<i class="fas fa-chevron-down"></i>')
            }
        });
    }

    $('#section__vermas').click(function(){
        listado+=8
        cargar()
    })

});