<?php

session_start();

require_once '../controllers/amendDeals-controller.php';

// var_dump($oneDealArray);
// var_dump($_POST);
require_once '../elements/top.php' ?>

<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="row justify-content-evenly mx-0 my-5">

        <div class="bg-light shadow-sm col-lg-6 p-5  col-11">
            <a class="fs-6 text-secondary  my-3" href="allDeals.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>

            <h2 class="text-center py-3 fst-italic welcome">Amend deal <?= $oneDealArray['deals_title'] ?> </h2>
            <form method="POST" action="">

                <div class="d-flex flex-column">
                    <label class="py-2" for="dealTitle">
                        Title of the Deal :
                        <span class="text-danger" data-span="error-dealTitle">
                            <?= isset($errors['dealTitle']) ? $errors['dealTitle'] : '' ?>
                        </span>
                    </label>
                    <input type="text" id="dealTitle" value="<?= $oneDealArray['deals_title'] ?>" name="dealTitle">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2" for="dealMiniSummary">
                        Mini summary :
                        <span class="text-danger" data-span="error-dealMiniSummary"><?= isset($errors['dealMiniSummary']) ? $errors['dealMiniSummary'] : '' ?>
                        </span>
                    </label>
                    <textarea type="text" id="dealMiniSummary" name="dealMiniSummary"><?= $oneDealArray['deals_mini_summary'] ?></textarea>
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2" for="dealSummary">
                        Summary :
                        <span class="text-danger" data-span="error-dealSummary"><?= isset($errors['dealSummary']) ? $errors['dealSummary'] : '' ?>
                        </span>
                    </label>
                    <textarea type="text" id="dealSummary" name="dealSummary"> <?= $oneDealArray['deals_summary'] ?></textarea>
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2" for="dealWhen">
                        When :
                        <span class="text-danger" data-span="error-dealWhen">
                            <?= isset($errors['dealWhen']) ? $errors['dealWhen'] : '' ?>
                        </span>
                    </label>
                    <input type="text" id="dealWhen" value="<?= $oneDealArray['deals_when'] ?>" name="dealWhen">
                </div>

                <div class="d-flex flex-column">
                    <label class="py-2" for="dealWhere">
                        Where :
                        <span class="text-danger" data-span="error-dealWhere">
                            <?= isset($errors['dealWhere']) ? $errors['dealWhere'] : '' ?>
                        </span>
                    </label>
                    <input type="text" id="dealWhere" value="<?= $oneDealArray['deals_where'] ?>" name="dealWhere">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">
                        Price :
                        <span class="text-danger">
                            <?= isset($errors['dealPrice']) ? $errors['dealPrice'] : '' ?>
                        </span>
                    </label>
                    <input type="text" id="dealPrice" value="<?= $oneDealArray['deals_price'] ?>" name="dealPrice">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">
                        How to get there :
                        <span class="text-danger">
                            <?= isset($errors['dealMetro']) ? $errors['dealMetro'] : '' ?>
                        </span>
                    </label>
                    <input type="text" id="dealMetro" value="<?= $oneDealArray['deals_metro'] ?>" name="dealMetro">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">
                        More info :
                        <span class="text-danger">
                            <?= isset($errors['dealInfo']) ? $errors['dealInfo'] : '' ?>
                        </span>
                    </label>
                    <input type="text" id="dealInfo" value="<?= $oneDealArray['deals_info'] ?>" name="dealInfo">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">
                        Contact :
                        <span class="text-danger">
                            <?= isset($errors['dealContact']) ? $errors['dealContact'] : '' ?>
                        </span>
                    </label>
                    <input type="text" id="dealContact" value="<?= $oneDealArray['deals_contact'] ?>" name="dealContact">
                </div>
                <div class="d-flex flex-column">
                    <label class="py-2">
                        Map :
                        <span class="text-danger">
                            <?= isset($errors['dealMap']) ? $errors['dealMap'] : '' ?>
                    </label>
                    <textarea type="text" id="dealMap" name="dealMap"><?= $oneDealArray['deals_map'] ?></textarea>
                </div>

                <div class="d-flex flex-column">
                    <label class="py-2">
                        Tag Arrondissement :
                        <span class="text-danger">
                            <?= isset($errors['dealTagArr']) ? $errors['dealTagArr'] : '' ?>
                    </label>
                    <select id="dealTagArr" value="<?= $oneDealArray['tag_arr_name'] ?>" name="dealTagArr">
                        <option value="">Please select an Arrondissement</option>
                        <?php
                        foreach ($allTagsArrArray as $value) { ?>
                            <option value="<?= $value['tag_arr_id'] ?>" <?= $value['tag_arr_id'] == $oneDealArray['tag_arr_id_TAG_ARR'] ? 'selected' : '' ?> name="dealTagArr[<?= $value['tag_arr_id'] ?>]">
                                <?= $value['tag_arr_name'] ?>
                            </option>
                        <?php } ?>

                    </select>
                </div>

                <div class="d-flex flex-column">
                    <label class="py-2">
                        Tag Category :
                        <span class="text-danger">
                            <?= isset($errors['dealTagCat']) ? $errors['dealTagCat'] : '' ?>
                    </label>

                    <?php
                    $DealsCatTagIdArray = explode(', ',  $oneDealArray['DealsCatTagId']);
                    ?>

                    <select id="dealTagCat" multiple value="<?= $oneDealArray['DealsCatTag'] ?>" name="dealTagCat[]">
                        <option value="">Please select a Category</option>
                        <?php foreach ($allTagsCategoryArray as $value) { ?>
                            <option class="fontCat" value="<?= $value['tag_categories_id'] ?>" <?= in_array($value['tag_categories_id'], $DealsCatTagIdArray) ? 'selected' : '' ?>>
                                <?= $value['tag_categories_name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="text-center pt-5">
                    <button class="btn bouton text-white" value="amend">Amend</button>
                </div>
            </form>


        </div>
    </div>
    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>
    <script src="../assets/script/contact.js"></script>
</body>

</html>