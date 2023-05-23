
<?php
require_once ("../../../php/base/db.php");

class metodosCiudad
{


    public function verCiudad($inicio, $limite,$id_provinica )
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();
        $query = "SELECT id,canton from tbl_canton WHERE id_provincia = $id_provinica ";

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $total = mysqli_num_rows($sql);
        $response->success = true;
        $response->total = $total;
        $response->mensaje = "Nacionalidades";
        $i = 0;

        while ($vals = mysqli_fetch_array($sql)) {

            $data[$i]['id'] = $vals['id'];
            $data[$i]['canton'] = utf8_encode($vals['canton']);
          
            
            $i ++;
        }
        $response->data = array_slice($data, $inicio, $limite);
        echo json_encode($response);
    }


    


   
}

?>