<?php
session_start();
require_once '../controllers/upload-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background p-0 shadow-lg container justify-content-center">
    <?php require_once '../elements/header.php' ?>

    <main class="bg-white px-0 m-0 container-fluid min-vh-100">
        <div class="row bg-white justify-content-center m-0" id="page">
            <a class="fs-6 text-secondary px-5 my-3" href="gallery.php?deal=<?= $oneDealArray['deals_id'] ?>">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>

            <h2 class="fs-2  pt-5 pb-3 text-center welcome">Upload Images for deal <?= $oneDealArray['deals_title'] ?></h2>
            <div class="row mx-auto pb-5">
                <div class="col-lg-8 col-11 py-5 d-flex justify-content-center mx-auto">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="d-flex justify-content-center">
                            <img id="imgPreview">
                        </div>
                        <label for="picture"><i class="bi bi-camera-fill"></i> Picture
                            <span data-span="error-picture" class="text-danger fst-italic span-error"><?= isset($errors['picture']) ? $errors['picture'] : '' ?></span>
                        </label>
                        <!-- Mise en place de l'opérateur de coalescence pour afficher oui ou non la valeur de $_POST -->
                        <input type="file" id="picture" name="picture" class="text-truncate">
                        <button type="submit" class="btn border text-white border-dark bouton py-2 m-1"><i class="bi bi-person-plus-fill"></i> Add an image</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>
    <script src="../assets/script/upload.js"></script>
</body>

</html>