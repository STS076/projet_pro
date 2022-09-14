<?php

session_start();
// var_dump($_SESSION);
require_once '../controllers/home-controller.php';
require_once '../data/data.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <main class="bg-white py-5">
        <div class="row m-0 p-0 justify-content-center">
            <div class="col-lg-8 col-11">
                <p class=" text-center welcome2 ">Welcome</p>
                <!-- <p><?= $_SESSION['user']['users_name'] ?></p> -->
                <p class="fs-6 text-center">You want to visit the most beautiful city in the world, but do not want to get ruined ? Well, you've come to the right place, welcome to <span class="fst-italic">it's always better when it's free</span> where you can learn all about free activities in Paris and other good deals.</p>
            </div>
        </div>

        <!-- <div class="row m-0 justify-content-center">
            <div class="col-lg-8 col-11 text-center">
                <p class="fs-1 text-center welcome">Hot Deals</p>
                <p class="fs-6 text-center">Find below our most popular deals, and where you should go have fun next.</p>
            </div>
        </div> -->

        <div class=" row justify-content-evenly mx-0 py-5 bg-light shadow">
            <div class="col-lg-2 col-11 bg-warning mx-2 my-3 py-5 d-flex align-items-center">
               <p class="text-light fw-bold fs-2 text-center welcome">Our better rated deals</p>
            </div>
            <?php foreach ($hotDeals as $value) { ?>
                <div class="col-lg-2 col-11 bg-light shadow-sm mx-2 my-3 py-3">
                    <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid" alt="picture Jardin des tuileries">
                    <div class="">
                        <p class="text-center fw-bold fs-5 text-warning my-1"><?= $value['deals_title'] ?></p>
                        <p class=""><?= $value['deals_mini_summary'] ?></p>
                        <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="text-warning">Explore</a>
                    </div>
                </div>
            <?php } ?>
        </div>

        <p class="fs-1 text-center welcome pt-5 comments">Arrondissements</p>
        <div class="row m-0 p-0 justify-content-center">
            <div class="col-lg-8 map">
                <iframe class="map" src="https://www.google.com/maps/d/embed?mid=1zEOpBycFxifCysQPRCzJy8cWFyh2FS0&ehbc=2E312F"></iframe>
            </div>
        </div>

        <div class="row mx-0 my-5 justify-content-center">

            <?php foreach ($allTagsArrArray as $value) {
            ?>
                <div class="col-lg-3 col-11 m-3 p-0 cardarr">
                    <div class="card cadre m-0 p-0 shadow-sm">
                        <img class="image m-0 p-0" src="../assets/images/arrondissements/<?= $value['tag_arr_picture'] ?>.jpg">
                        <p class="arrondissement"><a class="text-white glass hoverNav text-decoration-none" href="arrondissements.php?choice=<?= $value['tag_arr_id'] ?>"><?= $value['tag_arr_name'] ?></a></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </main>



    <main class="bg-white py-5">
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
    </main>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>