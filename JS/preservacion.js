function palabreo(){
    let cadena=document.getElementById("titulo1").innerText;
    cadena=cadena.substring(1)+cadena.charAt(0);
    document.getElementById("titulo1").innerText=cadena;
    setTimeout("palabreo()",1000);
 }

let n=0;
function carrusel(){
    n++;
    if(n>6) n=1;
    $(".imagen_p1").attr("style","opacity:0; transition: all 1s");
    setTimeout("cambio()",200);
}

function cambio(){
    $(".imagen_p1").attr("src","imagenes/preserva"+n+".jpg");
    $(".imagen_p1").attr("style","opacity:1; transition: all 1s");
    setTimeout("carrusel()",6000);
 };

$(document).ready(function(){
    carrusel();
  
});