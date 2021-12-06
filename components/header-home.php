<header class="header">
    <div class="header-title-content">
        <i class="<?php echo $icon ?> header-title-icon"></i>
        <span class="header-title-text"><?php echo $title ?></span>
    </div>
    <div class="user-information" id="user-actions-toggle">
        <img src="./img/girl.jpg" alt="Margarita Herrera" class="user-information-image">
        <span class="user-information-name">Margarita Herrera</span>
        <i class="far fa-caret-down user-information-icon"></i>

        <div class="user-actions" id="user-actions">
            <a class="user-action" href="./pages/perfil.php?id=">
                <i class="far fa-user user-action-icon"></i>
                <span>Perfil</span>
            </a>
            <a class="user-action" href="./home.php">
                <i class="far fa-home user-action-icon"></i>
                <span>Home</span>
            </a>
            <a class="user-action" href="./pages/dashboard.php">
                <i class="far fa-tachometer-alt user-action-icon"></i>
                <span>Dashboard</span>
            </a>
            <a class="user-action" href="./pages/procedimientos.php">
                <i class="far fa-folders user-action-icon"></i>
                <span>Procedimientos</span>
            </a>
            <a class="user-action" href="./pages/registros.php">
                <i class="far fa-tasks user-action-icon"></i>
                <span>Registros</span>
            </a>
            <a class="user-action" href="./bitacora/bitacora.php">
                <i class="far fa-calendar user-action-icon"></i>
                <span>Bitácora</span>
            </a><a class="user-action" href="./home.php">
                <i class="far fa-sign-out-alt user-action-icon"></i>
                <span>Salir</span>
            </a>
        </div>
    </div>
</header>