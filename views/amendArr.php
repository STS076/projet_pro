<?php

session_start();

require_once '../controllers/amendArr-controller.php';
// var_dump($getOneArrondissement);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 container background p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3" href="alltagsArr.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class=" col-lg-5 py-5  col-11 ">
                <h2 class="fs-2 text-center welcome">Amend an Arrondissement</h2>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="d-flex flex-column">
                        <label class="py-2" for="tagArr">
                            Title of the tag :
                            <span class="text-danger">
                                <?= isset($errors['tagArr']) ? $errors['tagArr'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="tagArr" value="<?= $getOneArrondissement['tag_arr_name'] ?>" name="tagArr">
                    </div>

                    <div class="d-flex flex-column">
                        <label class="py-2" for="tagArrSummary">
                            Mini Summary :
                            <span class="text-danger">
                                <?= isset($errors['tagArrSummary']) ? $errors['tagArrSummary'] : '' ?>
                            </span>
                        </label>
                        <textarea type="text" id="tagArrSummary" value="" name="tagArrSummary"><?= $getOneArrondissement['tag_arr_summary'] ?></textarea>
                    </div>

                
                    <!-- <div class="d-flex justify-content-center m-3">
                        <img id="imgPreview">
                    </div>
                    <label for="picture"><i class="bi bi-camera-fill"></i> Picture
                        <span data-span="error-picture" class="text-danger fst-italic span-error"><?= isset($errors['picture']) ? $errors['picture'] : '' ?></span>
                    </label>
          
                    <input type="file" id="picture" name="picture" class="text-truncate">
                    <button type="submit" class="btn border text-white border-dark bouton p-1 m-1"><i class="bi bi-person-plus-fill"></i> Add an image</button> -->

                    <div class="text-center pt-5">
                        <button class="btn bouton text-white" value="connect">Modify</button>
                    </div>
                </form>

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