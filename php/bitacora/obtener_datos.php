<?php
    include '../conn.php';

    $registros = mysqli_query($conexion, "SELECT * FROM `bitacora` ORDER BY `bitacora`.`modificado` DESC") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($fila = mysqli_fetch_array($registros)) {
    $a = $fila['nom_usuario'];
    $b = $fila['accion_realizada'];
    $c = $fila['tabla'];
    $cb = $fila['usuario'];
    $d = $fila['modificado'];
    
    }
    echo $registros;
?>