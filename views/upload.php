<?php

session_start();
require_once '../controllers/upload-controller.php';
require_once '../elements/top.php' ?>
<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <div class="container bg-light border border-dark shadow-sm  my-5 rounded ">
        <div class="row mx-0 py-5 justify-content-center">
            <p class=" text-center fs-5 my-4 fw-bold">Upload Images</p>
            <div class="col-lg-8 col-11 border border-danger">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="file">File <i class="ms-1 bi bi-cloud-arrow-up"></i></label>
                    <div class="d-flex justify-content-center p-3">
                        <img id="imgPreview" id="fileToUpload">
                    </div>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <button type="submit" class="btn border text-white border-dark bouton p-1 m-1">Save</button>
                    <p class="text-danger"><?= isset($errors['uploadErrors']) ? $errors['uploadErrors'] : '' ?></p>
                </form>

            </div>
            <div class="mt-5 text-center">
                <a class="text-decoration-none" href="dashboard-images.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>
        </div>

    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>