<?php

session_start();

require_once '../controllers/home-controller.php';
require_once '../data/data.php';
require_once '../elements/top.php' ?>

<body class="background">

    <?php require_once '../elements/header.php' ?>


    <main class="bg-white py-5">
        <div class="row m-0 p-0 justify-content-center">
            <div class="col-lg-8 col-11">
                <p class="fs-1 text-center welcome">Welcome</p>
                <p class="fs-6 text-center">You want to visit the most beautiful city in the world, but do not want to get ruined ? Well, you've come to the right place, welcome to <span class="fst-italic">it's always better when it's free</span> where you can learn all about free activities in Paris and other good deals.</p>
            </div>
        </div>

        <div class="row mx-0 my-4 justify-content-center">

            <?php foreach ($arrondissements as $value) {
            ?>
                <div class="col-lg-3 col-11 m-2 p-0 shadow-sm">
                    <div class="card cadre m-0 p-0">
                        <img class="image m-0 p-0" src="../assets/images/arrondissements/<?= $value['picture'] ?>.jpg">
                        <p class="arrondissement"><a class="text-white text-decoration-none" href="arrondissements.php?choice=<?= $value['id'] ?>"><?= $value['arrondissement'] ?> Arrondissement</a></p>
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
                        <p class="text-danger" id="errorsurname"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></p>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>