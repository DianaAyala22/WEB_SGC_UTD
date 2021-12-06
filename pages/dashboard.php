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
                        <embed class="modal-document" src="../pdf/prueba.pdf" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                    </div>
                </div>
                <h2 class="title">Cantidad de documentos</h2>
                <div class="cards-amount">
                    <div class="card-amount">
                        <i class="far fa-chalkboard-teacher card-amount-icon"></i>
                        <span class="card-amount-number">10</span>
                        <p class="card-amount-text">Profesores</p>
                    </div>

                    <div class="card-amount">
                        <i class="far fa-user-tie card-amount-icon"></i>
                        <span class="card-amount-number">8</span>
                        <p class="card-amount-text">Directivo</p>
                    </div>

                    <div class="card-amount">
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

                        <div class="document-options select-options ">
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2019</p>
                            </div>
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon select-icon"></i>
                                <p>2020</p>
                            </div>
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon select-icon"></i>
                                <p>2021</p>
                            </div>
                        </div>
                    </div>

                    <div class="document" id="select">
                        <i class="far fa-caret-right document-icon select-icon"></i>
                        <p class="document-text">Directivo</p>

                        <div class="document-options select-options">
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2019</p>
                            </div>
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2020</p>
                            </div>
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2021</p>
                            </div>
                        </div>
                    </div>

                    <div class="document" id="select">
                        <i class="far fa-caret-right document-icon select-icon"></i>
                        <p class="document-text">Administrativo</p>

                        <div class="document-options select-options">
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2017</p>
                            </div>
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2018</p>
                            </div>
                            <div class="document-option modal-button-open" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2019</p>
                            </div>
                            <div class="document-option" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2020</p>
                            </div>
                            <div class="document-option" href="#">
                                <i class="far fa-file-alt document-option-icon"></i>
                                <p>2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../js/select.js"></script>
    <script src="../js/modal.js"></script>
    <?php include "../resources/scripts.php" ?>
</body>
</html>