<?php include "preloader.php" ?>
<aside class="sidebar " id="sidebar">
    <div class="sidebar-header" id="toggle-sidebar">
        <button class="sidebar-toggle-button" id="toggle-sidebar">
            <i class="far fa-bars"></i>
        </button>
        <h2 class="sidebar-title">SGC</h2>
    </div>
    <ul class="sidebar-elements">
        <li class="sidebar-element">
            <a href="./index.php" class="sidebar-link" title="Inicio">
                <i class="far fa-home"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li class="sidebar-element">
            <a href="./pages/dashboard.php" class="sidebar-link" title="Dashboard">
                <i class="far fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-element">
            <a href="./pages/procedimientos.php" class="sidebar-link" title="Procedimientos">
                <i class="far fa-folders"></i>
                <span>Procedimientos</span>
            </a>
        </li>
        <li class="sidebar-element">
            <a href="./pages/registros.php" class="sidebar-link" title="Registros">
                <i class="far fa-tasks"></i>
                <span>Registros</span>
            </a>
        </li>
        <li class="sidebar-element">
            <a href="./bitacora/bitacora.php" class="sidebar-link" title="Bitácora">
                <i class="far fa-calendar"></i>
                <span>Bitácora</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <div class="sidebar-footer-options" id="options">
           <a href="./pages/perfil.php?id=" class="sidebar-footer-options-option">
               <i class="far fa-user"></i>
               <span>Perfil</span>
            </a>
           <a href="#" class="sidebar-footer-options-option">
               <i class="far fa-sign-out-alt"></i>
               <span>Salir</span>
            </a>
        </div>
        <button class="sidebar-button-fotter" id="toggle-options">
            <i class="far fa-cog"></i>
        </button>
       
    </div>
</aside>