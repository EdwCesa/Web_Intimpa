function palabreo(){
    let cadena=document.getElementById("titulo1").innerText;
    cadena=cadena.substring(1)+cadena.charAt(0);
    document.getElementById("titulo1").innerText=cadena;
    setTimeout("palabreo()",2000);
 }

let n=0;
function carrusel(){
    n++;
    if(n>5) n=1;
    $(".imagen_p1").attr("style","opacity:0; transition: all 0.4s");
    setTimeout("cambio()",150);
}

function cambio(){
    $(".imagen_p1").attr("src","imagenes/soste"+n+".jpg");
    $(".imagen_p1").attr("style","opacity:1; transition: all 1s");
    setTimeout("carrusel()",6000);
 };

$(document).ready(function(){
    carrusel();

    $(".imagen_p3").mouseenter(function() {
    $(this).attr("style","transform:rotateY(360deg); transition: all 3s ease; cursor: pointer; opacity: 1.0");
    });
                
    $(".imagen_p3").mouseleave(function() {
    $(this).attr("style","transform:rotateY(-360deg); transition: all 3s ease; cursor: pointer; opacity: 0.5");
    });
});