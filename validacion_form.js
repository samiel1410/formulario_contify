$(document).ready(function () {









   $("#form_submit").on("click", function (e) {
      e.preventDefault();
   
      $("#form_datos").validate({
         rules: {

         },

         messages: {
            documento: "Este campo es requerido!!",
            nombre: "Este campo es requerido!!",
            codigo_dactilar: "Este campo es requerido!!",
            nume_documento: "Este campo es requerido!!",
            nacionalidad: "Este campo es requerido!!",
            primer_apellido: "Este campo es requerido!!",
            segundo_apellido: "Este campo es requerido!!",
            fecha: "Este campo es requerido!!",
            email_1: "Este campo es requerido!!",
            email_2: "Este campo es requerido!!",
            celular_1: "Este campo es requerido!!",
            celular_2: "Este campo es requerido!!",
            sexo: "Este campo es requerido!!",
            ruc_pre: "Este campo es requerido!!",
            ruc_firma: "Este campo es requerido!!",
            provincia: "Este campo es requerido!!",
            ciudad: "Este campo es requerido!!",
            direccion: "Este campo es requerido!!",
            ruc_empre: "Este campo es requerido!!",
            razon_social: "Este campo es requerido!!",
            cargo_represe: "Este campo es requerido!!",
            vigencia: "Este campo es requerido!!"

         }

      });


      if ($("#form_datos").valid() == true) {
         const $active = $(".tab-pane.active");
         const $next = $active.next();
         $active.removeClass("active show");
         $next.addClass("active show");

         progreso= document.getElementById("progress") ;

         progreso.value = progreso.value +33.33;

         document.getElementById("botones").style.visibility = "visible";


         if(progreso.value == 66.66){

            document.getElementById("boton_1").classList.add('done');
            document.getElementById("boton_2").classList.add('done');
            document.getElementById("boton_3").classList.add('done');
            document.getElementById("boton_4").classList.remove('done');
      
      
                ///aria expande
                $("#boton_1").attr("aria-expanded","false");
                $("#boton_2").attr("aria-expanded","false");
                $("#boton_3").attr("aria-expanded","true");
                $("#boton_4").attr("aria-expanded","false");
      
              
      
      
          }
          var activeTabPane = document.querySelector('.tab-pane.active.show');

    if (activeTabPane) {
      // obtener el ID del 'div' activo
      var activeTabPaneId = activeTabPane.getAttribute('id');

      console.log('El usuario está en la pestaña con2 ID: ' + activeTabPaneId);
     
      document.getElementById("prev").style.display = '';
      document.getElementById("next").style.display = '';
    

    }


      } else {

         Swal.fire({
            title: 'Advertencia!',
            text: 'Verifique los datos ingresados',
            icon: 'warning',
            confirmButtonText: 'Ok'
         })
      }




   });

















});