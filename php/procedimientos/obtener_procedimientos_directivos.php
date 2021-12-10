<?php 

include '../conn.php';

$query = mysqli_query($conexion, 'SELECT * FROM `procedimientos` WHERE id_proceso = 2');
$response = array();

if(mysqli_num_rows($query) > 0) {

    while($data = mysqli_fetch_array($query)) {

        $proccedure = array(
            'codigo' => $data['codigo'],
            'nombre' => $data['nombre'],
            'fecha' => $data['fecha'],
            'revision' => $data['revision'],
            'proposito' => $data['proposito'],
            'alcance' => $data['alcance'],
            'id_proceso' => $data['id_proceso'],
            'archivo' => $data['archivo']
        );


        array_push($response, $proccedure);
    }

}else {
    $reponse = array('status' => 'error', 'message' => 'Sin procedimientos');
}

echo json_encode($response);

?>