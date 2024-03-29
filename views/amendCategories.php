<?php

session_start();

require_once '../controllers/amendCategories-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 container background p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>


    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3" href="allTagsCategory.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class=" col-lg-5 py-5  col-11">
                <h2 class="fs-2 text-center welcome">Amend a Category</h2>
                <form method="POST" action="">

                    <div class="d-flex flex-column">
                        <label class="py-2" for="tag_categories_name">
                            Title of Category :
                            <span class="text-danger">
                                <?= isset($errors['tag_categories_name']) ? $errors['tag_categories_name'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="tag_categories_name" value="<?= $getOneCat['tag_categories_name'] ?>" name="tag_categories_name">

                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="tag_categories_summary">
                            Summary :
                            <span class="text-danger">
                                <?= isset($errors['tag_categories_summary']) ? $errors['tag_categories_summary'] : '' ?>
                            </span>
                        </label>
                        <textarea type="text" id="tag_categories_summary" name="tag_categories_summary"><?= $getOneCat['tag_categories_summary'] ?></textarea>

                    </div>

                    <div class="text-center pt-5">
                        <button class="btn bouton text-white" value="connect">Amend</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>