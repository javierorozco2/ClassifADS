$(function(){

    $(document).on('click','#mascarac',function(){
        let html = `
        <input type="text" name="concepto[]" id="concepto" class="pubsec__input-carac" placeholder="Ingresa una característica" required">
        <input type="text" name="desc[]" id="desc" class="pubsec__input-carac" placeholder="Ingresa una descripción" required">
        `;
        $('#div-carac').append(html);
    });
});

