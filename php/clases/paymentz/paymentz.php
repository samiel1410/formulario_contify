
<?php
require_once ("../../../php/base/db.php");

class metodosPaymentz
{


    public function insertar_paymentz(  $estado_pago_paymentez ,
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
    $estado_pago_erp)
    {
        $conn = conexion();

        $query = "CALL insertar_pago_paymentz( 
            '$estado_pago_paymentez' ,
            '$fecha_pago_paymentez' ,
            '$monto_pago_paymentez' ,
           '$autorizacion_pago_paymentez',
            '$id_retorno_pago_paymentez' ,
            '$bin_pago_paymentez' ,
            '$transaccion_reference_pago_paymentez' ,
            '$estado_local_pago_paymentez' ,
            '$id_fkcliente_pago_paymentez' ,
            '$fecha_local_pago_paymentez' ,
            '$fecha_maxima_anulacion',
            '$hora_efectuada_pago',
            '$estado_pago_erp'
        ) ";

      

    

        $guardar = mysqli_query($conn, $query) or die(mysqli_error($conn));


       
            if($guardar)
            {
                $arry = array(
                "success" => true,
                "respuesta" => 'Guardado Pago Paymentz' ,
              
    
            
            );
                
               
            }else{

                $arry = array(
                    "success" => false,
                    "respuesta" => 'Fallo' ,
        
                
                );
            }
            echo json_encode($arry);
     
    }


    


   
}

?>