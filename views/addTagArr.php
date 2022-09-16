<?php

session_start();

require_once '../controllers/addTagArr-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>



    <div class="row  justify-content-evenly mx-0 py-5">

        <div class="bg-light  border border-dark shadow-sm col-lg-5 py-4 rounded col-11">

            <p class=" text-center fs-5 my-4 fw-bold">Create a new arrondissement tag</p>
            <form method="POST" action="">

                <div class="d-flex flex-column">
                    <label class="py-2">Title of the tag : <span class="text-danger"><?= isset($errors['tagArr']) ? $errors['tagArr'] : '' ?></span></label>
                    <input type="text" id="tagArr" value="<?= isset($_POST['tagArr']) ? $_POST['tagArr'] : '' ?>" name="tagArr">

                </div>
                <!-- <div class="d-flex flex-column">
                    <label class="py-2">Image : <span class="text-danger"><?= isset($errors['tagArrImage']) ? $errors['tagArrImage'] : '' ?></span></label>
                    <input type="text" id="tagArrImage" value="<?= isset($_POST['tagArrImage']) ? $_POST['tagArrImage'] : '' ?>" name="tagArrImage">
                </div> -->
                <div class="d-flex flex-column">
                    <label class="py-2">Mini Summary : <span class="text-danger"><?= isset($errors['tagArrSummary']) ? $errors['tagArrSummary'] : '' ?></span></label>
                    <textarea type="text" id="tagArrSummary" value="<?= isset($_POST['tagArrSummary']) ? $_POST['tagArrSummary'] : '' ?>" name="tagArrSummary"></textarea>

                </div>
                <div class="text-center pt-5">
                    <button class="btn bouton text-white" value="connect">Add</button>
                </div>

            </form>
            <div class="mt-5 text-center">

                <a class="text-decoration-none" href="dashboard-tagsArr.php">
                    <button class="btn text-white bg-info">back</button>
                </a>

            </div>


        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>