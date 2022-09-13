<?php

session_start();

require_once '../controllers/amendCategories-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>



    <div class="row  justify-content-evenly mx-0 py-5">

        <div class="bg-light  border border-dark shadow-sm col-lg-5 py-4 rounded col-11">

            <p class=" text-center fs-5 my-4 fw-bold">Amend a Category</p>
            <form method="POST" action="">

                <div class="d-flex flex-column">
                    <label class="py-2">Title of Category : <span class="text-danger"><?= isset($errors['tag_categories_name']) ? $errors['tag_categories_name'] : '' ?></span></label>
                    <input type="text" id="tag_categories_name" value="<?= $getOneCat['tag_categories_name'] ?>" name="tag_categories_name">

                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Summary : <span class="text-danger"><?= isset($errors['tag_categories_summary']) ? $errors['tag_categories_summary'] : '' ?></span></label>
                    <textarea type="text" id="tag_categories_summary" name="tag_categories_summary"><?= $getOneCat['tag_categories_summary'] ?></textarea>

                </div>

                <div class="text-center pt-5">
                    <button class="btn bouton text-white" value="connect">Amend</button>
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