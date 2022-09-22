<?php
session_start();
require_once '../controllers/home-controller.php';
// var_dump($exploreColor);
// require_once '../data/data.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100 backgroundAdmin p-0 m-0">
    <?php require_once '../elements/header.php' ?>

    <main class="bg-white py-5 container px-0">
        <div class="row m-0 p-0 justify-content-center">
            <div class="col-lg-11 col-11">
                <p class=" text-center welcome2 ">Welcome To Paris</p>
                <!-- <p><?= $_SESSION['user']['users_name'] ?></p> -->
                <p class="fs-6 text-center">You want to visit the most beautiful city in the world, but do not want to get ruined ? Well, you've come to the right place, welcome to <span class="fst-italic">it's always better when it's free</span> where you can learn all about free activities in Paris and other good deals. Our team picked the best activities to do alone or with friends and family. you will be able to find free deals and deals for less than 20 €</p>
            </div>
        </div>

        <div class=" row justify-content-evenly mx-0 my-5 py-5 bg-light">
            <div class="col-lg-2 col-11 hotDeals mx-1 my-3 py-5 d-flex align-items-center">
                <p class="text-light fw-bold fs-2 text-center welcome">Our better rated deals</p>
            </div>
            <?php foreach ($hotDeals as $value) {
                if ($value['deals_validate'] == 1) { ?>
                    <div class="col-lg-2 col-11 bg-light shadow-sm mx-2 my-3 p-0">
                        <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid" alt="picture Jardin des tuileries">
                        <div class="">
                            <p class="text-center fw-bold fs-5 newDealsWrite my-1"><?= $value['deals_title'] ?></p>
                            <p class=""><?= $value['deals_mini_summary'] ?></p>
                            <div class="d-flex justify-content-end p-2">
                                <p><?= $value['DealsCatTag'] ?></p>
                                <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="">Explore</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>


        <section class="bg-white">
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-8 col-11">
                    <p class="fs-5 text-center fw-bold newsletter">Sign up to our newsletter</p>
                    <p class="text-center">You never want to miss any good deal ? Well, sign up to our newsletter to keep up with Paris' best deals.</p>
                    <form method="post" class="d-flex justify-content-center">
                        <div class="form-group m-0 p-0">
                            <input class="m-0 p-0" type="text" name="mail" placeholder="Your email" />
                            <input class="m-0 p-0" type="submit" value="Sign up" />
                            <p class="text-danger" id="errorsurname"><?= isset($erreurs['mail']) ? $erreurs['mail'] : '' ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="row m-0 p-0 justify-content-center">
            <div class="col-12 text-center">
                <p>You would like to join our community and help us to add new deals and keep everything up to date ? <a href="SignUp.php" class="text-dark text-decoration-none fw-bold">Join us</a> </p>
            </div>
        </div>

        <div class=" row justify-content-evenly my-4 mx-0 bg-light">
            <p class="fs-1 text-center welcome pt-5">What to do today in Paris ?</p>
            <?php foreach ($lastTenDeals as $value) {
                if ($value['deals_validate'] == 1) { ?>
                    <div class="col-lg-2 col-11 bg-light shadow-sm mx-2 my-3 p-0 order-sm-<?= $value['deals_id'] ?>">
                        <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid" alt="picture Jardin des tuileries">
                        <div class="">
                            <p class="text-center fw-bold fs-5 newDealsWrite my-1"><?= $value['deals_title'] ?></p>
                            <p class=""><?= $value['deals_mini_summary'] ?></p>
                            <div class="d-flex justify-content-end p-2">
                                <p><?= $value['DealsCatTag'] ?></p>
                                <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="newDealsWrite">Explore</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
            <div class="col-lg-2 col-11 newDeals mx-1 my-3 py-5 d-flex align-items-center order-sm-1">
                <p class="text-light fw-bold fs-2 text-center welcome">Our brand new deals</p>
            </div>
        </div>

        <p class="fs-1 text-center welcome comments">Arrondissements</p>
        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="col-12">
                <svg version="1.1" class="text-center" baseProfile="full">
                    <img usemap="#image-map" src="../assets/images/Land cover map of the city and department of Paris, France, equirectangular projection.svg">
                </svg>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>