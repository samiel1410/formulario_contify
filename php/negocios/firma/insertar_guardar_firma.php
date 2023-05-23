<?php  

require_once  ("../../../php/clases/firma/firma.php");

$documento= $_POST['documento'];
$con_ruc_firma= $_POST['ruc_pre'];
$nro_dcto_firma= $_POST['nume_documento'];
if($documento==1){
    $tipo_identificacion_firma="CEDULA";

    if($con_ruc_firma=="si"){
        $ruc_firma = $nro_dcto_firma.'001'; 

    }else{
        $ruc_firma = $_POST['ruc_firma'];
    }


}else{
    $tipo_identificacion_firma="PASAPORTE";

    if($con_ruc_firma=="si"){
        $ruc_firma = $_POST['ruc_firma']; 

    }else{
        $ruc_firma = $_POST['ruc_firma'];
    }
}



$nombre_firma =  $_POST['nombre'];

$primer_apellido_firma =$_POST['primer_apellido'];

$segundo_apellido_firma =$_POST['segundo_apellido'];

$fecha_nac_firma = $_POST['fecha'];
$nacionalidad_firma = $_POST['nacionalidad'];

$celular_principal_firma = $_POST['celular_1'];

$correo_principal_firma= $_POST['email_1'];

$sexo = $_POST['sexo'];

if($sexo ==1){
    $sexo_firma = "FEMENINO";
}else{
    $sexo_firma = "MASCULINO";
}

$celular_auxiliar_firma= $_POST['celular_2'];

$correo_auxiliar_firma= $_POST['email_2'];





//validacion






$id_fkprovincia_firma=$_POST['provincia'];
$id_fkciudad_firma=$_POST['ciudad'];
$direccion_firma=$_POST['direccion'];
$formato_firma='.P12';
$tiempo_firma=$_POST['vigencia']."años";
$fecha_registro_firma = date('Y-m-d H:i:s');
$estado_firma = 'PENDIENTE';


//Datos subtotal
$tipo_pago_firma=$_POST['forma_pago'];
$subtotal_firma=$_POST['subtotal'];
$iva_firma = $_POST['iva'];
$total_forma = $_POST['total'];


$detalle_firma="NO SE SABE";

///Datos
$tipo_solicitud=$_POST['tipo_solicitud'];
$ruc_empresa_firma=$_POST['ruc_empre'];
$razon_social_empresa_firma =$_POST['razon_social'];
$cargo_empresa=$_POST['cargo_represe'];

$estado_seguimiento="";
$observacion_firma=""; 
$fecha_ult_mod_firma=""; 
$usuario_mod_firma ="";
$tipo_firma_origen=""; 
$id_fkfacturaenlinea ="";


$codigo_dactilar = $_POST['codigo_dactilar'];

$ver= new metodosFirma();

$ver->insertar_firma($tipo_identificacion_firma,$nro_dcto_firma,$nombre_firma,$primer_apellido_firma,$segundo_apellido_firma,$fecha_nac_firma,$nacionalidad_firma,$celular_principal_firma,$correo_principal_firma,$sexo_firma,$celular_auxiliar_firma,$correo_auxiliar_firma
,$con_ruc_firma,$ruc_firma,$id_fkprovincia_firma,$id_fkciudad_firma,$direccion_firma,$formato_firma,$tiempo_firma,$fecha_registro_firma,$estado_firma,$tipo_pago_firma,$subtotal_firma,
$iva_firma,$total_forma ,$detalle_firma ,$tipo_solicitud ,$ruc_empresa_firma,$razon_social_empresa_firma,$cargo_empresa,$estado_seguimiento ,$observacion_firma ,$fecha_ult_mod_firma , $usuario_mod_firma ,$codigo_dactilar, $tipo_firma_origen ,$id_fkfacturaenlinea
);







?>
