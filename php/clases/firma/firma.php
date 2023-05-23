
<?php
require_once ("../../../php/base/db.php");

class metodosFirma
{


    public function insertar_firma($tipo_identificacion_firma,$nro_dcto_firma,$nombre_firma,$primer_apellido_firma,$segundo_apellido_firma,$fecha_nac_firma,$nacionalidad_firma,$celular_principal_firma,$correo_principal_firma,$sexo_firma,$celular_auxiliar_firma,$correo_auxiliar_firma,$con_ruc_firma,$ruc_firma
    ,$id_fkprovincia_firma,$id_fkciudad_firma,$direccion_firma,$formato_firma,$tiempo_firma,$fecha_registro_firma,$estado_firma,$tipo_pago_firma,$subtotal_firma,
    $iva_firma,$total_forma ,$detalle_firma ,$tipo_solicitud ,$ruc_empresa_firma,$razon_social_empresa_firma,$cargo_empresa,$estado_seguimiento ,$observacion_firma ,$fecha_ult_mod_firma , $usuario_mod_firma ,$codigo_dactilar, $tipo_firma_origen ,$id_fkfacturaenlinea)
    {
        $conn = conexion();
 

      
        
        $query = "CALL insertar_datos_firma(
        '$tipo_identificacion_firma',
        '$nro_dcto_firma',
        '$nombre_firma',
        '$primer_apellido_firma',
        '$segundo_apellido_firma',
        '$fecha_nac_firma',
        '$nacionalidad_firma',
        '$celular_principal_firma',
        '$correo_principal_firma',
        '$sexo_firma',
        '$celular_auxiliar_firma',
        '$correo_auxiliar_firma'
        ,'$con_ruc_firma',
        '$ruc_firma',
        '$id_fkprovincia_firma',
        '$id_fkciudad_firma',
        '$direccion_firma',
        '$formato_firma',
        '$tiempo_firma',
        '$fecha_registro_firma',
        '$estado_firma',
        '$tipo_pago_firma',
        '$subtotal_firma',
        '$iva_firma',
        '$total_forma',
        '$detalle_firma',
        '$tipo_solicitud',
        '$ruc_empresa_firma',
        '$razon_social_empresa_firma',
        '$cargo_empresa',
        '$estado_seguimiento',
        '$observacion_firma',
        '$fecha_ult_mod_firma',
        '$usuario_mod_firma',
        '$codigo_dactilar',
        '$tipo_firma_origen',
        '$id_fkfacturaenlinea') ";

      

    

   

        $guardar = mysqli_query($conn, $query) or die(mysqli_error($conn));


        $recueperar_sql= "SELECT MAX(id_firma) As id from  registro_firma";
        $sql = mysqli_query($conn, $recueperar_sql) or die(mysqli_error($conn));
        $vals = mysqli_fetch_array($sql);
        $id=  $vals['id'];
            if($guardar)
            {
                $arry = array(
                "success" => true,
                "respuesta" => 'Exitososo' ,
                "id"=>$id
    
            
            );
                
               
            }else{

                $arry = array(
                    "success" => false,
                    "respuesta" => 'Fallo' ,
        
                
                );
            }
            echo json_encode($arry);
    }


    public function insertar_documentos($id_fkfirma_archivo,$fotoLadoFrontalCedula,$fotoLadoPosteriorCedula,$fotoSelfieCedula,$pdfRuc,$pdfRucOpcional )
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();

      

      
       $origen= "CONTIFYPLUS";

        if($fotoLadoFrontalCedula){
            $fotoLadoFrontalCedula  = addslashes(file_get_contents($_FILES['fotoLadoFrontalCedula']['tmp_name']));
            $tipo_archivo = $_FILES['fotoLadoFrontalCedula']['type'];
            $nombre_archivo = $_FILES['fotoLadoFrontalCedula']['name'];
            $size =  $_FILES['fotoLadoFrontalCedula']['size'];


            $query = "CALL insertar_documentos_firma('$id_fkfirma_archivo','$fotoLadoFrontalCedula', '$tipo_archivo', '$nombre_archivo','$size', '$origen') ";

            $guardar = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($guardar)
            {
                $arry = array(
                    "success" => true,
                    "respuesta" => 'Guardado 1' ,
        
                
                );
                
            }
        }

         if($fotoLadoPosteriorCedula){

            $fotoLadoPosteriorCedula  = addslashes(file_get_contents($_FILES['fotoLadoPosteriorCedula']['tmp_name']));

            $tipo_archivo = $_FILES['fotoLadoPosteriorCedula']['type'];
            $nombre_archivo =$_FILES['fotoLadoPosteriorCedula']['name'];
            $size =  $_FILES['fotoLadoPosteriorCedula']['size'];


            $query = "CALL insertar_documentos_firma('$id_fkfirma_archivo','$fotoLadoPosteriorCedula','$tipo_archivo', '$nombre_archivo','$size', '$origen') ";

           

            $guardar = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($guardar)
            {
                $arry = array(
                    "success" => true,
                    "respuesta" => 'Guardado 2' ,
        
                
                );
                
            }

        }
        
       if($fotoSelfieCedula){
            $fotoSelfieCedula  = addslashes(file_get_contents($_FILES['fotoSelfieCedula']['tmp_name']));

            $tipo_archivo = $_FILES['fotoSelfieCedula']['type'];
            $nombre_archivo = $_FILES['fotoSelfieCedula']['name'];
            $size =  $_FILES['fotoSelfieCedula']['size'];


            $query = "CALL insertar_documentos_firma('$id_fkfirma_archivo','$fotoSelfieCedula', '$tipo_archivo', '$nombre_archivo' ,'$size', '$origen') ";

            

            $guardar = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($guardar)
            {
                $arry = array(
                    "success" => true,
                    "respuesta" => 'Guardado 3' ,
        
                
                );
              
            }
        }
        
         if($pdfRuc){

            $pdfRuc  = addslashes(file_get_contents($_FILES['pdfRuc']['tmp_name']));
          
            $tipo_archivo = $_FILES['pdfRuc']['type'];
            $nombre_archivo = $_FILES['pdfRuc']['name'];
            $size = $_FILES['pdfRuc']['size'];


            $query = "CALL insertar_documentos_firma('$id_fkfirma_archivo','$pdfRuc', '$tipo_archivo', '$nombre_archivo'  ,'$size', '$origen') ";
            $guardar = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($guardar)
            {
                $arry = array(
                    "success" => true,
                    "respuesta" => 'Guardado 4' ,
        
                
                );
               
            }

            echo json_encode($arry);

        }

            
        if($pdfRucOpcional!=""){

            $pdfRucOpcional  = addslashes(file_get_contents($_FILES['pdfRucOpcional']['tmp_name']));

            $tipo_archivo = $_FILES['pdfRucOpcional']['type'];
            $nombre_archivo = $_FILES['pdfRucOpcional']['name'];
            $size =  $_FILES['pdfRucOpcional']['size'];


            $query = "CALL insertar_documentos_firma('$id_fkfirma_archivo','$pdfRucOpcional', '$tipo_archivo', '$nombre_archivo'  ,'$size', '$origen') ";
            $guardar = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($guardar)
            {
                $arry = array(
                    "success" => true,
                    "respuesta" => 'Guardado 5' ,
        
                
                );
                
            }
        }


  

    


      

      

    

       

       
    }


    


   
}

?>