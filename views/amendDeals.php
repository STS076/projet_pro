<?php

session_start();

require_once '../controllers/amendDeals-controller.php';

var_dump($oneDealArray);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="row  justify-content-evenly mx-0 py-5">

        <div class="bg-light  border border-dark shadow-sm col-lg-5 py-4 rounded col-11">

            <p class=" text-center fs-5 my-4 fw-bold">Modify a Deal</p>
            <form method="POST" action="">

                <div class="d-flex flex-column">
                    <label class="py-2">Title of the Deal : <span class="text-danger"><?= isset($errors['dealTitle']) ? $errors['dealTitle'] : '' ?></span></label>
                    <input type="text" id="dealTitle" value="<?= $oneDealArray['deals_title'] ?>" name="dealTitle">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Mini summary : <span class="text-danger"><?= isset($errors['dealMiniSummary']) ? $errors['dealMiniSummary'] : '' ?></span></label>
                    <textarea type="text" id="dealMiniSummary" name="dealMiniSummary"><?= $oneDealArray['deals_mini_summary'] ?></textarea>
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Summary : <span class="text-danger"><?= isset($errors['dealSummary']) ? $errors['dealSummary'] : '' ?></span></label>
                    <textarea type="text" id="dealSummary" name="dealSummary"> <?= $oneDealArray['deals_summary'] ?></textarea>
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">When : <span class="text-danger"><?= isset($errors['dealWhen']) ? $errors['dealWhen'] : '' ?></span></label>
                    <input type="text" id="dealWhen" value="<?= $oneDealArray['deals_when'] ?>" name="dealWhen">
                </div>

                <div class="d-flex flex-column">
                    <label class="py-2">Where : <span class="text-danger"><?= isset($errors['dealWhere']) ? $errors['dealWhere'] : '' ?></span></label>
                    <input type="text" id="dealWhere" value="<?= $oneDealArray['deals_where'] ?>" name="dealWhere">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Price : <span class="text-danger"><?= isset($errors['dealPrice']) ? $errors['dealPrice'] : '' ?></span></label>
                    <input type="text" id="dealPrice" value="<?= $oneDealArray['deals_price'] ?>" name="dealPrice">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">How to get there : <span class="text-danger"><?= isset($errors['dealMetro']) ? $errors['dealMetro'] : '' ?></span></label>
                    <input type="text" id="dealMetro" value="<?= $oneDealArray['deals_metro'] ?>" name="dealMetro">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">More info : <span class="text-danger"><?= isset($errors['dealInfo']) ? $errors['dealInfo'] : '' ?></span></label>
                    <input type="text" id="dealInfo" value="<?= $oneDealArray['deals_info'] ?>" name="dealInfo">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Contact : <span class="text-danger"><?= isset($errors['dealContact']) ? $errors['dealContact'] : '' ?></span></label>
                    <input type="text" id="dealContact" value="<?= $oneDealArray['deals_contact'] ?>" name="dealContact">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Map : <span class="text-danger"><?= isset($errors['dealMap']) ? $errors['dealMap'] : '' ?></label>
                    <input type="text" id="dealMap" value="<?= $oneDealArray['deals_map'] ?>" name="dealMap">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">Tag Arrondissement : <span class="text-danger"><?= isset($errors['dealTagArr']) ? $errors['dealTagArr'] : '' ?></label>
                    <select id="dealTagArr" value="<?= $oneDealArray['tag_arr_name'] ?>" name="dealTagArr">
                        <option value="">Please select an Arrondissement</option>
                        <?php foreach ($allTagsArrArray as $value) { ?>
                            <option value="<?= $value['tag_arr_name'] ?>" 
                            <?= $value['tag_arr_id'] == $oneDealArray['tag_arr_id_TAG_ARR'] ? 'selected' : '' ?> 
                            name="dealTagArr[<?= $value['tag_arr_id'] ?>]">
                                <?= $value['tag_arr_name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="d-flex flex-column">
                    <label class="py-2">Tag Category : <span class="text-danger"><?= isset($errors['dealTagCat']) ? $errors['dealTagCat'] : '' ?></label>
                    <select id="dealTagCat" multiple value="<?= $oneDealArray['DealsCatTag'] ?>" name="dealTagCat[]">
                        <option value="">Please select a Category</option>
                        <?php foreach ($allTagsCategoryArray as $value) { ?>
                            <option class="fontCat" value="<?= $value['tag_categories_id'] ?>" 
                            <?= $value['tag_categories_id'] == $oneDealArray['DealsCatTagId'] ? 'selected' : '' ?> 
                            name="dealTagCat[<?= $value['tag_categories_id'] ?>]">
                                <?= $value['tag_categories_name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="text-center pt-5">
                    <button class="btn bouton text-white" value="amend">Amend</button>
                </div>
            </form>

            <div class="mt-5 text-center">
                <a class="text-decoration-none" href="allDeals.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>

        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>