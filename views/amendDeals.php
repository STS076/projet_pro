<?php

session_start();

require_once '../controllers/amendDeals-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="row  justify-content-evenly mx-0 py-5">

        <div class="bg-light  border border-dark shadow-sm col-lg-5 py-4 rounded col-11">

            <p class=" text-center fs-5 my-4 fw-bold">Upload a new deal</p>
            <form method="POST" action="">

                <div class="d-flex flex-column">
                    <label class="py-2">Title of the Deal : <span class="text-danger"><?= isset($errors['dealTitle']) ? $errors['dealTitle'] : '' ?></span></label>
                    <input type="text" id="dealTitle" value="<?= isset($_POST['dealTitle']) ? $_POST['dealTitle'] : '' ?>" name="dealTitle">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Mini summary : <span class="text-danger"><?= isset($errors['dealMiniSummary']) ? $errors['dealMiniSummary'] : '' ?></span></label>
                    <textarea type="text" id="dealMiniSummary" value="<?= isset($_POST['dealMiniSummary']) ? $_POST['dealMiniSummary'] : '' ?>" name="dealMiniSummary"></textarea>
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Summary : <span class="text-danger"><?= isset($errors['dealSummary']) ? $errors['dealSummary'] : '' ?></span></label>
                    <textarea type="text" id="dealSummary" value="<?= isset($_POST['dealSummary']) ? $_POST['dealSummary'] : '' ?>" name="dealSummary"></textarea>
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">When : <span class="text-danger"><?= isset($errors['dealWhen']) ? $errors['dealWhen'] : '' ?></span></label>
                    <input type="text" id="dealWhen" value="<?= isset($_POST['dealWhen']) ? $_POST['dealWhen'] : '' ?>" name="dealWhen">
                </div>

                <div class="d-flex flex-column">
                    <label class="py-2">Where : <span class="text-danger"><?= isset($errors['dealWhere']) ? $errors['dealWhere'] : '' ?></span></label>
                    <input type="text" id="dealWhere" value="<?= isset($_POST['dealWhere']) ? $_POST['dealWhere'] : '' ?>" name="dealWhere">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Price : <span class="text-danger"><?= isset($errors['dealPrice']) ? $errors['dealPrice'] : '' ?></span></label>
                    <input type="text" id="dealPrice" value="<?= isset($_POST['dealPrice']) ? $_POST['dealPrice'] : '' ?>" name="dealPrice">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">How to get there : <span class="text-danger"><?= isset($errors['dealMetro']) ? $errors['dealMetro'] : '' ?></span></label>
                    <input type="text" id="dealMetro" value="<?= isset($_POST['dealMetro']) ? $_POST['dealMetro'] : '' ?>" name="dealMetro">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">More info : <span class="text-danger"><?= isset($errors['dealInfo']) ? $errors['dealInfo'] : '' ?></span></label>
                    <input type="text" id="dealInfo" value="<?= isset($_POST['dealInfo']) ? $_POST['dealInfo'] : '' ?>" name="dealInfo">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Contact : <span class="text-danger"><?= isset($errors['dealContact']) ? $errors['dealContact'] : '' ?></span></label>
                    <input type="text" id="dealContact" value="<?= isset($_POST['dealContact']) ? $_POST['dealContact'] : '' ?>" name="dealContact">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Map : <span class="text-danger"><?= isset($errors['dealMap']) ? $errors['dealMap'] : '' ?></label>
                    <input type="text" id="dealMap" value="<?= isset($_POST['dealMap']) ? $_POST['dealMap'] : '' ?>" name="dealMap">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Tag Arrondissement : <span class="text-danger"><?= isset($errors['dealTagArr']) ? $errors['dealTagArr'] : '' ?></label>
                    <select id="dealTagArr" value="<?= isset($_POST['dealTagArr']) ? $_POST['dealTagArr'] : '' ?>" name="dealTagArr">
                        <option value="">Please select an Arrondissement</option>
                        <?php foreach ($allTagsArrArray as $value) { ?>
                            <option value="<?= $value['tag_arr_id'] ?>" name="dealTagArr[<?= $value['tag_arr_id'] ?>]"><?= $value['tag_arr_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="d-flex flex-column">
                    <label class="py-2">Tag Category : <span class="text-danger"><?= isset($errors['dealTagCat']) ? $errors['dealTagCat'] : '' ?></label>

                    <select id="dealTagCat" multiple value="<?= isset($_POST['dealTagCat']) ? $_POST['dealTagCat'] : '' ?>" name="dealTagCat[]">
                        <option value="">Please select a Category</option>
                        <?php foreach ($allTagsCategoryArray as $value) { ?>
                            <option class="fontCat" value="<?= $value['tag_categories_id'] ?>" name="dealTagCat[<?= $value['tag_categories_id'] ?>]"><?= $value['tag_categories_name'] ?></option>
                        <?php } ?>
                    </select>

                </div>

                <div class="text-center pt-5">
                    <button class="btn bouton text-white" value="connect">Add</button>
                </div>
            </form>

            <div class="mt-5 text-center">
                <a class="text-decoration-none" href="dashboard-deals.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>

        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>