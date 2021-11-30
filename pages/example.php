<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Modificar manualmente el titulo -->
    <title>Página de ejemplo</title>
    <!-- Permite obtener los recursos necesarios como lo son la hoja de estilos y la librería de FontAwesome -->
    <?php include "../resources/resources.php" ?>
</head>
<body>
    <div class="container-template">   <!-- Contenedor padre (Permite colocar a los elementos uno al lado del otro) -->
       
        <?php include "../components/sidebar.php" ?> <!-- Permite incluír el componente sidebar -->
       
        <main class="main"> <!-- Contenido principal -->
            <?php $title = "Example" ?> <!-- Permite modificar e indicar el titulo del header--> 
            <?php include "../components/header.php" ?>  <!-- Permite Incluír el componente header -->
            <!-- Contenido -->

                

            <!-- Contenido -->
        </main>
    </div>
    
    <?php include "../resources/scripts.php" ?>  <!-- Permite obtener los scripts necesarios para la funcionalidad (Sidebar) -->
    
    <!--NOTA: Si se necesitan scripts para realizar cierta funcnionalidad en especifico 
    que solo será usada en dicha página entonces hay que incluírla solamente en dicha página para evitar errores en la consola-->
</body>
</html>