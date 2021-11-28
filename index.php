<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href="img/utdlogo.png" type="image/png"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login - SGC UTD</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5" data-aos="zoom-in">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light mt-0">
              <div class="text-center text-lg-start">
                <img src="img/utdlogo.png" alt="Logo UTD" style="height: 35px; width: 90px; display: block; margin: auto;">
                <h1 class="text-center display-4 fw-bold lh-1 mb-3">Bienvenido</h1>
                <p class="fs-4">Al Sistema Gestor de Calidad de la Universidad Tecnológica de Durango.</p>
              </div>
              <?php
              echo "<a class='w-100 py-2 mb-2 btn btn-outline-danger rounded-4 mt-3'  href=".$client->createAuthUrl().">Iniciar sesión</a>"
              ?>
              <hr class="my-4">
              <small class="text-muted">Para iniciar sesión deberá de ingresar con su cuenta institucional</small>
            </form>
          </div>
        </div>
      </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>