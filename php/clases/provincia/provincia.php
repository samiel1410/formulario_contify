

<?php
require_once ("../../../php/base/db.php");

class metodosProvincia
{


    public function verProvincia($inicio, $limite )
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();
        $query = "SELECT * from tbl_provincia ";

      

    

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $total = mysqli_num_rows($sql);
        $response->success = true;
        $response->total = $total;
        $response->mensaje = "Datos";
        $i = 0;

        while ($vals = mysqli_fetch_array($sql)) {

            $data[$i]['id'] = $vals['id'];
            $data[$i]['provincia'] =utf8_encode( $vals['provincia']);
            $i ++;
        }
        $response->data = array_slice($data, $inicio, $limite);
        echo json_encode($response);
    }


    


   
}

?>