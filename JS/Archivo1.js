function palabreoinicio(){
    let cadena=document.getElementById("pfinal").innerText;
    cadena=cadena.substring(1)+cadena.charAt(0);
    document.getElementById("pfinal").innerText=cadena;
    setTimeout("palabreoinicio()",1000);
 }

function fecha(){
    let fecha=new Date();
    let dia=fecha.getDate();
    let mes=fecha.getMonth()+1;
    let anio=fecha.getFullYear();
    let diasemana = '';

switch (fecha.getDay()){
    case 0: diasemana='Domingo'; break;
    case 1: diasemana='Lunes'; break;
    case 2: diasemana='Martes'; break;
    case 3: diasemana='Miercoles'; break;
    case 4: diasemana='Jueves'; break;
    case 5: diasemana='Viernes'; break;
    default: diasemana='Sabado'; break;
}
$("#cfecha").text(innerHTML=diasemana + "," + dia + "/" + mes + "/" + anio);
}

$(document).ready(function(){
    fecha();
    palabreoinicio();

    $(".imgformulario").mouseenter(function() {
    $(this).attr("style","transform:rotateY(360deg); transition: all 2s ease");
    });
        
    $(".imgformulario").mouseleave(function() {
    $(this).attr("style","transform:rotateY(-360deg); transition: all 2s ease");
    });

    $(".imgaside2").mouseenter(function() {
    $(this).attr("style","border: 3px solid gold");
    });
            
    $(".imgaside2").mouseleave(function() {
    $(this).attr("style","border: 3px");
    });    

});

