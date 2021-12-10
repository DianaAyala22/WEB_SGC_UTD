<?php

session_start();

?>

<?php
include '../conn.php';

$codigopk=$_POST['codigo'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$revision=$_POST['revision'];
$idfk=$_POST['codigofk'];
$archivo=$_POST['archivo'];





$namepdf = $_FILES['archivo']['name'];
$guardado = $_FILES['archivo']['tmp_name'];
$expensions= array("pdf");
$file_ext=strtolower(end(explode('.',$_FILES['archivo']['name'])));

$version= $namepdf.$revision.".pdf";




mysqli_query($conexion, "INSERT INTO `registros` (`codigo`, `nombre`, `fecha`, `revision`, `codigo_procedimiento`, `archivo`) 
VALUES ('$codigopk', '$nombre', '$fecha', '$revision', '$idfk', '$version');")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);


    
    
    
    if(in_array($file_ext,$expensions)== true){
      if (!file_exists('archivos')) {
        mkdir('archivos', 0777, true);
        if (file_exists('archivos')) {
           
         
          if (move_uploaded_file($guardado, 'archivos/' . $namepdf.$revision.".pdf")) {
            $ok[]="Operacion realizada con exito";
            $_SESSION['ok'] = $ok[0];
            if(isset($_SESSION['error'])){
              unset($_SESSION['error']);
            }
        
            header("Location: ../../pages/registros.php");
          } else {
            $errors[]="La operacion ha fallado";
          $_SESSION['error'] = $errors[0];
          if(isset($_SESSION['ok'])){
            unset($_SESSION['ok']);
          }
        
          header("Location: ../../pages/registros.php");
          }
        }
      } else {
        if (move_uploaded_file($guardado, 'archivos/'  . $namepdf.$revision.".pdf")) {
          $ok[]="Operacion realizada con exito";
            $_SESSION['ok'] = $ok[0];
            if(isset($_SESSION['error'])){
              unset($_SESSION['error']);
            }
          
            header("Location: ../../pages/registros.php");
        } else {
          $errors[]="La operacion ha fallado";
          $_SESSION['error'] = $errors[0];
          if(isset($_SESSION['ok'])){
            unset($_SESSION['ok']);
          }
          header("Location: ../../pages/registros.php");
      
        }
      }
      
    }else{
      $errors[]="Solo puedes subir archivos de tipo pdf";
      $_SESSION['error'] = $errors[0];
      if(isset($_SESSION['ok'])){
        unset($_SESSION['ok']);
      }
      header("Location: ../../pages/registros.php");
    
    
    }
  

?>  