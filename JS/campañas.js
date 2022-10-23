let n=1;
function carrusel(){
    $("#representativo").attr("src","imagenes/campaña"+n+".jpg");
    n++;
    if(n>3) n=1;
    ciclo = setTimeout("carrusel()",3000);
} 

$(document).ready(function(){
    carrusel();

    $(".imgall").mouseenter(function() {
    $(this).attr("style","transform: scale(1.5); transition: all 1s ease");
    });
                
    $(".imgall").mouseleave(function() {
    $(this).attr("style","transform: scale(1); transition: all 1s ease");
    });

    $(".imagen_p3").mouseenter(function() {
    $(this).attr("style","transform:rotateX(360deg); transition: all 2s ease; cursor: pointer; opacity: 1.0");
    });
            
    $(".imagen_p3").mouseleave(function() {
    $(this).attr("style","transform:rotateX(-360deg); transition: all 2s ease; cursor: pointer; opacity: 0.5");
    });
});