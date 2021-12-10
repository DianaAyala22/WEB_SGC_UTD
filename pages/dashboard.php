<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC Dashboard</title>
    <?php include "../resources/resources.php" ?>
</head>
<body>
    <div class="container-template">
        <?php include "../components/sidebar.php" ?>
        <main class="main">
            <?php $icon = "far fa-tachometer-alt" ?>
            <?php $title = "Dashboard" ?>
            <?php include "../components/header.php" ?>
            <div class="content">
                <div class="modal" id="modal">
                    <button class="modal-button-close" id="modal-button-close">
                        <i class="far fa-times"></i>
                    </button>
                    <div class="modal-content">
                        <embed class="modal-document" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                    </div>
                </div>
                <h2 class="title">Cantidad de documentos</h2>
                <div class="cards-amount">
                    <div class="card-amount" id="card-amount-docents">
                        <i class="far fa-chalkboard-teacher card-amount-icon"></i>
                        <span class="card-amount-number">10</span>
                        <p class="card-amount-text">Profesores</p>
                    </div>

                    <div class="card-amount" id="card-amount-directives">
                        <i class="far fa-user-tie card-amount-icon"></i>
                        <span class="card-amount-number">8</span>
                        <p class="card-amount-text">Directivo</p>
                    </div>

                    <div class="card-amount" id="card-amount-administratives">
                        <i class="far fa-list card-amount-icon"></i>
                        <span class="card-amount-number">5</span>
                        <p class="card-amount-text">Administrativo</p>
                    </div>
                </div>

                <h2 class="title">Documentos</h2>
                <div class="documents">
                    <div class="document" id="select">
                        <i class="far fa-caret-right document-icon select-icon"></i>
                        <p class="document-text">Profesores</p>

                        <div class="document-options select-options select-options-profesores ">
                            <p class="document-options-message">Sin procedimientos</p>
                            <template id="template-documents-profesores">
                                <div class="document-option modal-button-open" href="#">
                                    <i class="far fa-file-alt document-option-icon"></i>
                                    <p class="document-option-name"></p>
                                </div>
                            </template>
                        </div>
                    </div>

                    <div class="document" id="select">
                        <i class="far fa-caret-right document-icon select-icon"></i>
                        <p class="document-text">Directivo</p>

                        <div class="document-options select-options select-options-directivos">
                            <p class="document-options-message document-options-message-directives">Sin procedimientos</p>
                            <template id="template-documents-directivos">
                                <div class="document-option modal-button-open" href="#">
                                    <i class="far fa-file-alt document-option-icon"></i>
                                    <p class="document-option-name"></p>
                                </div>
                            </template>
                        </div>
                    </div>

                    <div class="document" id="select">
                        <i class="far fa-caret-right document-icon select-icon"></i>
                        <p class="document-text">Administrativo</p>

                        <div class="document-options select-options select-options-administrativos">
                            <p class="document-options-message document-options-message-administratives">Sin procedimientos</p>
                            <template id="template-documents-administrativos">
                                <div class="document-option modal-button-open" href="#">
                                    <i class="far fa-file-alt document-option-icon"></i>
                                    <p class="document-option-name"></p>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../js/select.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/procedimientos/obtener_profesores.js"></script>
    <script src="../js/procedimientos/obtener_directivos.js"></script>
    <script src="../js/procedimientos/obtener_administrativos.js"></script>
    <?php include "../resources/scripts.php" ?>
</body>
</html>