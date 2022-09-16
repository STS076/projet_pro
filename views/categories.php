<?php
session_start();
require_once '../controllers/categories-controller.php';
require_once '../elements/top.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <main>

        <h2 class="text-center fst-italic mt-5 mb-2 comments"><?= $oneCatArray['tag_categories_name'] ?></h2>
        <div class="row m-0 justify-content-center">
            <div class="col-lg-8 col-11 text-center">
                <p><?= $oneCatArray['tag_categories_summary'] ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center mx-0 my-5">
            <?php foreach ($getDealByCat as $value) {
                if ($value['deals_validate'] == 1) { ?>
                     <div class="col-lg-3 col-11 bg-light shadow-sm mx-2 my-3 p-0">
                        <img src="../assets/images/tuileriesDeal.webp" class=" img-fluid m-0 p-0" alt="picture Jardin des tuileries">
                        <div class="">
                            <p class="card-title text-center fw-bold fs-5"><?= $value['deals_title'] ?></p>
                            <p class="card-text"><?= $value['deals_mini_summary'] ?></p>
                            <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="links">Explore</a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </main>



    <?php require_once '../elements/footer.php' ?>

</body>

</html>