

<?php
include '../conn.php';

$codigopk=$_POST['codigo'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$revision=$_POST['revision'];
$idfk=$_POST['codigofk'];
$archivo=$_POST['archivo'];





mysqli_query($conexion, "INSERT INTO `registros` (`codigo`, `nombre`, `fecha`, `revision`, `codigo_procedimiento`, `archivo`) 
VALUES ('$codigopk', '$nombre', '$fecha', '$revision', '$idfk', '$archivo');")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  header("Location: ../../pages/registros.php");
  die();
?>  