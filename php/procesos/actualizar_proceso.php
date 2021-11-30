<?php 

include '../conn.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];

if(isset($_POST)){
    // Validación de existencia de los datos
    if(!empty($nombre)) {

        // Consulta Update MySQL
        $query = mysqli_query($conexion, "UPDATE procesos SET nombre = '$nombre' WHERE codigo = $id");

        if($query) {
            // En caso de exito
            echo json_encode($response = array("status" => "success", "message" => "Actualización exitosa"));
        }else {
            // En caso de error
            echo json_encode($response = array("status" => "error", "message" => "Ocurrió un error al intentar actualizar"));
        }

    }else {
        // En caso de que la validación de los datos no se cumpla
        echo json_encode($response = array("status" => "error", "message" => "Debes llenar todos los campos"));
    }
}

?>