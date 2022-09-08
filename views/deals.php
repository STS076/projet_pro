<?php
session_start();
require_once '../controllers/deals-controller.php';
$gallerie = scandir('../assets/images/gallery/');
require_once '../elements/top.php';
?>

<body class="m-0 p-0">

    <?php require_once '../elements/header.php' ?>

    <main>
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
                    <a href="arrondissements.php?choice=<?= $oneDealArray['tag_arr_id_TAG_ARR']  ?>"># <?= $oneDealArray['tag_arr_name']  ?></a>

                    <?php foreach (explode(', ', $oneDealArray['DealsCatTag']) as $value) { ?>
                        <a href="categories.php?category=<?= $value ?>"># <?= $value ?></a>
                    <?php }
                    ?>



                </p>
            </div>
            <div class="col-lg-5 carte">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6882148443183!2d2.3228064656745855!3d48.86415552928805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2c30000001%3A0xc219db09e1bfefc7!2sJardin%20des%20Tuileries!5e0!3m2!1sfr!2sfr!4v1658575489794!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


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



            <div class="row mx-0 mt-5 p-0 justify-content-evenly">
                <div class="col-lg-8 col-11">
                    <a href="contact.php" class="text-secondary">You noticed any mistake on this deal ? please contact us.</a>
                </div>
            </div>
        </div>


        <div class="row mx-0 p-0 my-5 bg-light justify-content-center">
            <h3 class="fst-italic text-center fw-bold comments pt-3">Reviews</h3>
            <div class="col-lg-8 col-11 d-flex justify-content-center">
                <form action="" method="post">

                    <div class="d-flex flex-column">
                        <label for="rating">Rating : <span class="text-danger"><?= isset($errors['dealRating']) ? $errors['dealRating'] : '' ?></span></label>
                        <span class="rating">
                            <input type="radio" name="dealRating" value="<?= isset($_POST['dealRating']) ? $_POST['dealRating'] : '' ?>"><label for="5">☆</label>
                            <input type="radio" name="dealRating" value="<?= isset($_POST['dealRating']) ? $_POST['dealRating'] : '' ?>"><label for="4">☆</label>
                            <input type="radio" name="dealRating" value="<?= isset($_POST['dealRating']) ? $_POST['dealRating'] : '' ?>"><label for="3">☆</label>
                            <input type="radio" name="dealRating" value="<?= isset($_POST['dealRating']) ? $_POST['dealRating'] : '' ?>"><label for="2">☆</label>
                            <input type="radio" name="dealRating" value="<?= isset($_POST['dealRating']) ? $_POST['dealRating'] : '' ?>"><label for="1">☆</label>
                        </span>

                    </div>
                    <div class="d-flex flex-column">
                        <label>Your comment :<span class="text-danger"><?= isset($errors['dealComment']) ? $errors['dealComment'] : '' ?></span></label>
                        <textarea rows="8" cols="40" name="dealComment" value="<?= isset($_POST['dealComment']) ? $_POST['dealComment'] : '' ?>"></textarea>
                    </div>
                    <div class="my-3 text-center">
                        <button class="btn bouton text-light" name="submit">Submit review</button>
                    </div>

                </form>



            </div>

        </div>


    </main>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>