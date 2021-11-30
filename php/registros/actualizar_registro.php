<?php 

include '../conn.php';

$codigopk=$_POST['codigo'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$revision=$_POST['revision'];
$archivo=$_POST['archivo'];

if(isset($_POST)) {
    // Validación de existencia de los datos
    if(!empty($codigopk) &&
    !empty($nombre) &&
    !empty($fecha) &&
    !empty($revision) &&
    !empty($proposito) &&
    !empty($alcance) &&
    !empty($archivo)) {

    // Consulta Update MySQL
    $query = mysqli_query($conexion, "UPDATE registros
        SET nombre = '$nombre',
        fecha = '$fecha',
        revision = $revision,
        archivo = '$archivo'
        WHERE codigo = '$codigopk'"
    );

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