<?php
session_start();

include '../conn.php';

$codigopk = $_POST['codigopk'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$revision = $_POST['revision'];
$proposito = $_POST['proposito'];
$alcance = $_POST['alcance'];
$idfk = $_POST['idfk'];
$namepdf = $_FILES['archivo']['name'];
$guardado = $_FILES['archivo']['tmp_name'];

$version= $namepdf.$revision.".pdf";


$query=mysqli_query($conexion, "INSERT INTO `procedimientos` (`codigo`, `nombre`, `fecha`, `revision`, `proposito`, `alcance`, `id_proceso`, `archivo`)
VALUES ('$codigopk', '$nombre', '$fecha', '$revision', '$proposito', '$alcance', '$idfk', '$version')")
   or die("Problemas en el select " . mysqli_error($conexion));

  
 
      $expensions= array("pdf");
      $file_ext=strtolower(end(explode('.',$_FILES['archivo']['name'])));
      
      
      
      if(in_array($file_ext,$expensions)== true){
        if (!file_exists('archivos')) {
          mkdir('archivos', 0777, true);
          if (file_exists('archivos')) {
             
           
            if (move_uploaded_file($guardado, 'archivos/' . $namepdf . $revision.".pdf" )) {
              $ok[]="Operacion realizada con exito";
              $_SESSION['ok'] = $ok[0];
              if(isset($_SESSION['error'])){
                unset($_SESSION['error']);
              }
          
              header("Location: ../../pages/procedimientos.php");
            } else {
              $errors[]="La operacion ha fallado";
            $_SESSION['error'] = $errors[0];
            if(isset($_SESSION['ok'])){
              unset($_SESSION['ok']);
            }
          
            header("Location: ../../pages/procedimientos.php");
            }
          }
        } else {
          if (move_uploaded_file($guardado, 'archivos/' . $namepdf . $revision .".pdf")) {
            $ok[]="Operacion realizada con exito";
              $_SESSION['ok'] = $ok[0];
              if(isset($_SESSION['error'])){
                unset($_SESSION['error']);
              }
            
              header("Location: ../../pages/procedimientos.php");
          } else {
            $errors[]="La operacion ha fallado";
            $_SESSION['error'] = $errors[0];
            if(isset($_SESSION['ok'])){
              unset($_SESSION['ok']);
            }
            header("Location: ../../pages/procedimientos.php");
        
          }
        }
        
      }else{
        $errors[]="Solo puedes subir archivos de tipo pdf";
        $_SESSION['error'] = $errors[0];
        if(isset($_SESSION['ok'])){
          unset($_SESSION['ok']);
        }
        header("Location: ../../pages/procedimientos.php");
      
      
      }
    





  
?>

