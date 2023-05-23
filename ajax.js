$(document).ready(function () {

  $.ajax({
    url: 'php/negocios/nacionalidad/verNacionalidades.php',
    type: 'POST',
    dataType: "json",
    success: function (data) {



      console.log(data)

   

      if (data.success == true) {




        $.each(data.data, function (key, entry) {

          //alert (key + ":" + entry)
          $('#nacionalidad').append($('<option></option>').attr('value', entry.nombre_nacionalidad).text(entry.nombre_nacionalidad));
        });






      } else {

        console.log("Fallos")

      }

    },

  });



  $.ajax({
    url: 'php/negocios/provincia/verProvincias.php',
    type: 'POST',
    dataType: "json",
    success: function (data) {



      if (data.success == true) {



        $.each(data.data, function (key, entry) {

          //alert (key + ":" + entry)
          $('#provincia').append($('<option></option>').attr('value', entry.id).text(entry.provincia));
        });






      } else {

        console.log("Fallos")

      }

    },

  });

});



$(document).ready(function () {

  $("#provincia").on("change", function () {

    id_provincia = document.getElementById("provincia").value;
    ciudad = document.getElementById("ciudad");


    const xhr1 = new XMLHttpRequest();
    xhr1.open('GET', `php/negocios/ciudad/verCiudades.php?id_provincia=${id_provincia}`, true);
    xhr1.onload = function () {
      if (this.status === 200) {
        const datos = JSON.parse(this.responseText);


        let arregloDeClavesYValores = Object.entries(datos);



        let options = '';
        arregloDeClavesYValores[3][1].forEach(function (ciudad) {
          options += `<option value="${ciudad.id}">${ciudad.canton}</option>`;
        });
        ciudad.innerHTML = options;




      }
    };
    xhr1.send();




  });



  $("#enviar").on("click", function () {

    var formdata_datos = new FormData(document.getElementById("form_datos"));

    forma_pago = document.getElementById("forma_pago").value;
    subtotal_firma = document.getElementById("subtotal_firma").value;
    iva_firma = document.getElementById("iva_firma").value;
    total_firma = document.getElementById("total_firma").value;
    tipo_solicitud = document.getElementById("tipo_solicitud").value;




    correo_uno = document.getElementById("email_1").value;
    celular_uno = document.getElementById("celular_1").value;


    formdata_datos.append("forma_pago", forma_pago);
    formdata_datos.append("subtotal", subtotal_firma);
    formdata_datos.append("iva", iva_firma);
    formdata_datos.append("total", total_firma);
    formdata_datos.append("tipo_solicitud", tipo_solicitud);


    $.ajax({
      url: 'php/negocios/firma/insertar_guardar_firma.php',

      processData: false,
      contentType: false,

      data: formdata_datos,
      type: 'post',
      success: function (result) {
        var resultados = JSON.parse(result);
        console.log(resultados)


        if (resultados.success == true) {

          //   alert(resultados[0].id_cliente_firma);

          document.getElementById("id_cliente").value = resultados.id;


          const formData = new FormData();
          fotoLadoFrontalCedula = $("#fotoLadoFrontalCedula").prop("files")[0]
          fotoLadoPosteriorCedula = $("#fotoLadoPosteriorCedula").prop("files")[0]
          fotoSelfieCedula = $("#fotoSelfieCedula").prop("files")[0]
          pdfRuc = $("#pdfRuc").prop("files")[0]
          pdfRucOpcional = $("#pdfRucOpcional").prop("files")[0]
          id_fkfirma_archivo = document.getElementById("id_cliente").value;

          formData.append("fotoLadoFrontalCedula", fotoLadoFrontalCedula);
          formData.append("fotoLadoPosteriorCedula", fotoLadoPosteriorCedula);
          formData.append("fotoSelfieCedula", fotoSelfieCedula);
          formData.append("pdfRuc", pdfRuc);
          formData.append("pdfRucOpcional", pdfRucOpcional);

          formData.append("id_fkfirma_archivo", id_fkfirma_archivo);


          $.ajax({

            url: 'php/negocios/firma/insertar_documentos.php',
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            type: 'post',
            success: function (result) {


              Swal.fire({
                title: 'Advertencia!',
                text: 'Transacción exitosa',
                icon: 'success',
                confirmButtonText: 'Ok'
              });


              var form_uno = document.getElementById("form_datos");
                  form_uno.reset();

                  var form_dos = document.getElementById("form_archivos");
                  form_dos.reset();

                  location.reload();

           

            },
            error: function (result) {
              Swal.fire("Error", "Lo sentimos uno");
            }
          });
         





      

        } else {
          swal({
            title: "Error al guardar el registro",
            text: "Por favor contactese con soporte: 0987369163",
            imageUrl: "images/peligro.png",
            confirmButtonText: "Ok"
          });
        }



      },
      error: function (result) {
        swal("Error", "Lo sentimos uno  ");
      }
    });






  });








});

































////





$.ajax({
  type: 'GET',
  url: 'php/negocios/recuperar/obtener.php',
  contentType: "application/json; charset=utf-8",

  success: function (result) {
    var resultados = JSON.parse(result);

    code_cliente = resultados.data[0].code_cliente;
    key_cliente = resultados.data[0].key_cliente;
    ambiente = resultados.data[0].ambiente;

   

    //Peticion para pagar
    let paymentCheckout = new PaymentCheckout.modal({
      client_app_code: code_cliente,
      client_app_key: key_cliente,
      locale: 'es',
      env_mode: ambiente,
      onOpen: function () {
        console.log('modal open');
      },
      onClose: function () {
        console.log('modal closed');
      },
      onResponse: function (response) {

        var data = JSON.stringify(response);
        var respuesta = JSON.parse(data);

      


        if (respuesta['transaction']['status'] == 'success') {



          //  alert(id_cliente_local);
          // Verificar que el correo no se encuentre ya registrado
          if (respuesta['transaction']['status_detail'] == 3) {//Transaccion aprobada


            const formData = new FormData();
            fotoLadoFrontalCedula = $("#fotoLadoFrontalCedula").prop("files")[0]
            fotoLadoPosteriorCedula = $("#fotoLadoPosteriorCedula").prop("files")[0]
            fotoSelfieCedula = $("#fotoSelfieCedula").prop("files")[0]
            pdfRuc = $("#pdfRuc").prop("files")[0]
            pdfRucOpcional = $("#pdfRucOpcional").prop("files")[0]
            id_fkfirma_archivo = document.getElementById("id_cliente").value;

            formData.append("fotoLadoFrontalCedula", fotoLadoFrontalCedula);
            formData.append("fotoLadoPosteriorCedula", fotoLadoPosteriorCedula);
            formData.append("fotoSelfieCedula", fotoSelfieCedula);
            formData.append("pdfRuc", pdfRuc);
            formData.append("pdfRucOpcional", pdfRucOpcional);

            formData.append("id_fkfirma_archivo", id_fkfirma_archivo);






            ///Insertar documentos
            $.ajax({

              url: 'php/negocios/firma/insertar_documentos.php',
              dataType: 'script',
              cache: false,
              contentType: false,
              processData: false,
              data: formData,
              type: 'post',
              success: function (result) {


                var resultados = JSON.parse(result);
          

                if (resultados.success == true) {


                  Swal.fire({
                    title: 'Bien!',
                    text: 'Transacción Exitosa',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                  });
                  var form_uno = document.getElementById("form_datos");
                  form_uno.reset();

                  var form_dos = document.getElementById("form_archivos");
                  form_dos.reset();

                  location.reload();



                } else {


                  Swal.fire({
                    title: 'Advertencia!',
                    text: 'Este ruc ya se encuentra registrado en otra solicitud, intenta con otro RUC.',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                  });
                }

              },
              error: function (result) {
                Swal.fire("Error", "Lo sentimos uno");
              }
            });


            //Insertar datos de paymentez
            $.ajax({

              url: 'php/negocios/paymentz/insertarPaymentz.php',
              
              data: {
              'estado_pago_paymentez': respuesta['transaction']['current_status'],
              'fecha_pago_paymentez':  respuesta['transaction']['payment_date'],
              'monto_pago_paymentez': respuesta['transaction']['amount'],
              'autorizacion_pago_paymentez': respuesta['transaction']['authorization_code'],
              'id_retorno_pago_paymentez':respuesta['transaction']['id'],
              'bin_pago_paymentez':respuesta['card']['bin'],
              'transaccion_reference_pago_paymentez':respuesta['transaction']['dev_reference'],
              'estado_local_pago_paymentez':respuesta['transaction']['status'],
              'id_fkcliente_pago_paymentez':id_fkfirma_archivo,
              'fecha_maxima_anulacion':respuesta['transaction']['payment_date'],
              'estado_pago_erp':'EMITIDO'          
            },
              type: 'post',
              success: function (result_pay) {


                var resultados = JSON.parse(result_pay);
          

             

              },
              error: function (result) {
                Swal.fire("Error", "Lo sentimos uno");
              }
            });


          } else if (respuesta['transaction']['status_detail'] == 9) {//Transaccion denegada

            Swal.fire({
              title: 'Error!',
              text: 'Transacción denegada',
              icon: 'error',
              confirmButtonText: 'Ok'
            });

          } else if (respuesta['transaction']['status_detail'] == 1) {//Transaccion revisada


            Swal.fire({
              title: 'Error!',
              text: 'Transacción revisada',
              icon: 'error',
              confirmButtonText: 'Ok'
            });



          } else if (respuesta['transaction']['status_detail'] == 11) {//Transaccion fraude


            Swal.fire({
              title: 'Error!',
              text: 'Transacción fraude',
              icon: 'error',
              confirmButtonText: 'Ok'
            });
          }
          else if (respuesta['transaction']['status_detail'] == 12) {//Tarjetaen la lista negra


            Swal.fire({
              title: 'Error!',
              text: 'Transacción :Tarjeta en la lista negra',
              icon: 'error',
              confirmButtonText: 'Ok'
            });
          }



        } else if (respuesta['transaction']['status'] == 'pending') {


          Swal.fire({
            title: 'Advertencia!',
            text: 'Transacción Pendiente',
            icon: 'warning',
            confirmButtonText: 'Ok'
          });


        } else if (respuesta['transaction']['status'] == 'expired') {

          Swal.fire({
            title: 'Advertencia!',
            text: 'Transacción Expirada',
            icon: 'warning',
            confirmButtonText: 'Ok'
          });
        }
        else if (respuesta['transaction']['status'] == 'canceled') {



          Swal.fire({
            title: 'Error!',
            text: 'Transacción Cancelada',
            icon: 'error',
            confirmButtonText: 'Ok'
          });


        } else if (respuesta['transaction']['status'] == 'failure') {



          Swal.fire({
            title: 'Advertencia!',
            text: 'Transacción Fallida',
            icon: 'warning',
            confirmButtonText: 'Ok'
          });


        }


      }
    });





    let btnOpenCheckout = document.querySelector('.js-payment-checkout');

    btnOpenCheckout.addEventListener('click', function () {

      var formdata_datos = new FormData(document.getElementById("form_datos"));

      forma_pago = document.getElementById("forma_pago").value;
      subtotal_firma = document.getElementById("subtotal_firma").value;
      iva_firma = document.getElementById("iva_firma").value;
      total_firma = document.getElementById("total_firma").value;
      tipo_solicitud = document.getElementById("tipo_solicitud").value;




      correo_uno = document.getElementById("email_1").value;
      celular_uno = document.getElementById("celular_1").value;


      formdata_datos.append("forma_pago", forma_pago);
      formdata_datos.append("subtotal", subtotal_firma);
      formdata_datos.append("iva", iva_firma);
      formdata_datos.append("total", total_firma);
      formdata_datos.append("tipo_solicitud", tipo_solicitud);


      $.ajax({
        url: 'php/negocios/firma/insertar_guardar_firma.php',

        processData: false,
        contentType: false,

        data: formdata_datos,
        type: 'post',
        success: function (result) {
          var resultados = JSON.parse(result);
          console.log(resultados)



          if (resultados.success == true) {

            //   alert(resultados[0].id_cliente_firma);

            document.getElementById("id_cliente").value = resultados.id;
            //Valores del pago con paymentez



            paymentCheckout.open({

              user_id: String(resultados.id),
              user_email: correo_uno, //optional
              user_phone: celular_uno, //optional
              order_description: "FIRMA ELECTRÓNICA PERSONA NATURAL",
              order_amount: Number(total_firma),//Total Factura
              order_vat: Number(iva_firma),//Iva factura
              order_reference: String(resultados.id),
              order_installments_type: Number(0), // optional: The installments type are only available for Equador. The valid values are: https://paymentez.github.io/api-doc/#installments-type
              order_taxable_amount: Number(subtotal_firma), // optional: Only available for Datafast (Equador). The taxable amount, if it is zero, it is calculated on the total. Format: Decimal with two fraction digits.
              order_tax_percentage: 12 // optional: Only available for Datafast (Equador). The tax percentage to be applied to this order.

            });

          } else {
            swal({
              title: "Error al guardar el registro",
              text: "Por favor contactese con soporte: 0987369163",
              imageUrl: "images/peligro.png",
              confirmButtonText: "Ok"
            });
          }



        },
        error: function (result) {
          swal("Error", "Lo sentimos uno  ");
        }
      });




    });


    window.addEventListener('popstate', function () {
      paymentCheckout.close();
    });


  },

});






