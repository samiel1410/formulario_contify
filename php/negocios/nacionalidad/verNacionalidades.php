<?php  

require_once  ("../../../php/clases/nacionalidad/nacionalidad.php");


$inicio = 0;
$limite = 50;



$ver= new metodosNacionalidad();
$ver->verNacionalidades($inicio,$limite);

?>
