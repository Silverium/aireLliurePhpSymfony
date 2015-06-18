$(document).ready(function(){
    if ($(window).width()< 321) {$("#actOut").animate({left: 0 },500);} else{$("#actOut").animate({left: $(document).width()/2 - 131 },500);}
    if ($(window).width()< 581) {$("#social").hide();} else{$("#social").show();}
    $('.bigtext').bigtext();
});
$(window).resize(function(){

    if ($(window).width()< 321) {$("#actOut").animate({left: 0 },500);} else{$("#actOut").animate({left: $(document).width()/2 - 131 },500);}
    if ($(window).width()< 581) {$("#social").hide();} else{$("#social").show();}
});
function MostrarData()
{
    var nombres_dies = new Array("Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte")
    var nombres_mesos = new Array("Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre")

    var fecha_actual = new Date();

    dia_mes = fecha_actual.getDate() ;    //dia del mes
    dia_setmana = fecha_actual.getDay() ;      //dia de la semana
    mes = fecha_actual.getMonth() + 1;
    anio = fecha_actual.getFullYear();

    //escribe en pagina
    document.write(nombres_dies[dia_setmana] + ", " + dia_mes + " de " + nombres_mesos[mes - 1] + " de " + anio)
}
$(document).ready(function(){
    $('#logoBarra2').hide();
    $('#rayaVerde').css('height',  ( .04*$('#ActMun').height()));
    if ($(window).width()< 321) {$('#logoBarra2').show(); $('#logoBarra').hide();}
});
$(window).resize(function(){
    if ($(window).width()< 321) {$('#logoBarra2').show(); $('#logoBarra').hide();} else {$('#logoBarra').show(); $('#logoBarra2').hide();}
});