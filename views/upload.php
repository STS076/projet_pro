<?php
session_start();
require_once '../controllers/upload-controller.php';
// var_dump($oneDealArray);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg justify-content-center">
    <?php require_once '../elements/header.php' ?>

    <div class="row mx-0 justify-content-center my-5 py-5 bg-white">
        <a class="fs-6 text-secondary px-5 my-3" href="gallery.php?deal=<?= $oneDealArray['deals_id'] ?>">
            <i class='bi bi-caret-left-fill links mx-2'></i> back
        </a>
        <div class="col-lg-12 col-11 d-flex justify-content-center bg-white my-5 ">

            <h2 class=" text-center  my-4 welcome">Upload Images for deal <?= $oneDealArray['deals_title'] ?></h2>

            <!-- <div class="col-lg-8 col-11 d-flex justify-content-center">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="file">File <i class="ms-1 bi bi-cloud-arrow-up"></i></label>
                    <div class="d-flex justify-content-center p-3">
                        <img id="imgPreview" id="fileToUpload">
                    </div>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <button type="submit" class="btn border text-white border-dark bouton p-1 m-1">Save</button>
                    <p class="text-danger"><?= isset($errors['uploadErrors']) ? $errors['uploadErrors'] : '' ?></p>
                </form>
            </div> -->
        </div>
        <div class="row mx-auto">
            <div class="col-lg-8 col-11 d-flex justify-content-center mx-auto">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="d-flex justify-content-center p-3">
                        <img id="imgPreview">
                    </div>
                    <label for="picture"><i class="bi bi-camera-fill"></i> Picture
                        <span data-span="error-picture" class="text-danger fst-italic span-error"><?= isset($errors['picture']) ? $errors['picture'] : '' ?></span>
                    </label>
                    <!-- Mise en place de l'opérateur de coalescence pour afficher oui ou non la valeur de $_POST -->
                    <input type="file" id="picture" name="picture" class="text-truncate">
                    <button type="submit" class="btn border text-white border-dark bouton p-1 m-1"><i class="bi bi-person-plus-fill"></i> Add an image</button>
                </form>
            </div>
        </div>
    </div>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>
    <?php require_once '../elements/footer.php' ?>
    <script src="../assets/script/upload.js"></script>
</body>

</html>