<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de solicitud de Firma Electronica en Ecuador</title>
 
 
   <!-- META-->
 
  <meta http-equiv="Cache-control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />

   <!-- CSS-->
  <link rel="shortcut icon" href="images/favicon38.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style_hor.css">
  <link rel="stylesheet" href="css/demo.css">
  
  <!-- SCRIPT-->
  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.paymentez.com/ccapi/sdk/payment_checkout_stable.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>








</head>

<body>





<div class="cabecera">


<img src="images/cebera_contify.png" class="img-fluid" alt="Responsive image">


</div>


<div class="linea_divide">

<img src="images/imgen_divide.png" class="img-fluid" alt="...">

</div>

  <div class="titulo_solicitud">
    <h2>SOLICITUD FIRMA ELECTRÓNICA</h2>
  </div>
  <div class="container">
    <div class="accordion" id="accordionExample">
      <div class="steps">
        <progress id="progress" value=0 max=100></progress>
        <div class="step-item">
          <button class="step-button text-center" type="button" id="boton_1" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1
          </button>
          <div class="step-title">
            Tipo de Solicitud
          </div>
        </div>
        <div class="step-item">
          <button class="step-button text-center collapsed " id="boton_2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2
          </button>
          <div class="step-title">
            Datos Personales
          </div>
        </div>
        <div class="step-item">
          <button class="step-button text-center collapsed" type="button" id="boton_3" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3
          </button>
          <div class="step-title">
            Documentos Necesarios
          </div>
        </div>

        <div class="step-item">
          <button class="step-button text-center collapsed" type="button" id="boton_4" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            4
          </button>
          <div class="step-title">
            Realizar Pago
          </div>
        </div>
      </div>

      <div class="card" hidden>
        <div id="headingOne">
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="card-body">
            your content goes here...
          </div>
        </div>
      </div>
      <div class="card" hidden>
        <div id="headingTwo">

        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="card-body">
            your content goes here...
          </div>
        </div>
      </div>
      <div class="card" hidden>
        <div id="headingThree">

        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="card-body">
            your content goes here...
          </div>
        </div>
      </div>


      <div class="card" hidden>
        <div id="headingFour">

        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="card-body">
            your content goes here...
          </div>
        </div>
      </div>
    </div>
  </div>

  <input type="text" id="id_cliente" hidden>

  <div class="container" style="margin-top: 10px;">
    <!-- Nav tabs -->
    <ul id="mytabs" class="nav nav-tabs" role="tablist">
      <li hidden>
        <a href="#first" role="tab" data-toggle="tab">
          <icon class="fa fa-home"></icon> First tab
        </a>
      </li>
      <li hidden><a href="#second" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i> Second tab
        </a>
      </li>
      <li hidden>
        <a href="#third" role="tab" data-toggle="tab">
          <i class="fa fa-envelope"></i> Third tab
        </a>
      </li>

      <li hidden>
        <a href="#four" role="tab" data-toggle="tab">
          <i class="fa fa-envelope"></i> FOUR tab
        </a>
      </li>
    </ul>

    <div class="row justify-content-center">
      <div class="col-md-8 text-center">


        <div class="titulo_oficial" id="titulo_oficial"></div>
        <!-- <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
                -->
      </div>
    </div>



    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Primer tab-->
      <div class="tab-pane  " id="first">




        <div class="pricing6 py-5 ">


          <div class="container">
            
            <!-- row  -->

            <div class="row mt-4">
              <!-- column  -->



              <!-- column  -->
              <!-- column  -->
              <div class="info">
                <div class="col-md-6">
                  <div class="card card-shadow border-0 mb-4">
                    <div class="card-body p-4">
                      <div class="d-flex align-items-center">
                        <h5 class="font-medium m-b-0">VIGENCIA DE PRECIOS</h5>
                      </div>
                      <div class="row">
                        <div class="col-lg-5 text-center">
                          <div class="price-box my-3">
                            <img src="images/price.png" class="img-fluid" alt="Responsive image" width="150px">
                          </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                          <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                            <li class="py-2"><i class="icon-check text-info mr-2"></i> <span class="precio">1 AÑO <i class="fa fa-arrow-right" style="font-size:20px;color: #d2ad3d"></i> $20.00 + IVA</span></li>
                            <li class="py-2"><i class="icon-check text-info mr-2"></i> <span class="precio">2 AÑOS <i class="fa fa-arrow-right" style="font-size:20px;color: #d2ad3d"></i> $30.00 + IVA</span></li>
                            <li class="py-2"><i class="icon-check text-info mr-2"></i> <span class="precio">3 AÑOS <i class="fa fa-arrow-right" style="font-size:20px;color: #d2ad3d"></i> $43.00 + IVA </span></li>
                            <li class="py-2"><i class="icon-check text-info mr-2"></i> <span class="precio">4 AÑOS <i class="fa fa-arrow-right" style="font-size:20px;color: #d2ad3d"></i> $57.60 + IVA</span></li>
                            <li class="py-2"><i class="icon-check text-info mr-2"></i> <span class="precio">5 AÑOS <i class="fa fa-arrow-right" style="font-size:20px;color: #d2ad3d"></i> $68.00 + IVA</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- column  -->
              <div class="row justify-content-center">
              <div class="col-md-8 text-center">

                <h3 class="mb-3">Tipo de Solicitud</h3>
                <!-- <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
                -->
              </div>
            </div>


            </div>
            <div class="row mt-4">
              <!-- column  -->


              <div class="col-md-6">
                <div class="card card-shadow border-0 mb-4">
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                      <h5 class="font-weight-medium mb-0">PERSONA NATURAL</h5>

                    </div>
                    <div class="row">
                      <div class="col-lg-5 text-center">
                        <div class="price-box my-3">
                          <img src="images/persona_natural.jpg" class="img-fluid" alt="Responsive image" width="150px">
                          <a class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3  natural">CONTINUAR </a>
                        </div>
                      </div>
                      <div class="col-lg-7 align-self-center">
                        <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                          <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Para Facturación Electrónica </span></li>
                          <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Firma Digital CERTIFICADA</span></li>
                          <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Para Firmar Documentos </span></li>
                          <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Para abogados, ingenieros, arquitectos, médicos..., etc</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- column  -->
              <!-- column  -->
              <div class="col-md-6">
                <div class="card card-shadow border-0 mb-4">
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                      <h5 class="font-medium m-b-0">REPRESENTANTE LEGAL DE EMPRESA</h5>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 text-center">
                        <div class="price-box my-3">
                          <img src="images/legal.png" class="img-fluid" alt="Responsive image" width="150px">
                          <a class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3  empresa">CONTINUAR </a>
                        </div>
                      </div>
                      <div class="col-lg-7 align-self-center">
                        <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                          <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Para Facturación Electrónica </span></li>
                          <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Firma Digital CERTIFICIADA</span></li>
                          <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Para firmar tramites coporativos </span></li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- column  -->


            </div>
          </div>

        </div>




      </div>

      <!-- SECOND </h6>-->
      <div class="tab-pane  " id="second">



        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-8 text-center">

              <!-- <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
                -->
            </div>
          </div>





        </div>



        <!-- FORMULARIO </h6>
                -->
        <form class="needs-validation form_datos" novalidate id="form_datos" autocomplete="off">
          <div class="ventana1" id="ventana1">

            <div class="container">
              <h4 class="mb-3 titu_datos">Datos Personales</h4>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <div class="col">

                  <label for="exampleInputEmail1" class="form-label" id="">*Tipo de Documento</label>
                  <select class="form-select" aria-label="Default select example" name="documento" id="documento" class="required" required>
                    <option value="" disabled selected>SELECCIONAR</option>
                    <option value="1">CÉDULA</option>
                    <option value="2">PASAPORTE</option>

                  </select>
                </div>
                <div class="codigo_espacio" id="codigo_espacio">
                  <div class="col">
                    <label for="exampleInputEmail1" class="form-label">*Codigo Dactilar</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" required name="codigo_dactilar" id="codigo_dactilar" placeholder="EXXXXIXXXX">
                  </div>

                </div>




                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" id="titu_documento">*N° de Documento</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="nume_documento" id="nume_documento" placeholder="# IDENTIDAD">
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label">*Nacionalidad</label>
                  <select class="form-select" aria-label="Default select example" name="nacionalidad" id="nacionalidad" class="required" required>
                    <option value="" disabled selected>SELECCIONAR</option>

                  </select>
                </div>
              </div>


              <div class="espacio"></div>

              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label">*Nombres</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="nombre" id="nombre" placeholder="Ejmplo : Ana Maria">
                </div>
                <div class=" col">
                  <label for="exampleInputEmail1" class="form-label">*1er Apellido</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="primer_apellido" id="1_apellido">
                </div>
                <div class=" col ">
                  <label for="exampleInputEmail1" class="form-label">*2do Apellido</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="segundo_apellido" id="2_apellido">
                </div>
                <div class=" col">
                  <label for="exampleInputEmail1" class="form-label">*Fecha de Nacimiento</label>
                  <input type="date" class="form-control" aria-describedby="emailHelp" required name="fecha" id="fecha" min="" max="2005-01-01" placeholder="yyyy/mm/dd">
                </div>
              </div>


              <div class="espacio"></div>


              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label">*Email</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp" name="email_1" id="email_1" required>

                  <label for="exampleInputEmail1" class="texto_info_correo">Info: A este correo se le llegara las credenciales de la firma. Verificar que este bien escrito </label>

                </div>
                <div class=" col">
                  <label for="exampleInputEmail1" class="form-label">*Email 2</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp" name="email_2" id="email_2" required>
                </div>
                <div class=" col ">
                  <label for="exampleInputEmail1" class="form-label">*Celular</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="celular_1" id="celular_1" placeholder="0999999999" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                </div>
                <div class=" col">
                  <label for="exampleInputEmail1" class="form-label">*Celular 2</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="celular_2" id="celular_2" placeholder="0999999999" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                </div>


                <div class="col">

                  <label for="exampleInputEmail1" class="form-label">*Sexo</label>
                  <select class="form-select" aria-label="Default select example" name="sexo" id="sexo" class="required" required>
                    <option value="" disabled selected>SELECCIONAR</option>
                    <option value="1">FEMENINO</option>
                    <option value="2">MASCULINO</option>

                  </select>
                </div>
              </div>

              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">


              <div class="col">
<label for="exampleInputEmail1" class="form-label">Con RUC? </label></td>

</div>

                

                <div class="col">

                <div class="form-check ">
                              <input class="form-check-input" type="radio" name="ruc_pre" id="ruc_pre_si" value="si">
                              <label class="form-check-label" for="inlineRadio1">Si (*Para facturación electrónica)</label>  
                            </div>
                            <div class="form-check ">
                              <input class="form-check-input" type="radio" name="ruc_pre" id="ruc_pre_no" value="no">
                              <label class="form-check-label" for="inlineRadio2">No (*Solo para firma de documentos personales.)</label>
                            </div>
                </div>

             
                

                <div class="ruc_firma_espacio" id="ruc_firma_espacio" style="visibility: hidden;">
                  <div class="col">
                    <label for="exampleInputEmail1" class="form-label">*RUC</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" required name="ruc_firma" id="ruc_firma" placeholder="# RUC">
                  </div>

                </div>

              </div>
            </div>

            <h4 class="mb-3 titu_datos ">Dirección Domicilio</h4>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
              <div class="col">
                <label for="exampleInputEmail1" class="form-label">*Provincia</label>
                <select class="form-select" aria-label="Default select example" name="provincia" id="provincia" class="required" required>
                  <option value="" disabled selected>SELECCIONAR</option>

                </select>
              </div>
              <div class="col">
                <label for="exampleInputEmail1" class="form-label">*Ciudad</label>
                <select class="form-select" aria-label="Default select example" name="ciudad" id="ciudad" class="required" required>

                </select>
              </div>
              <div class="col">
                <label for="exampleInputEmail1" class="form-label" id="direccion_texto">*Dirección completa</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" required name="direccion" id="direccion" class="required" required>
              </div>




            </div>


            <div class="datos_empresa" id="datos_empresa" style="display: none">
              <h3 class="mb-3 titu_datos ">Datos de la Empresa</h3>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label">*RUC</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="ruc_empre" id="ruc_empre" value="">
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label">*Razón Social</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="razon_social" id="razon_social" value="">

                  </select>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" id="direccion_texto">*Cargo del representante</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" required name="cargo_represe" id="cargo_represe" value="">
                </div>




              </div>
            </div>


            <h4 class="mb-3 titu_datos ">Formato (.P12) y tiempo de vigencia </h4>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
              
              <div class="col">
                <label for="exampleInputEmail1" class="form-label">*Tiempo de vigencia</label>
                <select class="form-select" aria-label="Default select example" name="vigencia" id="vigencia" class="required" required>
                  <option value="" disabled selected>SELECCIONAR</option>
                  <option value="1">1 AÑO - $20.00 + IVA</option>
                  <option value="2">2 AÑOS - $30.00 + IVA</option>
                  <option value="3">3 AÑOS - $43.00 + IVA</option>
                  <option value="4">4 AÑOS - $57.60 + IVA</option>
                  <option value="5">5 AÑOS - $68.00 + IVA</option>

                </select>
              </div>





            </div>
            <label for="exampleInputEmail1" class="texto_info_correo">*Su firma .P12 es un archivo con extención .p12 que sirve para ser instalado en una PC desde la cual podrá firmar sus documentos</label>
            <div></div>
          </div>

          <div id="boton_aux_segundo">
            <button type="button" class="btn btn-primary  prev  " ><i class="fa fa-chevron-left"></i>Atras</button>
            <div class="input-icons">
              <input class="submit btn btn-success" type="submit" value="Siguiente" id="form_submit">
              <i class="fa fa-chevron-right   input-field  icono2"></i>
            </div>

          </div>
        </form>





      </div>



      <!-- TRES ¿ -->
      <div class="tab-pane " id="third">

        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-8 text-center">


              <!-- <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
                -->
            </div>
          </div>
        </div>


        <form class="form_archivos" id="form_archivos" autocomplete="off"></form>
        <h4 class="mb-3 titu_datos">Documentos Necesarios</h4>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
          <!-- FRONTAL -->
          <div class="col">

            <div class="form-group  caja">
              <label class="col-sm-12 col-form-label titulo_fotos">*FOTO DEL LADO FRONTAL
                DE SU CÉDULA (OBLIGATORIO)</label>
              <div class="col-sm-12">

                <div class="cajilla">
                  <label for="fotoLadoFrontalCedula" class="btn btn-examinar" style="min-width: 100%">Examinar</label>
                  <input accept="image/*" type="file" name="fotoLadoFrontalCedula" id="fotoLadoFrontalCedula" required style="display: none">
                  <!-- class="btn btn-imagen" -->
                </div>

                <img id="fotoFrontal" name="fotoFrontal" src="images/frontal.png" alt="your image" required="" width="100%" height="290px">

              </div>
              <span style="text-align: justify !important;" class=" form-email-info">Requisitos: A color.</span>

            </div>
          </div>

          <!-- POSTERIOR -->

          <div class="col">
            <div class="form-group caja">
              <label class="col-sm-12 col-form-label titulo_fotos">*FOTO DEL LADO POSTERIOR DE SU CÉDULA (OBLIGATORIO)</label>
              <div class="col-sm-12">

                <div class="cajilla">
                  <label for="fotoLadoPosteriorCedula" class="btn btn-examinar" style="min-width: 100%">Examinar</label>
                  <input accept="image/*" type="file" name="fotoLadoPosteriorCedula" id="fotoLadoPosteriorCedula" required style="display: none">
                  <!-- class="btn btn-imagen" -->
                </div>

                <img id="fotoPosterior" name="fotoPosterior" src="images/posterior.png" alt="your image" required="" width="100%" height="290px">

              </div>
              <span style="text-align: justify !important;" class=" form-email-info">Requisitos: A color.</span>

            </div>
          </div>




          <!-- Selfie -->
          <div class="col">
            <div class="form-group caja">
              <label class="col-sm-12 col-form-label titulo_fotos">*FOTO SELFIE CON SU CÉDULA (OBLIGATORIO)</label>
              <div class="col-sm-12">

                <div class="cajilla">
                  <label for="fotoSelfieCedula" class="btn btn-examinar" style="min-width: 100%">Examinar</label>
                  <input accept="image/*" type="file" name="fotoSelfieCedula" id="fotoSelfieCedula" style="display: none" required>
                  <!-- class="btn btn-imagen" -->
                </div>

                <img id="fotoSelfie" name="fotoSelfie" src="images/selfie.png" alt="your image" required="" width="100%" height="290px">

              </div>
              <span style="text-align: justify !important;" class=" form-email-info">Requisitos: A color.</span>

            </div>
          </div>

          <!-- PDF RUC -->
          <div class="col">
            <div class="form-group caja_pdf">
              <label class="col-sm-12 col-form-label titulo_fotos">*COPIA DEL RUC <br />(OBLIGATORIO)</label>
              <div class="col-sm-12">

                <div class="cajilla">
                  <label for="pdfRuc" class="btn btn-examinar" style="min-width: 100%">Examinar</label>
                  <input accept="application/pdf" type="file" name="pdfRuc" id="pdfRuc" style="display: none" required>
                  <!-- class="btn btn-imagen" -->
                </div>

                <img id="pdfvista" name="pdfvista" src="images/pdf.png" alt="your image" required="" width="100%" height="290px">
                <div class="justify-content-center">

                  <canvas id="pdf_canvas" class="justify-content-center" hidden="true"></canvas>
                </div>


              </div>
              <span style="text-align: justify !important;" class=" form-email-info">Requisitos: A color.</span>

            </div>
          </div>


          <!-- PDF RUC -->
          <div class="col ">
            <div class="form-group caja_pdf_2">
              <label class="col-sm-12 col-form-label titulo_fotos"> DOCUMENTO ADICIONAL <br /> (OPCIONAL)</label>
              <div class="col-sm-12">

                <div class="cajilla">
                  <label for="pdfRucOpcional" class="btn btn-examinar" style="min-width: 100%">Examinar</label>
                  <input accept="application/pdf" type="file" name="pdfRucOpcional" id="pdfRucOpcional" style="display: none">
                  <!-- class="btn btn-imagen" -->
                </div>

                <img id="pdfvistaOpcional" name="pdfvistaOpcional" src="images/pdf.png" alt="your image" required="" width="100%" height="290px">
                <div class="justify-content-center">

                  <canvas id="pdf_canvas_opcional" class="justify-content-center" hidden="true"></canvas>
                </div>


              </div>
              <span style="text-align: justify !important;" class=" form-email-info">Requisitos: A color.</span>

            </div>
          </div>





        </div>





      </div>



      <!-- CUARTO  -->
      <div class="tab-pane " id="four">

        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-8 text-center">


              <!-- <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
                -->
            </div>
          </div>
        </div>


        <h4 class="mb-3 titu_datos">Realizar Pago</h4>
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">

          
            <!-- <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
                -->


            <div class="table-responsive">

              <table class="table">

                <tbody>
                  <tr>

                    <td>
                      <h4 class="mb-3 titu_datos">PAQUETE </h4>
                    </td>
                    <td>
                      <h5 class="mb-3 titu_datos"><span class="paquete_text" id="paquete_text" style="color:black; "></span> </h5>
                    </td>

                  </tr>
                  <tr>

<td><h4 class="mb-3 titu_datos">Tiempo  </h4></td>

<td>  <h4 class="mb-3 titu_datos tiempo_firma"> </h4></td>
</tr>

                  <tr>
                    <td>  <h4 class="mb-3 titu_datos">Tipo de Firma  </h4></td>
                    <td>   <h5 class="mb-3 titu_datos tipo_firma_info"> </h5></td>
                  </tr>

      

                  

                  <tr>

                    <td>
                      <h6 class="titulo_pago">SUBTOTAL</h6>
                    </td>
                    <td>
                      <h6 class="subtotal" id="subtotal"></h6>
                      <input type="text" class="subtotal_firma" id="subtotal_firma" hidden name="subtotal">
                    </td>
                  </tr>
                  <tr>

                    <td>
                      <h6 class="titulo_pago">IVA 12%</h6>

                    </td>
                    <td>
                      <h6 class="iva" id="iva"></h6>
                      <input type="text" class="iva_firma" id="iva_firma" hidden name="iva">
                    </td>
                  </tr>

                  <tr>

                    <td>
                      <h4 class="mb-3 titu_datos">TOTAL </h4>
                    </td>
                    <td>
                      <h4 class="total" id="total"></h4>
                      <input type="text" class="total_firma" id="total_firma" hidden name="total">
                    </td>
                  </tr>


                  <tr>

                    <td>


                      <h5 class="mb-3 titu_datos">Forma de pago </h5>
                    </td>
                    <td>
                      <select class="form-select" aria-label="Default select example" name="forma_pago" id="forma_pago" class="forma_pago">
                        <option value="" disabled selected>SELECCIONAR</option>
                        <option value="1">Tarjeta de Crédito</option>
                        <option value="2">Tarjeta de Débito</option>
                        <option value="3">Transferencia Bancaria</option>

                      </select>
                    </td>
                  </tr>

                  <tr class="tipo_pago" id="tipo_pago">

                    <td>
                      <h5 class="mb-3 titu_datos">Tipo de Pago </h5>
                    </td>
                    <td>
                      <input type="text" class="form-control" aria-describedby="emailHelp" required name="formato_pago" id="formato_pago" value='PAGO CORRIENTE' readonly>
                    </td>
                    <input type="text" id="paginado" hidden value='0'>
                    <input type="text" id="tipo_solicitud" class="tipo_solicitud" hidden value='0' name="tipo_solicitud">
                  </tr>
                </tbody>

              </table>

              <div class="caja_pago_tarjeta" id="caja_pago_tarjeta">

                <h6 class="mb-3 titu_pagos">Aceptamos pagos correientes UNICAMENTE con:</h6>

                <img src="images/aceptamos-visa-y-mastercard.jpg" class="img-fluid" alt="...">
                <br>
                <span class="info_pago">Los pagos con tarjetas <b>Dinners Club</b> aún no están
                  disponibles.</span>
                <br>
                <span class="sitio_pago">Sitio protegido con:</span>
                <br>

                <img src="images/ssl-seguro-facturacion-electronica.png" class="img-fluid" alt="...">

              </div>





            </div>


            <div class="caja_transferencia" id="caja_transferencia" style="display:none;">
              <div class="form-cuenta" id="forma_pago_banco" style="display: inline;">
                <div class="form-group row negro">
                  <div class="col-sm-4">
                    <label class="col-form-label">Transferencia Bancaria</label>
                    <img class="col-form-label" src="images/pichincha.png">
                  </div>
                  <div class="col-sm-8 margen-top5">
                    <span>Banco: Pichincha</span><br> <span>Tipo de Cuenta:
                      Cuenta Corriente</span><br> <span># de Cuenta: 3486271004</span><br>
                    <span>Titular: Patricio Constante</span><br> <span>RUC:
                      1804008520001</span><br> <span>Email: <a href="mailto:gerencia@connectaservices.com">gerencia@connectaservices.com</a></span>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <input id="terminos" type="checkbox" name="terminos" id="terminos">
            <span class="terminos"> He leído y estoy de acuerdo con los <a href="https://connectaservices.com/terminos-condiciones.php" target="_bank"> Términos y
                Condiciones</a> de ConnectaServices
            </span>

          </div>
        </div>

      </div>






    </div>

  </div>


  </div>




  </div>
  </div>

  <div class="botones" id="botones">

    <button type="button" class="btn btn-primary  prev  " id="prev"><i class="fa fa-chevron-left"></i>Atras</button>
    <button type="button" class="btn btn-success  next " id="next">Siguiente <i class="fa fa-chevron-right"></i></button>
    <button type="button" class="btn btn-success   js-payment-checkout " id="pagar" style="display: none" disabled>Pagar </i></button>
    <button type="button" class="btn btn-success    enviar" id="enviar" style="display: none" disabled >Enviar </i></button>


  </div>

  	<a href="https://wa.me/593987369163?text=Hola%20estoy%20interesado%20en%20el%20Software%20de%20Facturación%20Electrónica%20Facturaenlinea.ec" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>


  <script src="validacion_form.js"></script>
  <script src="script.js"></script>
  <script src="ajax.js"></script>
  <script src="validacion.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    


  </script>


</body>


<footer>

<div class="image_footer">

<a href="">


<img src="https://www.contifyplus.com/wp-content/uploads/2020/08/LOGO-CONTIFYPLUS-03.png" data-src="https://www.contifyplus.com/wp-content/uploads/2020/08/LOGO-CONTIFYPLUS-03.png" class="img-fluid" alt="" data-was-processed="true" width="120" height="120">

</a>

</div>


<div class="row primary">
  <div class="column about">

  <img src="https://www.contifyplus.com/wp-content/uploads/2020/08/logo_Mesa-de-trabajo-1-copia.png" alt=""  class="img-fluid"  width="500" height="500">



</div>

<div class="column links">
<h3 class="titutlo_footer">Contacto</h3>

<ul class="foolist">
            <li class="lista_footer"> <i class="fa fa-map-marker" aria-hidden="true"></i> Av. Rodrigo Pachano 24-174 y Los Guaytambos</li>
            <li class="lista_footer"><i class="fa fa-envelope" aria-hidden="true"></i> ventas@connectaservices.com</li>
            <li class="lista_footer"> <i class="fa fa-phone" aria-hidden="true"></i> 0987369163 -(03) 2513002</li>

        </ul>

</div>


<div class="column links">
  <h3 class="titutlo_footer">Redes Sociales</h3>
  <ul class="foolist">
            <li  class="lista_footer">Síguenos en:</li>
            <li  class="lista_footer "><i class="fa fa-facebook icono"></i></li>
            <li  class="lista_footer">Todos los drechos reservados  <a href="https://www.contifyplus.com"><strong class="conti_plus">Contiflyplus</strong></a></li>
           
        </ul>
</div>



</div>



</footer>






</html>