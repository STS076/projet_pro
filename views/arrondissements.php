<?php
session_start();
require_once '../elements/top.php';
require_once '../controllers/arrondissements-controller.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <main>

        <h2 class="text-center fst-italic mt-5 mb-2 comments"><?= $oneArrondissement['tag_arr_name'] ?></h2>
        <div class="row m-0 justify-content-center">
            <div class="col-lg-8 col-11 p-3">
                <p><?= $oneArrondissement['tag_arr_summary'] ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center mx-0 my-5">
            <?php foreach ($getDealByArr as $value) {
                if ($value['deals_validate'] == 1) { ?>
                    <div class="card col-lg-3 col-11 m-3 shadow-sm p-0 hotDeals cardarr">
                        <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid rounded-start" alt="picture Jardin des tuileries">
                        <div class="card-body py-4">
                            <p class="card-title text-center fw-bold fs-3 "><?= $value['deals_title'] ?></p>
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