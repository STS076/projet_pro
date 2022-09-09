<?php
session_start();
require_once '../controllers/deals-controller.php';
$gallerie = scandir('../assets/images/gallery/');

// var_dump($_SESSION);
// var_dump($oneDealArray);

require_once '../elements/top.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="row mx-0 my-5 justify-content-evenly p-0">
        <h2 class="fst-italic fw-bold text-center mb-5"><?= $oneDealArray['deals_title'] ?></h2>
        <div class="col-lg-4 col-11 m-0 p-0">
            <p><span class="fw-bolder">Good Deal : </span><?= $oneDealArray['deals_summary']  ?>
            </p>
            <p><span class="fw-bolder">Where : </span><?= $oneDealArray['deals_where']  ?></p>
            <p><span class="fw-bolder">When : </span><?= $oneDealArray['deals_when']  ?></p>
            <p><span class="fw-bolder">Price : </span><?= $oneDealArray['deals_price']  ?></p>
            <p><span class="fw-bolder">Contact : </span>01 40 20 90 43</p>
            <p><span class="fw-bolder">How to get here : </span><?= $oneDealArray['deals_metro']  ?></p>
            <p><span class="fw-bolder">More info : </span><?= $oneDealArray['deals_info']  ?></p>
            <p> <span class="fw-bolder">Tags : </span>
                <a href="arrondissements.php?choice=<?= $oneDealArray['tag_arr_id_TAG_ARR']  ?>" class="links"># <?= $oneDealArray['tag_arr_name']  ?></a>

                <?php foreach (explode(', ', $oneDealArray['DealsCatTag']) as $value) { ?>
                    <a href="categories.php?category=<?= $value ?>" class="links"># <?= $value ?></a>
                <?php }
                ?>
            </p>
        </div>
        <div class="col-lg-5 carte">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6882148443183!2d2.3228064656745855!3d48.86415552928805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2c30000001%3A0xc219db09e1bfefc7!2sJardin%20des%20Tuileries!5e0!3m2!1sfr!2sfr!4v1658575489794!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Gellery -->
        <h3 class="fst-italic comments fw-bold text-center p-5">Gallery</h3>
        <div class="container px-5">
            <div class="row justify-content-center border border-danger" data-masonry='{ "percentPosition": true }'>
                <?php
                foreach ($gallerie as $key => $value) {
                    if ($value == '.' || $value == '..') {
                    } else {
                ?>
                        <div class="col-11 col-lg-4 my-2 gallery border border-info">
                            <div class="">
                                <a class="example-image-link" href="../assets/images/gallery/<?= $value ?>" data-lightbox="galerie"><img src="../assets/images/gallery/<?= $value ?>" data-lightbox="cozy" class="galleryPicture"></a>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
        <!-- liens vers formulaire de contact -->
        <div class="row mx-0 mt-5 p-0 justify-content-evenly">
            <div class="col-lg-8 col-11">
                <a href="contact.php" class="text-secondary">You noticed any mistake on this deal ? please contact us.</a>
            </div>
        </div>
    </div>

    <!-- commentaires  -->
    <div class="row mx-0 p-0 my-5 bg-light text-center">
        <h3 class="fst-italic text-center fw-bold comments py-3" id="reviews">Reviews</h3>

        <?php

        foreach ($getCommentByDeal as $value) {
            if ($value['comments_validate'] == 1) {
                if ($value['comments_rating'] == 1) {
                    $value['comments_rating'] = '☆';
                } else if ($value['comments_rating'] == 2) {
                    $value['comments_rating'] = '☆☆';
                } else if ($value['comments_rating'] == 3) {
                    $value['comments_rating'] = '☆☆☆';
                } else if ($value['comments_rating'] == 4) {
                    $value['comments_rating'] = '☆☆☆☆';
                } else if ($value['comments_rating'] == 5) {
                    $value['comments_rating'] = '☆☆☆☆☆';
                }
        ?>
                <div class="col-lg-3 col-5 py-2 d-flex flex-row">
                    <p>Posted on <?= $value['comments_date'] ?> by <?= $value['users_username'] ?><span class="rating ms-2"><?= $value['comments_rating'] ?></span>
                    </p>
                </div>
                <div class="col-lg-8 col-5 m-0 py-2 d-flex flex-row">
                    <p class="fw-bold "><?= $value['comments_comment'] ?></p>
                </div>
                <hr>
        <?php }
        } ?>



        <form action="deals.php?choice=<?= $oneDealArray['deals_id'] ?>#reviews" method="post">
            <div class="row mx-0 p-0 my-5 bg-light justify-content-center">
                <div class="col-lg-8 col-11 d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <label for="rating">Rating : <span class="text-danger"><?= isset($errors['dealRating']) ? $errors['dealRating'] : '' ?></span></label>
                        <select id="dealRating" value="<?= isset($_POST['dealRating']) ? $_POST['dealRating'] : '' ?>" name="dealRating">
                            <option value="">☆ Please select a rating ☆</option>
                            <option type="radio" class="rating" name="dealRating" value="1">☆</option>
                            <option type="radio" class="rating" name="dealRating" value="2">☆☆</option>
                            <option type="radio" class="rating" name="dealRating" value="3">☆☆☆</option>
                            <option type="radio" class="rating" name="dealRating" value="4">☆☆☆☆</option>
                            <option type="radio" class="rating" name="dealRating" value="5">☆☆☆☆☆</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-8 col-11 d-flex justify-content-center">
                    <div class="d-flex flex-column mt-2">
                        <label>Your comment :<span class="text-danger"><?= isset($errors['dealComment']) ? $errors['dealComment'] : '' ?></span></label>
                        <textarea rows="8" cols="40" name="dealComment" value="<?= isset($_POST['dealComment']) ? $_POST['dealComment'] : '' ?>"></textarea>
                    </div>
                </div>
                <div class="col-lg-8 col-11 d-flex justify-content-center">
                    <div class="my-3 text-center">
                        <button class="btn bouton text-light" name="submit">Submit review</button>
                    </div>
                </div>
            </div>

        </form>

    </div>
    </div>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>