<?php
session_start();
require_once '../controllers/deleteImage-controller.php';
// var_dump($getOneGallery);
?>

<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column  container mx-auto min-vh-100 background p-0 shadow-lg justify-content-center">

    <?php include '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid min-vh-100">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary my-3" href="gallery.php?deal=<?= $getOneGallery[0]['deals_id'] ?>">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <?php if (empty($getOneGallery)) { ?>
                <h2 class="text-center p-5 fst-italic welcome">
                    This Gallery is empty
                </h2>
            <?php } else { ?>
                <h2 class="text-center pt-5 fst-italic welcome">
                    Delete an image <?= $getOneGallery[0]['deals_title'] ?>
                </h2>
            <?php } ?>
            <div class=" col-lg-9 p-5 col-11">




                <?php
                foreach ($getOneGallery as $value) {
                    if ($value == '.' || $value == '..') {
                    } else {
                ?>
                        <div class="row justify-content-center ">
                            <div class="col-11 col-lg-4 my-2 gallery ">
                                <div class="">
                                    <a class="example-image-link" type="button" data-bs-toggle="modal" data-bs-target="#image-<?= $value['images_id'] ?>">
                                        <img src="data:image/png;base64,<?= $value['images_name'] ?>" data-lightbox="cozy" class="galleryPicture">
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="image-<?= $value['images_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title fs-4" id="exampleModalLabel">
                                            <?= $value['images_id'] ?>
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete this arrondissement ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <form action="" method="POST">
                                            <button class="btn btn-primary" name="delete" value="<?= $value['images_id'] ?> ">Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>