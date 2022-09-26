<?php

session_start();

require_once '../controllers/addDeal-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg  justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="row  justify-content-evenly mx-0 py-5">

        <div class="bg-light  shadow-sm col-lg-6 p-5  col-11">
            <a class="fs-6 text-secondary  my-3" href="dashboard-deals.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="fs-2 py-2 text-center welcome ">Upload a new deal</h2>

            <?php
            if ($showForm) { ?>

                <form method="POST" action="" enctype="multipart/form-data">
                    <p class="text-danger mandatoryInput">Input with an * are mandatory</p>
                    <div class="d-flex flex-column">
                        <label for="dealTitle" class="py-2">
                            * Title of the Deal :
                            <span data-span="error-dealTitle" class="text-danger">
                                <?= isset($errors['dealTitle']) ? $errors['dealTitle'] : '' ?>
                            </span>
                        </label>
                        <input placeholder="Ex : Jardin des Tuileries" type="text" id="dealTitle" value="<?= isset($_POST['dealTitle']) ? $_POST['dealTitle'] : '' ?>" name="dealTitle">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealMiniSummary">
                            * Mini summary :
                            <span class="text-danger" data-span="error-dealMiniSummary">
                                <?= isset($errors['dealMiniSummary']) ? $errors['dealMiniSummary'] : '' ?>
                            </span>
                        </label>
                        <textarea type="text" id="dealMiniSummary" placeholder="Summary on cards" value="" name="dealMiniSummary"><?= isset($_POST['dealMiniSummary']) ? $_POST['dealMiniSummary'] : '' ?></textarea>
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealSummary">
                            * Summary :
                            <span class="text-danger">
                                <?= isset($errors['dealSummary']) ? $errors['dealSummary'] : '' ?>
                            </span>
                        </label>
                        <textarea type="text" id="dealSummary" placeholder="Summary on deal presentation" value="" name="dealSummary"><?= isset($_POST['dealSummary']) ? $_POST['dealSummary'] : '' ?></textarea>
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealWhen">
                            * When :
                            <span class="text-danger" data-span="error-dealWhen">
                                <?= isset($errors['dealWhen']) ? $errors['dealWhen'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="dealWhen" placeholder="Ex : the first week of September" value="<?= isset($_POST['dealWhen']) ? $_POST['dealWhen'] : '' ?>" name="dealWhen">
                    </div>

                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealWhere">
                            * Where :
                            <span class="text-danger" data-span="error-dealWhere">
                                <?= isset($errors['dealWhere']) ? $errors['dealWhere'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="dealWhere" placeholder="Ex : In the Louvre gardens" value="<?= isset($_POST['dealWhere']) ? $_POST['dealWhere'] : '' ?>" name="dealWhere">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealPrice">
                            * Price :
                            <span class="text-danger" data-span="error-dealPrice">
                                <?= isset($errors['dealPrice']) ? $errors['dealPrice'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="dealPrice" placeholder="Ex : Free" value="<?= isset($_POST['dealPrice']) ? $_POST['dealPrice'] : '' ?>" name="dealPrice">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealMetro">
                            * How to get there :
                            <span class="text-danger" data-span="error-dealMetro">
                                <?= isset($errors['dealMetro']) ? $errors['dealMetro'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="dealMetro" placeholder="Ex : Metro 2" value="<?= isset($_POST['dealMetro']) ? $_POST['dealMetro'] : '' ?>" name="dealMetro">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealInfo">
                            More info :
                            <span class="text-danger" data-span="error-dealInfo">
                                <?= isset($errors['dealInfo']) ? $errors['dealInfo'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="dealInfo" placeholder="Ex : free toilets, only for under 10 years old" value="<?= isset($_POST['dealInfo']) ? $_POST['dealInfo'] : '' ?>" name="dealInfo">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealContact">
                            * Contact :
                            <span class="text-danger" data-span="error-dealContact">
                                <?= isset($errors['dealContact']) ? $errors['dealContact'] : '' ?>
                            </span>
                        </label>
                        <input type="text" id="dealContact" placeholder="Ex : telephone number of the place" value="<?= isset($_POST['dealContact']) ? $_POST['dealContact'] : '' ?>" name="dealContact">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealMap">
                            * Map :
                            <span class="text-danger" data-span="error-dealMap">
                                <?= isset($errors['dealMap']) ? $errors['dealMap'] : '' ?>
                        </label>
                        <textarea type="text" id="dealMap" placeholder="google map iframe" value="" name="dealMap"><?= isset($_POST['dealMap']) ? $_POST['dealMap'] : '' ?></textarea>
                    </div>
                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealTagArr">
                            * Tag Arrondissement :
                            <span class="text-danger" data-span="error-dealTagArr">
                                <?= isset($errors['dealTagArr']) ? $errors['dealTagArr'] : '' ?>
                        </label>
                        <select id="dealTagArr" value="<?= isset($_POST['dealTagArr']) ? $_POST['dealTagArr'] : '' ?>" name="dealTagArr">
                            <option value="">Please select an Arrondissement</option>
                            <?php foreach ($allTagsArrArray as $value) { ?>
                                <option value="<?= $value['tag_arr_id'] ?>" name="dealTagArr[<?= $value['tag_arr_id'] ?>]">
                                    <?= $value['tag_arr_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="d-flex flex-column">
                        <label class="py-2" for="dealTagCat">
                            * Tag Category :
                            <span class="text-danger" data-span="dealTagCat">
                                <?= isset($errors['dealTagCat']) ? $errors['dealTagCat'] : '' ?>
                        </label>
                        <select id="dealTagCat" multiple value="<?= isset($_POST['dealTagCat']) ? $_POST['dealTagCat'] : '' ?>" name="dealTagCat[]">
                            <option value="">Please select a Category</option>
                            <?php foreach ($allTagsCategoryArray as $value) { ?>
                                <option class="fontCat" value="<?= $value['tag_categories_id'] ?>" name="dealTagCat[<?= $value['tag_categories_id'] ?>]"><?= $value['tag_categories_name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="d-flex justify-content-center p-3">
                        <img id="imgPreview">
                    </div>
                    <label for="picture"><i class="bi bi-camera-fill"></i> Picture
                        <span data-span="error-picture" class="text-danger fst-italic span-error"><?= isset($errors['picture']) ? $errors['picture'] : '' ?></span>
                    </label>
                    <!-- Mise en place de l'opérateur de coalescence pour afficher oui ou non la valeur de $_POST -->
                    <input type="file" id="picture" name="picture" class="text-truncate">
                    <!-- <button type="submit" class="btn border text-white border-dark bouton p-1 m-1"><i class="bi bi-person-plus-fill"></i> Add an image</button> -->

                    <div class="text-center pt-5">
                        <button class="btn bouton text-white" value="connect">Add</button>
                    </div>
                </form>
            <?php } else { ?>

                <!-- <div class="container bg-light col-lg-8  bienvenue d-flex align-items-center flex-column rounded my-5 py-3 border border-dark shadow"> -->
                <p class="text-center fs-6 py-5">Thank you for submitting this deal, our moderation team will review it as
                    soon as they can. </p>
                <!-- </div> -->
            <?php }
            ?>


          

        </div>
    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>
    <script src="../assets/script/contact.js"></script>
    <?php require_once '../elements/footer.php' ?>
    <script src="../assets/script/upload.js"></script>

</body>

</html>