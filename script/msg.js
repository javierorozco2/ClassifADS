$(function(){
    mostrarNav();
    $('#msgcontainer__input').hide();
    let idActual = null;

    function mostrarNav(){
        $.ajax({
            url: '../php/chat/mostrar-nav.php',
            type: 'GET',
            async: true,
            success: function(response){
                const item = JSON.parse(response);
                let template ="";
                let actual = ""
                item.forEach(msg => {
                    if(msg.nombre != actual){
                        let cortnombre = msg.nombre.split(' ');
                        cortnombre = cortnombre[0];
                        template+=`
                            <a href="#" id="msgcontainer__nav-msg">
                                <img title="${msg.correo}" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="msgimg">
                                <p class="msgnombre">${cortnombre}</p>
                                <input class="id-msg" type=text value="${msg.id}" hidden>
                            </a>
                        `
                    }
                    actual = msg.nombre;
                }),
                $('#msgcontainer__nav').html(template);
                // console.log(idActual);
            },
            complete: function() { 
                setTimeout(function(){
                    mostrarNav();
                    actualizarMensajes();
                }, 500);
            }
        });
    }

    $(document).on('click', '#msgcontainer__nav-msg', function(e){
        e.preventDefault();
        idActual= $(this).children('.id-msg').val();
        let id = $(this).children('.id-msg').val();

        // $(this).addClass('seleccionada');

        $.post('../php/chat/cargar-mensajes.php', {id}, function(response){
            const item = JSON.parse(response);
            let plantilla = ''
            item.forEach(msg =>{
                if(msg.idmio === msg.para){
                    plantilla+=`
                        <div class="mensajeizq">
                            <p>${msg.mensaje}</p>
                            <span class="msghora">${msg.fecha}</span>
                        </div>
                    `
                }else if(msg.idmio === msg.de){
                    plantilla+=`
                        <div class="mensajeder">
                            <p>${msg.mensaje}</p>
                            <span class="msghora">${msg.fecha}</span>
                        </div>
                    `
                }
            })
            $('#msgcontainer__input').show();
            $('#msgcontainer__section').html(plantilla);
            var objDiv = document.getElementById("msgcontainer__section");
            objDiv.scrollTop = objDiv.scrollHeight;
        })
    });

    $('#form-msg').submit(function(e){
        
        const postData ={
            texto: $('#mensajexenviar').val(),
            para: idActual
        };
        
        $.post('../php/chat/enviar-mensaje.php', postData, function(response){
            // console.log(response);
            $('#form-msg').trigger('reset');
        });
        actualizarMensajes();
        var objDiv = document.getElementById("msgcontainer__section");
        objDiv.scrollTop = objDiv.scrollHeight;
        e.preventDefault();
    })

    function actualizarMensajes(){
        let id = idActual
        $.ajax({
            url: '../php/chat/cargar-mensajes.php',
            type: 'POST',
            data: {id},
            success: function(response){      
                const item = JSON.parse(response);
                let plantilla = ''
                item.forEach(msg =>{
                    if(msg.idmio === msg.para){
                        plantilla+=`
                            <div class="mensajeizq">
                                <p>${msg.mensaje}</p>
                                <span class="msghora">${msg.fecha}</span>
                            </div>
                        `
                    }else if(msg.idmio === msg.de){
                        plantilla+=`
                            <div class="mensajeder">
                                <p>${msg.mensaje}</p>
                                <span class="msghora">${msg.fecha}</span>
                            </div>
                        `
                    }
                })
                $('#msgcontainer__input').show();
                $('#msgcontainer__section').html(plantilla);

                // console.log('Se actualiza');
            },
            // complete: function() { 
            //     setTimeout(function(){
            //         actualizarMensajes();
            //     }, 1000);
            // }

        });
    }

})