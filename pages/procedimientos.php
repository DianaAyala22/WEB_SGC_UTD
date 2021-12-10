<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href="../img/utdlogo.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SGC Procedimientos</title>
  <?php include "../resources/resources.php" ?>
</head>

<body>
  <div class="container-template">
    <?php include "../components/sidebar.php" ?>

    <main class="main">
      <?php $icon = "far fa-folders" ?>
      <?php $title = "Procedimientos" ?>
      <?php include "../components/header.php" ?>
      <!-- Contenido -->

      <div class="container">
          <h1 class="mb-3 text-center mt-5">Procedimientos</h1>

            <form class="d-flex form">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-success" type="submit">Buscar</button>
            </form>
          
            <form class="form" action="../php/procedimientos/agregar_procedimiento.php" method="post"
              name="form_procedimientos" id="form_procedimientos" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-6">
                  <label for="codigopk" class="form-label">Código PK</label>
                  <input type="text" class="form-control" name="codigopk" id="codigopk" placeholder="" value="" required>
                </div>
  
                <div class="col-sm-6">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" value="" required>
                </div>
  
                <div class="col-sm-6">
                  <label for="fecha" class="form-label">Fecha</label>
                  <input type="date" class="form-control" name="fecha" id="fecha" placeholder="" value="" required>
                </div>
  
                <div class="col-sm-6">
                  <label for="revision" class="form-label">Revisión</label>
                  <input type="number" class="form-control" name="revision" id="revision" placeholder="" value=""
                    required>
                </div>
  
                <div class="col-sm-6">
                  <label for="proposito" class="form-label">Propósito</label>
                  <input type="text" class="form-control" name="proposito" id="proposito" placeholder="" value=""
                    required>
                </div>
  
                <div class="col-sm-6">
                  <label for="alcance" class="form-label">Alcance</label>
                  <input type="text" class="form-control" name="alcance" id="alcance" placeholder="" value="" required>
                </div>
  
  
                <div class="col-sm-6">
                  <label for="idfk" class="form-label">Id FK</label>
                  <select id="idfk" class="form-control" name="idfk">
                    <option value="0" disabled selected>Seleccione un proceso</option>
  
  
                    <?php
  
  
                  include '../php/conn.php';
  
  
                  $registros =  mysqli_query($conexion, "select id,nombre from procesos") or die("Problemas en el select:" . mysqli_error($conexion));
  
                  while ($reg = mysqli_fetch_array($registros)) {
                  ?>
                    <option value="<?php echo $reg['id'] ?>"> <?php echo $reg['nombre'] ?> </option>
                    <?php
                  }
  
                  ?>
                  </select>
  
                </div>
  
                <div class="col-sm-6">
                  <label for="archivo" class="form-label">Archivo</label>
                  <input type="file" class="form-control" name="archivo" id="archivo" placeholder="" value="" required>
                </div>
  
                <hr class="my-4">
  
                <div class="row">
                  <div class="col">
                    <button onclick='confirmar()' class="w-100 btn btn-success btn-lg col-sm-4"
                      type="button">Agregar</button>
                  </div>
  
                  <script>
                    function confirmar() {
                      event.preventDefault();
  
                      Swal.fire({
                        title: '¿Seguro de enviar el formulario?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si',
                        cancelButtonText: "No",
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                      }).then((result) => {
                        if (result.value) {
                          document.form_procedimientos.submit();
                        }
                        return false;
                      })
                    }
                  </script>
  
  
                  <div class="col">
                    <button class="w-100 btn btn-success btn-lg col-sm-4" type="submit">Actualizar</button>
                  </div>
                  <div class="col">
                    <button class="w-100 btn btn-warning btn-lg col-sm-4 yellow" type="submit">Eliminar</button>
                  </div>
                </div>
            </form>
          </div>

      <!-- Contenido -->
    </main>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <?php include "../resources/scripts.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>