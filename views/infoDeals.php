<?php
session_start();
require_once '../controllers/infoDeals-controller.php';
$gallerie = scandir('../assets/images/gallery/');

require_once '../elements/top.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="row mx-0 my-5 justify-content-evenly p-0">
        <h2 class="fst-italic fw-bold text-center mb-5"><?= $oneDealArray['deals_title'] ?> by <?= $oneDealArray['users_username'] ?></h2>
        <div class="col-lg-4 col-11 m-0 p-0">
            <p><span class="fw-bolder">Good Deal : </span><?= $oneDealArray['deals_summary']  ?>
            </p>
            <p><span class="fw-bolder">Where : </span><?= $oneDealArray['deals_where']  ?></p>
            <p><span class="fw-bolder">When : </span><?= $oneDealArray['deals_when']  ?></p>
            <p><span class="fw-bolder">Price : </span><?= $oneDealArray['deals_price']  ?></p>
            <p><span class="fw-bolder">Contact : </span> </span><?= $oneDealArray['deals_contact']  ?></p>
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
            <?= $oneDealArray['deals_map']  ?>
        </div>

        <div class="mt-5 text-center">
            <a class="text-decoration-none" href="allDeals.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>
        <div class="mt-5 text-center">
            <a class="text-decoration-none" href="amendDeals.php?amend=<?= $oneDealArray['deals_id'] ?>">
                <button class="btn text-white bg-info">Amend</button>
            </a>
        </div>

    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>