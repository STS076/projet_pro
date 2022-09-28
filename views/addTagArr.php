<?php

session_start();

require_once '../controllers/addTagArr-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center container">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3 " href="dashboard-tagsArr.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class="col-lg-5 py-4  col-11">
                <h2 class=" text-center  welcome">Create a new arrondissement tag</h2>
                <form method="POST" action="">
                    <div class="d-flex flex-column">
                        <label class="py-2" for="tagArr">
                            Title of the tag :
                            <span class="text-danger">
                                <?= isset($errors['tagArr']) ? $errors['tagArr'] : '' ?>
                            </span>
                        </label>
                        <input class="form-control" type="text" id="tagArr" value="<?= isset($_POST['tagArr']) ? $_POST['tagArr'] : '' ?>" name="tagArr">

                    </div>
                    <!-- <div class="d-flex flex-column">
                    <label class="py-2">Image : <span class="text-danger"><?= isset($errors['tagArrImage']) ? $errors['tagArrImage'] : '' ?></span></label>
                    <input type="text" id="tagArrImage" value="<?= isset($_POST['tagArrImage']) ? $_POST['tagArrImage'] : '' ?>" name="tagArrImage">
                </div> -->
                    <div class="d-flex flex-column">
                        <label class="py-2" for="tagArrSummary">
                            Mini Summary :
                            <span class="text-danger">
                                <?= isset($errors['tagArrSummary']) ? $errors['tagArrSummary'] : '' ?>
                            </span>
                        </label>
                        <textarea class="form-control" type="text" id="tagArrSummary" value="<?= isset($_POST['tagArrSummary']) ? $_POST['tagArrSummary'] : '' ?>" name="tagArrSummary"></textarea>
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