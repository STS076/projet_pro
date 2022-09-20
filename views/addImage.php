<?php

session_start();

require_once '../controllers/addImage-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100 backgroundAdmin">

    <?php require_once '../elements/header.php' ?>


    <!-- <a href="upload.php" class="m-2 text-decoration-none text-dark p-2">upload gallery</a> -->
    <!-- <a href="home.php" class="m-2 text-decoration-none text-dark p-2">retour</a> -->
    <!-- <p class="fw-bold fst-italic fs-3 py-3 text-center">Hello <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['surname'] ?></p> -->




    <div class=" row  justify-content-evenly mx-0 py-5">


        <div class="col-lg-5 col-11 charger  bg-light  shadow-sm  py-5 mb-5 mx-0 text-center">
            <form action="addImage.php" class="text-center" method="post" enctype="multipart/form-data">
                <label for="file">File <i class="ms-1 bi bi-cloud-arrow-up"></i></label>
                <div class="d-flex justify-content-center p-3">
                    <img id="imgPreview" id="fileToUpload">
                </div>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <button type="submit" class="btn border text-white border-dark bouton p-1 m-1">Save</button>
            </form>


     
        </div>

    </div>


    </div>

 
    <?php require_once '../elements/footer.php' ?>

</body>

</html>