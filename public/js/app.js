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

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
      // initialView: 'dayGridMonth'
      headerToolbar:{
          left:'prev next today',
          center: 'title',
          right: 'dayGridMonth timeGridWeek timeGridDay' 
      },
      customButtons:{
        miBoton:{
          text:"Boton",
          click:function(){
            alert('Hola Mundo');
            $('#exampleModal').modal();
          }
        }
      },
      buttonText:{
        today: 'Hoy',
    }
  });
  calendar.setOption('locale', 'Es');
  calendar.render();
});

function Copiar(element) {
  //creamos un input que nos ayudara a guardar el texto temporalmente
  var $temp = $("<input>");
  //lo agregamos a nuestro body
  $("body").append($temp);
  //agregamos en el atributo value del input el contenido html encontrado
  //en el td que se dio click
  //y seleccionamos el input temporal
  $temp.val($(element).html()).select();
  //ejecutamos la funcion de copiado
  document.execCommand("copy");
  //eliminamos el input temporal
  $temp.remove();
}
