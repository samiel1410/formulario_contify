<?php

function conexion(){
   $database="formulario";
    $conn= mysqli_connect("localhost", "root", "", $database);

   /* 
    $database="legion";
    $conn= mysqli_connect("localhost", "root", "", $database);
     */
    if(!$conn){
        die("Error: Failed to connect to database!2");
    }

    
    return $conn;
}
?>