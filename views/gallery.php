<?php
session_start();
require_once '../controllers/gallery-controller.php';
//  var_dump($getOneGallery); 
?>

<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <main>
        <h2 class="text-center pt-5 fst-italic comments">Gallery for <?= $getOneGallery[0]['deals_title']?> </h2>
        <div class="container p-5">
            <div class="row justify-content-center " data-masonry='{ "percentPosition": true }'>
                <?php
                foreach ($getOneGallery as $value) {
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
            <div class="mt-5 text-center">
                <a class="text-decoration-none" href="allGallery.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>