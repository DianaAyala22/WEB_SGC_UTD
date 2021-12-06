<!doctype html>
<html lang="en">

<head>

  <!--datables CSS básico-->
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
  <!--datables estilo bootstrap 4 CSS-->
  <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href="../img/utdlogo.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SGC UTD</title>
   <?php include "../resources/resources.php" ?>
</head>

<body>
<div class="container-template">
       
       <?php include "../components/sidebar.php" ?>
      
       <main class="main">
         <?php $icon = "far fa-calendar" ?>
           <?php $title = "Bitácora" ?> 
           <?php include "../components/header.php" ?>
           <!-- Contenido -->
          <!--Ejemplo tabla con DataTables-->
          <div class="container mt-5">
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nombre de usuario</th>
                        <th>Acción realizada</th>
                        <th>Tabla afectada</th>
                        <th>Usuario que realizó acción</th>
                        <th>Fecha y hora</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Margarita</td>
                        <td>Visualización de los datos</td>
                        <td>Procedimientos</td>
                        <td>Margarita Herrera</td>
                        <td>03/12/2021</td>      
                      </tr>
                      <tr>
                        <td>Margarita</td>
                        <td>Actualización de los datos</td>
                        <td>Registros</td>
                        <td>Margarita Herrera</td>
                        <td>03/12/2021</td>      
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
           <!-- Contenido -->
       </main>
   </div>
   
   <?php include "../resources/scripts.php" ?>
  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="jquery/jquery-3.3.1.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- datatables JS -->
  <script type="text/javascript" src="datatables/datatables.min.js"></script>

  <script type="text/javascript" src="main.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>