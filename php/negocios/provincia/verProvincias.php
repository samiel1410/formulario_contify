<?php  

require_once  ("../../../php/clases/provincia/provincia.php");


$inicio = 0;
$limite = 50;


$ver= new metodosProvincia();
$ver->verProvincia($inicio,$limite);

?>
