<?php
include '../conn.php';

echo $codigopk=$_POST['codigopk'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$revision=$_POST['revision'];
$proposito=$_POST['proposito'];
$alcance=$_POST['alcance'];
$idfk=$_POST['idfk'];
$archivo=$_POST['archivo'];





mysqli_query($conexion, "INSERT INTO `procedimientos` (`codigo`, `nombre`, `fecha`, `revision`, `proposito`, `alcance`, `id_proceso`, `archivo`)
 VALUES ('$codigopk', '$nombre', '$fecha', '$revision', '$proposito', '$alcance', '$idfk', '$archivo')")
    or die("Problemas en el select " . mysqli_error($conexion));

  mysqli_close($conexion);
?>

<?php
  header("Location: ../../pages/procedimientos.php");
  die();

?>  