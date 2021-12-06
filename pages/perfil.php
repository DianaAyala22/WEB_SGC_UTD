<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href="../img/utdlogo.png" type="image/png"/>
    <!-- Bootstrap CSS -->
    <title>SGC Perfil</title>
    <?php include "../resources/resources.php" ?>
  </head>
  <body>
    <div class="container-template">
       
       <?php include "../components/sidebar.php" ?>
      
       <main class="main">
           <?php $icon = "far fa-user" ?>
           <?php $title = "Perfil" ?>
           <?php include "../components/header.php" ?>
           <!-- Contenido -->

               <div class="card-profile">
                 <img src="../img/girl.jpg" alt="Chica" class="card-profile-image">
                 <div class="card-profile-user">
                   <h3 class="card-profile-name">Margarita Herrera</h3>
                   <p class="card-profile-type">
                      <i class="far fa-chalkboard-teacher "></i>
                      Docente
                  </p>
                 </div>
                 <div class="card-profile-datas">
                    <div class="card-profile-data">
                      <h3>2</h3>
                      <p>Acciones realizadas</p>
                    </div>
                    <div class="card-profile-data">
                      <h3>
                        <i class="far fa-user card-profile-data-state-icon"></i>
                      </h3>
                      <p>Usuario activo</p>
                    </div>
                  </div>
                 <div class="card-profile-buttons">
                   <a class="card-profile-button" href="../bitacora/bitacora.php">
                      Analizar mis acciones
                      <i class="far fa-eye"></i>
                  </a>
                 </div>
               </div>

           <!-- Contenido -->
       </main>
   </div>
   
   <?php include "../resources/scripts.php" ?>
  </body>
</html>