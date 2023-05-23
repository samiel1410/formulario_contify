<?php  

require_once  ("../../../php/clases/recuperar/obtener.php");


$inicio = 0;
$limite = 50;


$ver= new metodosObtener();
$ver->verDatos($inicio,$limite);

?>
