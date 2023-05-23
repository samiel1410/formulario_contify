
<?php
require_once ("../../../php/base/db.php");

class metodosNacionalidad
{


    public function verNacionalidades($inicio, $limite )
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();
        $query = "SELECT * from nacionalidad ";

      

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $total = mysqli_num_rows($sql);
        $response->success = true;
        $response->total = $total;
        $response->mensaje = "Datos";
        $i = 0;

        while ($vals = mysqli_fetch_array($sql)) {

            $data[$i]['id_nacionalidad'] = $vals['id_nacionalidad'];
            $data[$i]['nombre_nacionalidad'] = utf8_encode($vals['nombre_nacionalidad']);
 
            $i ++;
        }

        $response->data = array_slice($data, $inicio, $limite);
        echo json_encode($response);


    }


    


   
}

?>