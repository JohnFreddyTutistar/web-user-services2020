$(document).ready(function(){
    $(".men").click(function(e){
        var enlaceImagen = e.target.src;
        var lightbox = '<div class="lightbox">'+
                            '<img width="400" height="600" src="'+enlaceImagen+'" alt="">'+
                            '<div class="btn-cerrar">X</div>'+
                        '</div>';
        $("body").append(lightbox)
        $(".btn-cerrar").click(function(){
            $(".lightbox").remove();
        })
    })
})