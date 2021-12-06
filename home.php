<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href="img/utdlogo.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SGC - Home</title>
  <?php include "./resources/resources-home.php" ?>
</head>

<body>
  <div class="container-template">

    <?php include "./components/sidebar-home.php" ?>

    <main class="main main-home">
      <?php $icon = "far fa-home" ?>
      <?php $title = "Inicio" ?>
      <?php include "./components/header-home.php" ?>

      <!-- Contenido -->
      <div class="home-banner">
        <h1 class="home-banner-title">Sistema Gestor de Calidad</h1>
        <a href="./pages/dashboard.php" class="home-banner-button">Ver documentos</a>
      </div>

      <div class="home-cards">
        <div class="home-card">
          <img class="home-card-image" src="./img/politics-background.jpg" alt="Política de calidad imagen">
          <h3 class="home-card-title">Política de calidad</h3>
          <p class="home-card-description">
            El compromiso de la Universidad Tecnológica de Durango es ofrecer un servicio integral de educación pública de nivel superior trabajando con un enfoque innovador y de mejora continua basados en un Sistema de Gestión de Calidad.
          </p>
        </div>

        <div class="home-card">
          <img class="home-card-image" src="./img/home-background.jpg" alt="Política de calidad imagen">
          <h3 class="home-card-title">Objetivos de calidad</h3>
          <ol class="home-card-description home-card-list">
            <li>Establecer, desarrollar, implementar y mantener un Sistemas de Gestión de la Calidad con efectividad.</li>
            <li>Identificar, planear, gestionar y utilizar de manera óptima los recursos humanos, materiales y financieros de la Universidad.</li>
            <li>Aplicar el modelo de educación basada en competencia y obtener una eficiencia terminal superior a la media nacional.</li>
            <li>Mejorar continuamente el Sistema de Gestión de la Calidad.</li>
          </ol>
        </div>
      </div>
      <!-- Contenido -->
    </main>
  </div>

  <!-- Sidebar JS -->
  <script src="./js/sidebar.js"></script>
  <!-- Header -->
  <script src="./js/header.js"></script>
  <!-- Preloader -->
  <script src="./js/preloader.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>
</html>