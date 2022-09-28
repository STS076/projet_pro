<?php

session_start();

require_once '../controllers/addTagCategory-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center container">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3 " href="dashboard-tagsCategories.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class="col-lg-5  col-11 py-5">
                <h2 class=" text-center welcome">Create a new category</h2>
                <form method="POST" action="">
                    <div class="d-flex flex-column">
                        <label class="py-2" for="tagCategory">
                            Title of the category :
                            <span class="text-danger">
                                <?= isset($errors['tagCategory']) ? $errors['tagCategory'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="tagCategory" value="<?= isset($_POST['tagCategory']) ? $_POST['tagCategory'] : '' ?>" name="tagCategory">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="tagCategorySummary">
                            Summary :
                            <span class="text-danger">
                                <?= isset($errors['tagCategorySummary']) ? $errors['tagCategorySummary'] : '' ?>
                            </span>
                        </label>
                        <textarea type="text" id="tagCategorySummary" value="<?= isset($_POST['tagCategorySummary']) ? $_POST['tagCategorySummary'] : '' ?>" name="tagCategorySummary"></textarea>
                    </div>
                    <div class="text-center pt-5">
                        <button class="btn bouton text-white" value="connect">Add</button>
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