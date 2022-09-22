<?php
session_start();
require_once '../controllers/arrondissements-controller.php';
require_once '../elements/top.php';


// var_dump($exploreColor); 
?>

<body class="d-flex flex-column min-vh-100 backgroundAdmin">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white py-5 container px-0 min-vh-100">

        <h2 class="fs-2 text-center welcome pt-5 comments"><?= $oneArrondissement['tag_arr_name'] ?></h2>
        <div class="row m-0 justify-content-center">
            <div class="col-lg-8 col-11 p-3">
                <p><?= $oneArrondissement['tag_arr_summary'] ?>
                </p>
            </div>
        </div>
        <!-- <article> -->
        <div class="row justify-content-center mx-0 my-5">
            <?php foreach ($getDealByArr as $value) {
                if ($value['deals_validate'] == 1) { ?>
                    <div class="col-lg-3 col-11 bg-light shadow-sm mx-2 my-3 p-0">
                        <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid " alt="picture Jardin des tuileries">
                        <div class="">
                            <p class="card-title text-center fw-bold fs-3 "><?= $value['deals_title'] ?></p>
                            <p class="card-text"><?= $value['deals_mini_summary'] ?></p>
                            <div class="d-flex justify-content-end p-2">
                                <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="links">Explore</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
        <!-- </article> -->
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>