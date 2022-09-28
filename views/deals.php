<?php
session_start();
require_once '../controllers/deals-controller.php';
// $gallerie = scandir('../assets/images/gallery/');-+
require_once '../elements/top.php';
?>

<body class="d-flex flex-column  mx-auto min-vh-100 background p-0 shadow-lg  justify-content-center container">

    <?php require_once '../elements/header.php' ?>
    <?php
    if ($oneDealArray) {
    ?>

        <main class="bg-white py-5  px-0 mx-auto">
            <ul class="breadcrumb-navigation px-5 my-3">
                <li>
                    <a href="home.php" class="filAriane">
                        Home
                    </a>
                    <i class='bi bi-caret-right-fill links mx-2'></i>
                </li>
                <li>
                    <a href="arrondissements.php?choice=<?= $oneDealArray['tag_arr_id_TAG_ARR'] ?>" class="filAriane">
                        <?= $oneDealArray['tag_arr_name'] ?>
                    </a>
                    <i class='bi bi-caret-right-fill links mx-2'></i>
                </li>
                <li class="filAriane">
                    <?= $oneDealArray['DealsCatTag'] ?>
                    <i class='bi bi-caret-right-fill links mx-2'></i>
                </li>
                <li class="filAriane">
                    <?= $oneDealArray['deals_title'] ?>
                </li>
            </ul>

            <div class="row mx-0 my-5 justify-content-evenly p-0">
                <h2 class="fst-italic welcome fw-bold text-center mb-5"><?= $oneDealArray['deals_title'] ?></h2>
                <div class="col-lg-4 col-11 mt-3 p-0">
                    <p><span class="fw-bolder">Good Deal : </span><?= $oneDealArray['deals_summary']  ?>
                    </p>
                    <p><span class="fw-bolder">Where : </span><?= $oneDealArray['deals_where']  ?></p>
                    <p><span class="fw-bolder">When : </span><?= $oneDealArray['deals_when']  ?></p>
                    <p><span class="fw-bolder">Price : </span><?= $oneDealArray['deals_price']  ?></p>
                    <p><span class="fw-bolder">Contact : </span>01 40 20 90 43</p>
                    <p><span class="fw-bolder">How to get here : </span><?= $oneDealArray['deals_metro']  ?></p>
                    <p><span class="fw-bolder">More info : </span><?= $oneDealArray['deals_info']  ?></p>
                    <p> <span class="fw-bolder">Tags : </span>
                        <a href="arrondissements.php?choice=<?= $oneDealArray['tag_arr_id_TAG_ARR']  ?>" class="links">
                            # <?= $oneDealArray['tag_arr_name']  ?>
                        </a>
                        <?php foreach (explode(', ', $oneDealArray['DealsCatTagId']) as $value) { ?>
                            <a href="categories.php?category=<?= $value ?>" class="links"> <?php } ?>
                            <?php foreach (explode(', ', $oneDealArray['DealsCatTag']) as $value) { ?>
                                # <?= $value ?></a>
                        <?php } ?>
                    </p>
                </div>
                <div class="col-lg-5 carte">
                    <!-- ajouter classe map sur carte -->
                    <?= $oneDealArray['deals_map'] ?>
                </div>

                <div class="row mx-0 mt-5 p-0 justify-content-evenly">
                    <div class="col-lg-4 col-11 p-0">
                        <p>Share this on social media : <img src="../assets/images/socials/instagram.png" alt="instagram logo" class="logo">
                            <img src="../assets/images/socials/facebook.png" alt="facebook logo" class="logo">
                            <img src="../assets/images/socials/twitter.png" alt="twitter logo" class="logo">
                        </p>
                        <p class="filAriane">Deals submited by <?= $oneDealArray['users_username'] ?> on <?= $oneDealArray['deals_created'] ?></p>
                    </div>
                </div>
                <!-- Gellery -->
                <h3 class="fst-italic comments fw-bold text-center p-5">Gallery</h3>
                <div class="container px-5">
                    <div class="row justify-content-center " data-masonry='{ "percentPosition": true }'>
                        <?php
                        foreach ($getAllImagesByDeal as $value) {
                            if ($value == '.' || $value == '..') {
                            } else {
                        ?>
                                <div class="col-11 col-lg-4 my-2 gallery ">
                                    <div class="">
                                        <a class="example-image-link" href="data:image/png;base64,<?= $value['images_name'] ?>" data-lightbox="galerie"><img src="data:image/png;base64,<?= $value['images_name'] ?>" data-lightbox="cozy" class="galleryPicture"></a>
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


                <?php if (isset($_SESSION['user'])) { ?>
                    <form action="deals.php?choice=<?= $oneDealArray['deals_id'] ?>#reviews" method="post">
                        <div class="row mx-0 p-0 my-2 bg-light justify-content-center">
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
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-11 d-flex d-flex justify-content-center">
                                    <div class="d-flex flex-column mt-2">
                                        <label>Your comment :<span class="text-danger"><?= isset($errors['dealComment']) ? $errors['dealComment'] : '' ?></span></label>
                                        <textarea rows="8" cols="40" name="dealComment" value="<?= isset($_POST['dealComment']) ? $_POST['dealComment'] : '' ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-11 d-flex justify-content-center">
                                <div class="my-1 text-center">
                                    <button class="btn bouton text-light" name="submit">Submit review</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="thankYou pb-2">
                        Thank you for you comment, please note that in order to avoird spam, your review will be published after validation
                    </div>
                <?php } else { ?>
                    <div class="text-secondary p-2">
                        Please <a href="loginAdmin.php" class="text-decoration-none fw-bold text-secondary">login</a> or <a href="signUp.php" class="text-decoration-none fw-bold text-secondary">signup</a> to leave a review
                    </div>
                <?php } ?>

            </div>
        </main>
    <?php } else { ?>
        <div class="container bg-white col-lg-8 text-center my-5 py-5  shadow">
            <p class="p-5">This deal does not exist, you can go back to our <a href="home.php" class="text-decoration-none text-black fw-bold">homepage</a></p>
        </div>
    <?php }
    ?>



    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>