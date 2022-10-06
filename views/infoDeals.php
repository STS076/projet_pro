<?php
session_start();
require_once '../controllers/infoDeals-controller.php';

require_once '../elements/top.php';
?>

<body class="mx-auto min-vh-100 background container p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary my-3" href="allDeals.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back all Deals
            </a>
            <br>
            <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                <a class="fs-6 text-secondary my-3" href="validateNewDeals.php">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back validation
                </a>
            <?php } ?>

            <div class="row m-0 justify-content-evenly pb-5">
                <h2 class="fst-italic fw-bold text-center "><?= $oneDealArray['deals_title'] ?> by <?= $oneDealArray['users_username'] ?></h2>

                <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                    <div class="row justify-content-evenly py-5">
                        <a class="col-2 text-decoration-none" href="amendDeals.php?amend=<?= $oneDealArray['deals_id'] ?>">
                            <button class="btn text-white bouton">Modify Deal</button>
                        </a>
                        <a class="col-2 text-decoration-none" href="upload.php?deal=<?= $oneDealArray['deals_id']  ?>">
                            <button class="btn text-white bouton">Add an Image</button>
                        </a>
                        <?php if (!empty($getOneGallery[1])) { ?>
                            <a class="col-2 text-decoration-none" href="deleteimage.php?deal=<?= $oneDealArray['deals_id']  ?>">
                                <button class="btn text-white bouton">Delete an image</button>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>

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

            </div>
        </div>
    </main>
    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>