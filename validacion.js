$(function () {


    //copiar pegar

    window.onload = function() {
        var myInput = document.getElementById('email_1');
        myInput.onpaste = function(e) {
          e.preventDefault();
          alert("esta acción está prohibida");
        }
        
        myInput.oncopy = function(e) {
          e.preventDefault();
          alert("Esta acción está prohibida");
        }



        var celular_1 = document.getElementById('celular_1');
        celular_1.onpaste = function(e) {
          e.preventDefault();
          alert("esta acción está prohibida");
        }
        
        celular_1.oncopy = function(e) {
          e.preventDefault();
          alert("Esta acción está prohibida");
        }

      }


      //boton pagar


$("#terminos").on("click", function () {
    


var button = document.getElementById("pagar");
button.disabled = !button.disabled;


var button2 = document.getElementById("enviar");
button2.disabled = !button2.disabled;


})



      
  
    /////PAQUETE



    activeTabPane = document.querySelector('.tab-pane.active');

    if (activeTabPane) {
        // obtener el ID del 'div' activo
        var activeTabPaneId = activeTabPane.getAttribute('id');

        console.log('El usuario está en la pestaña con IDsssssss: ' + activeTabPaneId);

        if (activeTabPaneId == "first") {

            document.getElementById("prev").style.display = 'none';
            document.getElementById("next").style.display = 'none';
            titulo_ofi = document.getElementById('titulo_oficial');
            titulo_ofi.innerHTML = '<h2></h2>'


        }else if (activeTabPaneId == "third") {

                
                document.getElementById("botones").style.visibility = "visible";
                document.getElementById("prev").style.display = '';
                document.getElementById("next").style.display = '';
             

            


        }
    } else {
        console.log('No se encontró ningún elemento con la clase "tab-pane active show"');
    }

    
    $(".next").on("click", function () {
        var activeTabPane = document.querySelector('.tab-pane.active.show');

        if (activeTabPane) {
            // obtener el ID del 'div' activo
            var activeTabPaneId = activeTabPane.getAttribute('id');

            console.log('El usuario está en la pestaña con ID: ' + activeTabPaneId);

        
      


            //FORMULARIO

            if (activeTabPaneId == "first") {
               
             
                document.getElementById("pagar").style.display = 'none';
              

                document.getElementById("botones").style.visibility = "hidden";

                titulo_ofi = document.getElementById('titulo_oficial');
                titulo_ofi.style.display = '';
                document.getElementById("enviar").style.display = 'none';
            }
            else if (activeTabPaneId == "second") {
                document.getElementById("prev").style.display = '';
                document.getElementById("next").style.display = '';

                document.getElementById("botones").style.visibility = "hidden";
                titulo_ofi = document.getElementById('titulo_oficial');
                titulo_ofi.style.display = '';
                document.getElementById("enviar").style.display = 'none';
            }
            else if (activeTabPaneId == "third") {

                
                document.getElementById("botones").style.visibility = "visible";
                titulo_ofi = document.getElementById('titulo_oficial');
                titulo_ofi.style.display = '';
                document.getElementById("enviar").style.display = 'none';

            } else{
               
                document.getElementById("next").style.display = 'none';
                document.getElementById("pagar").style.display = '';
                document.getElementById("botones").style.visibility = "visible";

                titulo_ofi = document.getElementById('titulo_oficial');
                titulo_ofi.style.display = 'none';



            }
        } else {
            console.log('No se encontró ningún elemento con la clase "tab-pane active show"');
        }



    });
    var tabLinks = document.querySelectorAll('[data-toggle="tab"]');

    // agregar un escucha al evento 'shown.bs.tab' para cada enlace de pestaña
    tabLinks.forEach(function (link) {
        link.addEventListener('shown.bs.tab', function (event) {
            var tabPaneId = event.target.getAttribute('href');
            console.log('El usuario ha cambiado a la pestaña con ID2: ' + tabPaneId);
            // código para cuando el usuario cambia de pestaña
        });
    });



    $(".prev").on("click", function () {

        var activeTabPane = document.querySelector('.tab-pane.active.show');

        if (activeTabPane) {
            // obtener el ID del 'div' activo
            var activeTabPaneId = activeTabPane.getAttribute('id');

            console.log('El usuario está en la pestaña con ID: ' + activeTabPaneId);
            
        if (activeTabPaneId == "first") {

            document.getElementById("prev").style.display = 'none';
            document.getElementById("next").style.display = 'none';
            titulo_ofi = document.getElementById('titulo_oficial');
            titulo_ofi.innerHTML = '<h2></h2>';
            document.getElementById("enviar").style.display = 'none';

            document.getElementById("botones").style.visibility = "hidden";
            document.getElementById("pagar").style.display = 'none';
        }  else if(activeTabPaneId == "second") {
            document.getElementById("next").style.display = '';
            document.getElementById("pagar").style.display = 'none';
            document.getElementById("enviar").style.display = 'none';
       

            document.getElementById("botones").style.visibility = "hidden";
            titulo_ofi = document.getElementById('titulo_oficial');
            titulo_ofi.style.display = '';
            document.getElementById("enviar").style.display = 'none';
          }
          else if (activeTabPaneId == "third") {
            document.getElementById("next").style.display = '';
            document.getElementById("pagar").style.display = 'none';
              
            document.getElementById("botones").style.visibility = "visible";
            titulo_ofi = document.getElementById('titulo_oficial');
            titulo_ofi.style.display = '';
            document.getElementById("enviar").style.display = 'none';

        } else{
            
            document.getElementById("botones").style.visibility = "visible";
            
            titulo_ofi = document.getElementById('titulo_oficial');
            titulo_ofi.style.display = 'none';
        }

        } else {
            console.log('No se encontró ningún elemento con la clase "tab-pane active show"');
        }



    });



    ///FORMULARIO

    // obtener el elemento 'div' activo






    $("#nacionalidad").on("change", function () {

        dato_valor= document.getElementById("nacionalidad").value;
      


        if(dato_valor=="CHINA"){
         
            document.getElementById("2_apellido").required = false;
        }else{
           
            document.getElementById("2_apellido").required = true;
        }
    
       
        
        
    
    
    
    
      });






});