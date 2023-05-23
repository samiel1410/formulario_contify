
<?php
require_once ("../../../php/base/db.php");

class metodosObtener
{


    public function verDatos($inicio, $limite )
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();
        $query = "SELECT * from datos ";

      

    

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $total = mysqli_num_rows($sql);
        $response->success = true;
        $response->total = $total;
        $response->mensaje = "Datos";
        $i = 0;

        while ($vals = mysqli_fetch_array($sql)) {

            $data[$i]['code_cliente'] = $vals['code_cliente'];
            $data[$i]['key_cliente'] = $vals['key_cliente'];
            $data[$i]['ambiente'] = $vals['ambiente'];
          
            
            $i ++;
        }
        $response->data = array_slice($data, $inicio, $limite);
        echo json_encode($response);
    }


    


   
}

?>