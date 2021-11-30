<?php 

include '../conn.php';

$codigopk=$_POST['codigopk'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$revision=$_POST['revision'];
$proposito=$_POST['proposito'];
$alcance=$_POST['alcance'];
$idfk=$_POST['idfk'];
$archivo=$_POST['archivo'];

if(isset($_POST)) {
    // Validación de existencia de los datos
    if(!empty($codigo) &&
    !empty($nombre) &&
    !empty($fecha) &&
    !empty($revision) &&
    !empty($proposito) &&
    !empty($alcance) &&
    !empty($codigo)&&
    !empty($idfk) && 
    !empty($archivo)) {

        // Consulta Update MySQL
        $query = mysqli_query($conexion, "UPDATE procedimientos
            SET nombre = '$nombre',
            fecha = '$fecha',
            revision = $revision,
            proposito = '$proposito',
            alcance = '$alcance',
            archivo = '$archivo'
            WHERE codigo = '$codigo'"
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