<?php
session_start();
require_once '../controllers/categories-controller.php';
// var_dump($oneCatArray['tag_categories_name']);
require_once '../elements/top.php';
?>

<body class="mx-auto min-vh-100 background p-0 shadow-lg  justify-content-center container">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white py-5 px-0 min-vh-100">
        <section class="">
            <h2 class="fs-2 text-center welcome pt-1 comments"><?= $oneCatArray['tag_categories_name'] ?></h2>
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-8 col-11 text-center lineHeight">
                    <p><?= $oneCatArray['tag_categories_summary'] ?>
                    </p>
                </div>
            </div>
            <article>
                <div class="row justify-content-evenly mx-0 my-3 p-0">
                    <?php
                    foreach ($getDealByCat as $value) {
                        if ($value['deals_validate'] == 1) {
                    ?>
                            <div class="col-lg-3 col-11 shadow-sm  mx-4 my-3 p-0  <?= $cardColors[$oneCatArray['tag_categories_name']]  ?> ">
                                <?php
                                $images = $image->getOneGallery($value['deals_id']);
                                ?>
                                <img src="data:image/png;base64,<?= $images[0]['images_name'] ?>" class="m-0 p-0 img-fluid imgArrCat" alt="<?= $value['deals_title'] ?>">
                                <div class="
                               
                                ">
                                    <p class="card-title text-center fw-bold welcome fs-4 py-2"><?= $value['deals_title'] ?></p>
                                    <p class="p-2 card-text"><?= $value['deals_mini_summary'] ?></p>
                                    <div class="d-flex justify-content-end p-2">
                                        <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="newDealsWrite">Explore</a>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
            </article>
        </section>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>