<?php
session_start();
require_once '../controllers/upload-controller.php';
// var_dump($oneDealArray);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="container bg-light shadow-sm  my-5  ">
        <div class="row mx-0 py-5 justify-content-center">
            <p class=" text-center fs-5 my-4 fw-bold">Upload Images for deal <?= $oneDealArray['deals_title'] ?></p>


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
            <div class="col-lg-8 col-11 d-flex justify-content-center">
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




            <div class="mt-5 text-center">
                <a class="text-decoration-none" href="dashboard-images.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
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