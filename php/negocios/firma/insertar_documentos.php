<?php  

require_once  ("../../../php/clases/firma/firma.php");


$fotoLadoFrontalCedula  = $_FILES['fotoLadoFrontalCedula']['tmp_name'];


$fotoLadoPosteriorCedula  = $_FILES['fotoLadoPosteriorCedula']['tmp_name'];

$fotoSelfieCedula  = $_FILES['fotoSelfieCedula']['tmp_name'];

$pdfRuc  =$_FILES['pdfRuc']['tmp_name'];

$id_fkfirma_archivo=$_POST['id_fkfirma_archivo'];

if(isset($_FILES['pdfRucOpcional']['tmp_name'])){

    $pdfRucOpcional  = $_FILES['pdfRucOpcional']['tmp_name'];
}else{
    $pdfRucOpcional ="";
}







$ver= new metodosFirma();
$ver->insertar_documentos($id_fkfirma_archivo,$fotoLadoFrontalCedula,$fotoLadoPosteriorCedula,$fotoSelfieCedula,$pdfRuc,$pdfRucOpcional);

?>
