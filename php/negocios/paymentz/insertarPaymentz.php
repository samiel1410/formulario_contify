<?php  
date_default_timezone_set('America/Guayaquil');
require_once  ("../../../php/clases/paymentz/paymentz.php");


$estado_pago_paymentez = $_POST['estado_pago_paymentez'];
$fecha_pago_paymentez = $_POST['fecha_pago_paymentez'];
$monto_pago_paymentez = $_POST['monto_pago_paymentez'];
$autorizacion_pago_paymentez = $_POST['autorizacion_pago_paymentez'];
$id_retorno_pago_paymentez = $_POST['id_retorno_pago_paymentez'];
$bin_pago_paymentez = $_POST['bin_pago_paymentez'];
$transaccion_reference_pago_paymentez = $_POST['transaccion_reference_pago_paymentez'];
$estado_local_pago_paymentez = $_POST['estado_local_pago_paymentez'];
$id_fkcliente_pago_paymentez = $_POST['id_fkcliente_pago_paymentez'];
$fecha_local_pago_paymentez =date("Y-m-d h:i:sa");




$fecha_aux_entrada=$_POST['fecha_maxima_anulacion'];

$time = strtotime($fecha_aux_entrada);

$fecha_aux = date('Y-m-d',$time);

$hora = date('h:i:sa',$time);

$hora_efectuada_pago = $hora;


$hora_comparar = strtotime( "17:40" );

if( $hora > $hora_comparar ) {
    $fecha_maxima_anulacion =  date("Y-m-d",strtotime($fecha_aux."+ 1 days"));
} else {
    $fecha_maxima_anulacion= $fecha_aux  ;
}  




$estado_pago_erp = $_POST['estado_pago_erp'];



$ver= new metodosPaymentz();
$ver->insertar_paymentz(

    $estado_pago_paymentez ,
    $fecha_pago_paymentez ,
    $monto_pago_paymentez ,
    $autorizacion_pago_paymentez,
    $id_retorno_pago_paymentez ,
    $bin_pago_paymentez ,
    $transaccion_reference_pago_paymentez ,
    $estado_local_pago_paymentez ,
    $id_fkcliente_pago_paymentez ,
    $fecha_local_pago_paymentez ,
    $fecha_maxima_anulacion,
    $hora_efectuada_pago ,
    $estado_pago_erp 
    



);

?>
