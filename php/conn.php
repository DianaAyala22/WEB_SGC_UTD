<?php

// $localhost='localhost';
// $user='u439202014_sgcutd';
// $ps='SgcUtd123_';
// $db='u439202014_sgcutd';
// $conexion = mysqli_connect($localhost, $user, $ps,$db);

$localhost='localhost';
$user='root';
$ps='';
$db='sgc_utd';
$conexion = mysqli_connect($localhost, $user, $ps,$db);

if ($conexion->connect_errno) {
  echo "Ocurrió un error al intentar conectar la app con la base de datos: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

echo $conexion->host_info . "\n";

?>