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
  <title>SGC Registros</title>
  <?php include "../resources/resources.php" ?>
</head>

<body>
  <div class="container-template">

    <?php include "../components/sidebar.php" ?>

    <main class="main">
      <?php $icon = "far fa-tasks" ?>
      <?php $title = "Registros" ?>
      <?php include "../components/header.php" ?>
      <!-- Contenido -->

      <div class="container">
          <h1 class="mb-3 text-center mt-5">Registros</h1>

            <form class="d-flex form" action="../php/registros/agregar_registro.php" method="post">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-success" type="submit">Buscar</button>
            </form>

          <form class="needs-validation" action="../php/registros/agregar_registro.php" name="form_registros"
            method="POST">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="" value="" required>
              </div>

              <div class="col-sm-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
              </div>

              <div class="col-sm-6">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="" value="" required>
              </div>

              <div class="col-sm-6">
                <label for="revision" class="form-label">Revisión</label>
                <input type="number" class="form-control" id="revision" name="revision" placeholder="" value=""
                  required>
              </div>

              <div class="col-sm-6">
                <label for="codigofk" class="form-label">Código FK</label>
                <select id="idfk" class="form-control" name="codigofk">
                  <option value="0" disabled selected>Seleccione un proceso</option>


                  <?php
                    include '../php/conn.php';
                    $registros =  mysqli_query($conexion, "select codigo,nombre from procedimientos") or die("Problemas en el select:" . mysqli_error($conexion));

                    while ($reg = mysqli_fetch_array($registros)) {
                      ?>
                            <option value="<?php echo $reg['codigo'] ?>"> <?php echo $reg['codigo']. " ".  $reg['nombre'] ?>
                            </option>
                            <?php
                    }

                  ?>
                </select>
              </div>

              <div class="col-sm-6">
                <label for="archivo" class="form-label">Archivo</label>
                <input type="file" class="form-control" id="archivo" name="archivo" placeholder="" value="" required>
              </div>

              <hr class="my-4">

              <div class="row form-buttons">
                <div class="col">
                  <button onclick="confirmar()" class="w-100 btn btn-success btn-lg col-sm-4"
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
                        document.form_registros.submit();
                      }
                      return false;
                    })
                  }
                </script>

                <div class="col">
                  <button class="w-100 btn btn-success btn-lg col-sm-4" type="submit">Actualizar</button>
                </div>
                <div class="col">
                  <button class="w-100 btn btn-warning btn-lg col-sm-4" type="submit">Eliminar</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <?php include "../resources/scripts.php" ?>

</body>

</html>