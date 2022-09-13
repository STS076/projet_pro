<?php

session_start();

require_once '../controllers/addTagCategory-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>



    <div class="row  justify-content-evenly mx-0 py-5">

        <div class="bg-light  border border-dark shadow-sm col-lg-5 py-4 rounded col-11">

            <p class=" text-center fs-5 my-4 fw-bold">Upload a new deal</p>
            <form method="POST" action="">

                <div class="d-flex flex-column">
                    <label class="py-2">Title of the category : <span class="text-danger"><?= isset($errors['tagCategory']) ? $errors['tagCategory'] : '' ?></span></label>
                    <input type="text" id="tagCategory" value="<?= isset($_POST['tagCategory']) ? $_POST['tagCategory'] : '' ?>" name="tagCategory">

                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Summary : <span class="text-danger"><?= isset($errors['tagCategorySummary']) ? $errors['tagCategorySummary'] : '' ?></span></label>
                    <textarea type="text" id="tagCategorySummary" value="<?= isset($_POST['tagCategorySummary']) ? $_POST['tagCategorySummary'] : '' ?>" name="tagCategorySummary"></textarea>

                </div>

                <div class="text-center pt-5">
                    <button class="btn bouton text-white" value="connect">Add</button>
                </div>

            </form>
            <div class="mt-5 text-center">

                <a class="text-decoration-none" href="dashboard-tagsCategories.php">
                    <button class="btn text-white bg-info">back</button>
                </a>

            </div>


        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>