<?php
session_start();
require_once '../elements/top.php';
require_once '../controllers/arrondissements-controller.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <main>

        <h2 class="text-center fst-italic my-5 comments"><?= $oneArrondissement['tag_arr_name'] ?></h2>
        <div class="row m-0 justify-content-center">
            <div class="col-lg-8 col-11 ">
                <p><?= $oneArrondissement['tag_arr_summary'] ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-evenly mx-0 my-5">
            <?php foreach ($getDealByArr as $value) { ?>
                <div class="card mb-3 m-2 p-0 col-lg-5 col-11 shadow-sm">
                    <div class="row mx-0 p-0">
                        <div class="col-md-6 m-0 p-0 text-center">
                            <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid rounded-start" alt="picture Jardin des tuileries">
                        </div>
                        <div class="col-md-6 m-0 p-0">
                            <div class="card-body">
                                <p class="card-title text-center fw-bold fs-5"><?= $value['deals_title'] ?></p>
                                <p class="card-text"><?= $value['deals_mini_summary'] ?></p>
                                <a href="deals.php?choice=<?= $value['deals_title'] ?>">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>




    <?php require_once '../elements/footer.php' ?>

</body>

</html>