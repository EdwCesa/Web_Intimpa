let n=1;
function carrusel(){
    $("#extincion").attr("src","imagenes/recicla"+n+".jpg");
    n++;
    if(n>4) n=1;
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

    
});

