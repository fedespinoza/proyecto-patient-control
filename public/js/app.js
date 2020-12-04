$(document).ready(function(){
    //Opciones del boton del nav aside de las OS
    $("#show").click(function(){
      $("a#ocultar").toggle(600);
      $("a#ocultarOs").hide(600);
    });

    //Opciones del boton del nav aside de las OS
    $("#showOs").click(function(){
      $("a#ocultarOs").toggle(600);
      $("a#ocultar").hide(600);
    });
});
