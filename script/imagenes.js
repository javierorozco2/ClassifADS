$(document).on("change", "#foto", function () {
    
    console.log(this.files);
    var files = this.files;
    var element;
    var supportedImages = ["image/jpeg", "image/png", "image/gif"];
    var seEncontraronElementoNoValidos = false;

    for (var i = 0; i < files.length; i++) {
        element = files[i];
        
        if (supportedImages.indexOf(element.type) != -1) {
            createPreview(element);
        }
        else {
            seEncontraronElementoNoValidos = true;
        }
    }


});

// -> Cachamos el evento change

// Eliminar previsualizaciones

$(document).on("click", "#pubsec__form-imagenes .pubsec__form-imagen", function(e){
    $(this).remove();
});

function createPreview(file) {
    var imgCodified = URL.createObjectURL(file);
    var img = $('<div class="pubsec__form-imagen"> <img src="' + imgCodified + '" alt="Foto del usuario"></div>');
    $(img).insertAfter("#pubsec__form-masimg");
}