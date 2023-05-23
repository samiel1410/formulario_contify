const triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'));
triggerTabList.forEach((triggerEl) => {
  const tabTrigger = new mdb.Tab(triggerEl);

  triggerEl.addEventListener('click', (event) => {
    event.preventDefault();
    tabTrigger.show();
  });
});



$(function () {


  $("#mytabs a:first").tab("show");





  $(".next").on("click", function () {
    window.scrollTo(-20, 0);





    progreso = document.getElementById("progress");

    progreso.value = progreso.value + 33.33;





    if (progreso.value == 0) {
      document.getElementById("boton_1").classList.remove('done');
      document.getElementById("boton_2").classList.remove('done');
      document.getElementById("boton_3").classList.remove('done');
      document.getElementById("boton_4").classList.remove('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "true");
      $("#boton_2").attr("aria-expanded", "false");
      $("#boton_3").attr("aria-expanded", "false");
      $("#boton_4").attr("aria-expanded", "false");
    } else if (progreso.value == 33.33) {

      document.getElementById("boton_1").classList.add('done');
      document.getElementById("boton_2").classList.add('done');
      document.getElementById("boton_3").classList.remove('done');
      document.getElementById("boton_4").classList.remove('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "false");
      $("#boton_2").attr("aria-expanded", "true");
      $("#boton_3").attr("aria-expanded", "false");
      $("#boton_4").attr("aria-expanded", "false");

    }
    else if (progreso.value == 66.66) {

      document.getElementById("boton_1").classList.add('done');
      document.getElementById("boton_2").classList.add('done');
      document.getElementById("boton_3").classList.add('done');
      document.getElementById("boton_4").classList.remove('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "false");
      $("#boton_2").attr("aria-expanded", "false");
      $("#boton_3").attr("aria-expanded", "true");
      $("#boton_4").attr("aria-expanded", "false");




    }
    else if (progreso.value == 99.99) {

      document.getElementById("boton_1").classList.add('done');
      document.getElementById("boton_2").classList.add('done');
      document.getElementById("boton_3").classList.add('done');
      document.getElementById("boton_4").classList.add('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "false");
      $("#boton_2").attr("aria-expanded", "false");
      $("#boton_3").attr("aria-expanded", "false");
      $("#boton_4").attr("aria-expanded", "true");

    }







    var activeTabPane = document.querySelector('.tab-pane.active.show');

    if (activeTabPane) {
      // obtener el ID del 'div' activo
      var activeTabPaneId = activeTabPane.getAttribute('id');

      console.log('El usuario está en la pestaña con2 ID: ' + activeTabPaneId);







      //FORMULARIO






      if (activeTabPaneId == "third") {
        console.log("ENTRO")



        var frontal = $('#fotoLadoFrontalCedula').prop('files');
        var posterior = $('#fotoLadoPosteriorCedula').prop('files');
        var selfie = $('#fotoSelfieCedula').prop('files');
        var pdfRuc = $('#pdfRuc').prop('files');





        console.log(frontal.length, posterior.length, selfie.length, pdfRuc.length)

        if (frontal.length == 0) {
          console.log("1")
          Swal.fire({
            title: 'Advertencia!',
            text: 'Debe subir los archivos',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })
        }
        if (selfie.length == 0) {
          console.log("2")
          Swal.fire({
            title: 'Advertencia!',
            text: 'Debe subir los archivos',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })
        }

        if (posterior.length == 0) {
          console.log("3")
          Swal.fire({
            title: 'Advertencia!',
            text: 'Debe subir los archivos',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })

        }
        if (pdfRuc.length == 0) {
          console.log("4")
          Swal.fire({
            title: 'Advertencia!',
            text: 'Debe subir los archivos',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })


        }

        if (frontal[0].size >= 10485760) {
          Swal.fire({
            title: 'Advertencia!',
            text: 'Verifique los archivos subidos (El tamaño maximo es 10MB)',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })
        }
        if (posterior[0].size >= 10485760) {
          Swal.fire({
            title: 'Advertencia!',
            text: 'Verifique los archivos subidos (El tamaño maximo es 10MB)',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })
        }
        if (selfie[0].size >= 10485760) {
          Swal.fire({
            title: 'Advertencia!',
            text: 'Verifique los archivos subidos (El tamaño maximo es 10MB)',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })
        }
        if (pdfRuc[0].size >= 10485760) {
          Swal.fire({
            title: 'Advertencia!',
            text: 'Verifique los archivos subidos (El tamaño maximo es 10MB)',
            icon: 'warning',
            confirmButtonText: 'Ok'
          })
        }
        else {

          const $active = $(".tab-pane.active");
          const $next = $active.next();
          $active.removeClass("active show");
          $next.addClass("active show");
        }











      }

      else {
        const $active = $(".tab-pane.active");
        const $next = $active.next();
        $active.removeClass("active show");
        $next.addClass("active show");
        if ($next.length) {

          $active.removeClass("active show");
          $next.addClass("active show");


        }
      }


    } else {
      console.log('No se encontró ningún elemento con la clase "tab-pane  "');
    }


    window.scrollTo(0, 0);

  });

  $(".prev").on("click", function (e) {

    window.scrollTo(0, 0);
    progreso = document.getElementById("progress");

    progreso.value = progreso.value - 33.33;
    const $active = $(".tab-pane.active");
    const $prev = $active.prev();

    if ($prev.length) {
      $active.removeClass("active show");
      $prev.addClass("active show");
    }
    e.preventDefault();



    if (progreso.value == 0) {
      document.getElementById("boton_1").classList.add('done');
      document.getElementById("boton_2").classList.remove('done');
      document.getElementById("boton_3").classList.remove('done');
      document.getElementById("boton_4").classList.remove('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "true");
      $("#boton_2").attr("aria-expanded", "false");
      $("#boton_3").attr("aria-expanded", "false");
      $("#boton_4").attr("aria-expanded", "false");
    } else if (progreso.value == 33.33) {

      document.getElementById("boton_1").classList.add('done');
      document.getElementById("boton_2").classList.add('done');
      document.getElementById("boton_3").classList.remove('done');
      document.getElementById("boton_4").classList.remove('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "false");
      $("#boton_2").attr("aria-expanded", "true");
      $("#boton_3").attr("aria-expanded", "false");
      $("#boton_4").attr("aria-expanded", "false");

    }
    else if (progreso.value == 66.66) {

      document.getElementById("boton_1").classList.add('done');
      document.getElementById("boton_2").classList.add('done');
      document.getElementById("boton_3").classList.add('done');
      document.getElementById("boton_4").classList.remove('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "false");
      $("#boton_2").attr("aria-expanded", "false");
      $("#boton_3").attr("aria-expanded", "true");
      $("#boton_4").attr("aria-expanded", "false");



    }
    else if (progreso.value == 99.99) {

      document.getElementById("boton_1").classList.add('done');
      document.getElementById("boton_2").classList.add('done');
      document.getElementById("boton_3").classList.add('done');
      document.getElementById("boton_4").classList.add('done');


      ///aria expande
      $("#boton_1").attr("aria-expanded", "false");
      $("#boton_2").attr("aria-expanded", "false");
      $("#boton_3").attr("aria-expanded", "false");
      $("#boton_4").attr("aria-expanded", "true");

    }




    activeTabPane = document.querySelector('.tab-pane.active');

    if (activeTabPane) {
      // obtener el ID del 'div' activo
      var activeTabPaneId = activeTabPane.getAttribute('id');

      if (activeTabPaneId == "first") {

        document.getElementById("prev").style.display = 'none';
        document.getElementById("next").style.display = 'none';
      }
    } else {
      console.log('No se encontró ningún elemento con la clase "tab-pane active show"');
    }





  });
});


$(function () {

  $(".natural").on("click", function (e) {
    const $active = $(".tab-pane.active");
    const $next = $active.next();

    if ($next.length) {
      $active.removeClass("active show");
      $next.addClass("active show");
    }
    e.preventDefault();
    window.scrollTo(0, 0);
    progreso = document.getElementById("progress");
    progreso.value = 33.33

    document.getElementById("boton_2").classList.add('done');


    //botonoes
    document.getElementById("boton_aux_segundo").style.visibility = "visible";

    document.getElementById("botones").style.visibility = "hidden";






    document.getElementById("paginado").value = "PERSONA NATURAL";
    document.getElementById("tipo_solicitud").value = "1";



    valor = document.getElementById("paginado").value;
    titulo_ofi = document.getElementById('titulo_oficial');
    titulo_ofi.innerHTML = '<h2>' + valor + '</h2>';

    document.querySelector('.tipo_firma_info').innerHTML=valor;

    document.getElementById("datos_empresa").style.display = 'none';
   

  


    dato_cedula = document.getElementById("documento").value;













  });


  $(".empresa").on("click", function (e) {
    const $active = $(".tab-pane.active");
    const $next = $active.next();

    if ($next.length) {
      $active.removeClass("active show");
      $next.addClass("active show");
    }
    e.preventDefault();
    document.getElementById("boton_aux_segundo").style.visibility = "visible";

    document.getElementById("botones").style.visibility = "hidden";



    window.scrollTo(0, 0);
    document.getElementById("paginado").value = "REPRESENTANTE LEGAL DE EMPRESA";
    document.getElementById("tipo_solicitud").value = "2";

    progreso = document.getElementById("progress");
    progreso.value = 33.33
    document.getElementById("boton_2").classList.add('done');
    valor = document.getElementById("paginado").value;
    titulo_ofi = document.getElementById('titulo_oficial');
    titulo_ofi.innerHTML = '<h2>' + valor + '</h2>';
    document.querySelector('.tipo_firma_info').innerHTML=valor;


    //mostrar datos de epresa

    document.getElementById("datos_empresa").style.display = '';

    document.getElementById("pre_ruc").style.display = 'none';

    document.getElementById("texto_factura_legal").style.display = '';






  });





  $("#documento").on("change", function () {

    dato_valor = document.getElementById("documento").value;

    if (dato_valor == 1) {
      document.getElementById("codigo_espacio").style.visibility = "visible"
      document.getElementById("ruc_firma_espacio").style.visibility = "hidden";

      document.getElementById("codigo_dactilar").required = true;

      document.getElementById("ruc_firma").required = false;

      $("#ruc_pre_si").on("click", function () {
        document.getElementById("ruc_firma_espacio").style.visibility = "hidden";
        document.getElementById("ruc_firma").value = "";

      });


      $("#ruc_pre_no").on("click", function () {
        document.getElementById("ruc_firma").value = "";
        document.getElementById("ruc_firma_espacio").style.visibility = "hidden";

      });


    } else if (dato_valor == 2) {
      document.getElementById("codigo_espacio").style.visibility = "hidden";

      document.getElementById("codigo_dactilar").required = false;

      $("#ruc_pre_si").on("click", function () {
        document.getElementById("ruc_firma_espacio").style.visibility = "visible";
        document.getElementById("ruc_firma").value = "";

        document.getElementById("ruc_firma").required = true;
      });


      $("#ruc_pre_no").on("click", function () {

        document.getElementById("ruc_firma_espacio").style.visibility = "hidden";
        document.getElementById("ruc_firma").value = "";

        document.getElementById("ruc_firma").required = false;
      });



    }





  });


});


$(function () {


  $("#ruc_pre_si").on("click", function () {
    valor = document.getElementById("ruc_pre_si").value;

   
    document.getElementById("direccion_texto").innerHTML = "*Dirección completa, tal y como consta en el ruc";

  });


  $("#ruc_pre_no").on("click", function () {
    valor = document.querySelectorAll("ruc_pre_no").value;

  

    document.getElementById("direccion_texto").innerHTML = "*Dirección completa";


  });




  /////PAQUETE




  $("#documento").on("change", function () {
    var e = document.getElementById("documento");
    var value = e.value;
    var text = e.options[e.selectedIndex].text;


    if (value == 1) {

      titu_documento = document.getElementById("titu_documento");
      titu_documento.innerHTML = '*N° de Cédula';
    } else {
      titu_documento = document.getElementById("titu_documento");
      titu_documento.innerHTML = '*N° de Pasaporte';

    }




  });


  $("#vigencia").on("change", function () {
    paquete_tiempo = document.getElementById("vigencia");

    paquete = document.getElementById("paquete_text");

    subtotal = document.getElementById("subtotal");

    iva = document.getElementById("iva");

    total = document.getElementById("total");


    //inpust

    subtotal_input = document.querySelector('.subtotal_firma');
    iva_input = document.querySelector('.iva_firma');
    total_input = document.querySelector('.total_firma');

  
    tiempo_firma = document.querySelector('.tiempo_firma');



    if (paquete_tiempo.value == 1) {
      paquete.innerHTML = "FIRMA ELECTRÓNICA ";
      subtotal.innerHTML = "$20.00";
      iva.innerHTML = "$2.40";
      total.innerHTML = "$22.40";

      tiempo_firma.innerHTML = "1 AÑO"

      //inputs 
      subtotal_input.value = 20;

      iva_input.value = 2.40;

      total_input.value = 22.40;


    }
    else if (paquete_tiempo.value == 2) {
      paquete.innerHTML = "FIRMA ELECTRÓNICA ";

      subtotal.innerHTML = "$30.00";
      iva.innerHTML = "$3.60";
      total.innerHTML = "$33.60";
      tiempo_firma.innerHTML = "2 AÑOS"

      //inputs 
      subtotal_input.value = 30;

      iva_input.value = 3.60;

      total_input.value = 33.60;

    }
    else if (paquete_tiempo.value == 3) {
      paquete.innerHTML = "FIRMA ELECTRÓNICA ";

      subtotal.innerHTML = "$43.00";
      iva.innerHTML = "$5.16";
      total.innerHTML = "$48.16";

      tiempo_firma.innerHTML = "3 AÑOS"
      //inputs 
      subtotal_input.value = 43;

      iva_input.value = 5.16;

      total_input.value = 48.16;

    }
    else if (paquete_tiempo.value == 4) {
      paquete.innerHTML = "FIRMA ELECTRÓNICA ";
      subtotal.innerHTML = "$57.60";
      iva.innerHTML = "$6.91";
      total.innerHTML = "$64.51";

      tiempo_firma.innerHTML = "4 AÑOS"
      //inputs
      subtotal_input.value = 57.60;

      iva_input.value = 6.91;

      total_input.value = 64.51;

    }
    else {
      paquete.innerHTML = "FIRMA ELECTRÓNICA ";
      subtotal.innerHTML = "$68.00";
      iva.innerHTML = "$8.16";
      total.innerHTML = "$76.16";

      tiempo_firma.innerHTML = "5 AÑOS"

      //inputs
      subtotal_input.value = 68.00;

      iva_input.value = 8.16;

      total_input.value = 76.16;

    }







  });


  $("#forma_pago").on("change", function () {
    forma_pago = document.getElementById("forma_pago").value;

    if (forma_pago == 1 || forma_pago == 2) {


      document.getElementById("caja_transferencia").style.display = 'none';
      document.getElementById("caja_pago_tarjeta").style.display = 'block';

      document.getElementById("tipo_pago").style.display = '';

      document.getElementById("pagar").style.display = '';

      document.getElementById("enviar").style.display = 'none';
    }

    if (forma_pago == 3) {
      document.getElementById("caja_transferencia").style.display = 'block';
      document.getElementById("caja_pago_tarjeta").style.display = 'none';

      document.getElementById("tipo_pago").style.display = 'none';

      document.getElementById("pagar").style.display = 'none';


      document.getElementById("enviar").style.display = '';




    }


  });



});

//Validacionees
$(function () {

  $(".enviar").on("click", function () {
    var e = document.getElementById("documento");

    if (e.value == "SELECCIONE") {
      alert("llene correctamene")
    }
  });
});


document.getElementById('fotoLadoFrontalCedula').onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("fotoFrontal").src = fr.result;
    }
    fr.readAsDataURL(files[0]);
  }

  // Not supported
  else {
    // fallback -- perhaps submit the input to an iframe and temporarily store
    // them on the server until the user's session ends.
  }
}



document.getElementById('fotoLadoPosteriorCedula').onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("fotoPosterior").src = fr.result;
    }
    fr.readAsDataURL(files[0]);
  }

  // Not supported
  else {
    // fallback -- perhaps submit the input to an iframe and temporarily store
    // them on the server until the user's session ends.
  }
}



document.getElementById('fotoSelfieCedula').onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("fotoSelfie").src = fr.result;
    }
    fr.readAsDataURL(files[0]);
  }

  // Not supported
  else {
    // fallback -- perhaps submit the input to an iframe and temporarily store
    // them on the server until the user's session ends.
  }
}



document.getElementById('pdfRuc').onchange = function (evt) {

  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;
  document.getElementById("pdfvista").style.display = 'none';
  document.getElementById("pdf_canvas").removeAttribute("hidden");


  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {


      // header on that server.
      var url = fr.result;

      // Loaded via <script> tag, create shortcut to access PDF.js exports.
      var pdfjsLib = window['pdfjs-dist/build/pdf'];

      // The workerSrc property shall be specified.
      pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

      // Asynchronous download of PDF
      var loadingTask = pdfjsLib.getDocument(url);
      loadingTask.promise.then(function (pdf) {
        console.log('PDF loaded');

        // Fetch the first page
        var pageNumber = 1;
        pdf.getPage(pageNumber).then(function (page) {
          console.log('Page loaded');

          var scale = 0.40;
          var viewport = page.getViewport({ scale: scale });

          // Prepare canvas using PDF page dimensions
          var canvas = document.getElementById('pdf_canvas');
          var context = canvas.getContext('2d');

          canvas.height = 288;
          canvas.width = 225;

          // Render PDF page into canvas context
          var renderContext = {
            canvasContext: context,
            viewport: viewport
          };
          var renderTask = page.render(renderContext);
          renderTask.promise.then(function () {
            console.log('Page rendered');
          });
        });
      }, function (reason) {
        // PDF loading error
        console.error(reason);
      });
    }
    fr.readAsDataURL(files[0]);
  }

  // Not supported
  else {
    // fallback -- perhaps submit the input to an iframe and temporarily store
    // them on the server until the user's session ends.
  }




}




document.getElementById('fotoSelfieCedula').onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("fotoSelfie").src = fr.result;
    }
    fr.readAsDataURL(files[0]);
  }

  // Not supported
  else {
    // fallback -- perhaps submit the input to an iframe and temporarily store
    // them on the server until the user's session ends.
  }
}









document.getElementById('pdfRucOpcional').onchange = function (evt) {

  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;
  document.getElementById("pdfvistaOpcional").style.display = 'none';
  document.getElementById("pdf_canvas_opcional").removeAttribute("hidden");


  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {


      // header on that server.
      var url = fr.result;

      // Loaded via <script> tag, create shortcut to access PDF.js exports.
      var pdfjsLib = window['pdfjs-dist/build/pdf'];

      // The workerSrc property shall be specified.
      pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

      // Asynchronous download of PDF
      var loadingTask = pdfjsLib.getDocument(url);
      loadingTask.promise.then(function (pdf) {
        console.log('PDF loaded');

        // Fetch the first page
        var pageNumber = 1;
        pdf.getPage(pageNumber).then(function (page) {
          console.log('Page loaded');

          var scale = 0.40;
          var viewport = page.getViewport({ scale: scale });

          // Prepare canvas using PDF page dimensions
          var canvas = document.getElementById('pdf_canvas_opcional');
          var context = canvas.getContext('2d');

          canvas.height = 288;
          canvas.width = 225;

          // Render PDF page into canvas context
          var renderContext = {
            canvasContext: context,
            viewport: viewport
          };
          var renderTask = page.render(renderContext);
          renderTask.promise.then(function () {
            console.log('Page rendered');
          });
        });
      }, function (reason) {
        // PDF loading error
        console.error(reason);
      });
    }
    fr.readAsDataURL(files[0]);
  }

  // Not supported
  else {
    // fallback -- perhaps submit the input to an iframe and temporarily store
    // them on the server until the user's session ends.
  }




}

//validaciones de step horizomtal

$(function () {


  progreso = document.getElementById("progress").value;


  if (progreso == 0) {
    document.getElementById("boton_1").disabled = true;
    document.getElementById("boton_2").disabled = true;
    document.getElementById("boton_3").disabled = true;
    document.getElementById("boton_4").disabled = true;
  }






  function myFunction(x) {
    if (x.matches) { // If media query matches
      document.getElementById("boton_1").style.margin = "15px 0px 0px 0px";
      document.getElementById("boton_2").style.margin = "15px 0px 0px 0px";
      document.getElementById("boton_3").style.margin = "15px 0px 0px 0px";
      document.getElementById("boton_4").style.margin = "15px 0px 0px 0px";

      document.getElementById("cabecera").style.display = 'none';

    } else {
      document.getElementById("boton_1").style.margin = "0px 0px 0px 0px";
      document.getElementById("boton_2").style.margin = "0px 0px 0px 0px";
      document.getElementById("boton_3").style.margin = "0px 0px 0px 0px";
      document.getElementById("boton_4").style.margin = "0px 0px 0px 0px";

      document.getElementById("cabecera").style.display = '';

    }
  }

  var x = window.matchMedia("(max-width: 700px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction)





})