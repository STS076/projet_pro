<?php
session_start();
require_once '../controllers/infoDeals-controller.php';
$gallerie = scandir('../assets/images/gallery/');

require_once '../elements/top.php';
?>

<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>


    <a class="fs-6 text-secondary px-5 my-3" href="allDeals.php">
    <i class='bi bi-caret-left-fill links mx-2'></i> back
    </a>


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
                <a class="links"># <?= $oneDealArray['tag_arr_name']  ?></a>
                <!-- href="arrondissements.php?choice=<?= $oneDealArray['tag_arr_id_TAG_ARR']  ?>" -->
                <?php foreach (explode(', ', $oneDealArray['DealsCatTag']) as $value) { ?>
                    <a class="links"># <?= $value ?></a>
                    <!-- href="categories.php?category=<?= $value ?>" -->
                <?php }
                ?>
            </p>
        </div>
        <div class="col-lg-5 carte">
            <?= $oneDealArray['deals_map']  ?>
        </div>
        <div class="container px-5">
            <div class="row justify-content-center " data-masonry='{ "percentPosition": true }'>
                <?php
                foreach ($getAllImagesByDeal as $value) {
                    if ($value == '.' || $value == '..') {
                    } else {
                ?>
                        <div class="col-11 col-lg-4 my-2 gallery ">
                            <div class="">
                                <a class="example-image-link" href="data:image/png;base64,<?= $value['images_name'] ?>" data-lightbox="galerie"><img src="data:image/png;base64,<?= $value['images_name'] ?>" data-lightbox="cozy" class="galleryPicture"></a>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>


        <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
            <div class="row mt-5 justify-content-center">
                <a class="col-2 text-decoration-none" href="amendDeals.php?amend=<?= $oneDealArray['deals_id'] ?>">
                    <button class="btn text-white bg-info">Modify Deal</button>
                </a>
                <a class="col-2 text-decoration-none"  href="upload.php?deal=<?=$oneDealArray['deals_id']  ?>">
                    <button class="btn text-white bg-info">Add an Image</button>
                </a>
                <a class="col-2 text-decoration-none"  href="deleteImage.php?deal=<?= $oneDealArray['deals_id'] ?>">
                    <button class="btn text-white bg-info">Delete an image</button>
                </a>
            </div>
        <?php } ?>

    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>