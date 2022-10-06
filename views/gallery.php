<?php
session_start();
require_once '../controllers/gallery-controller.php';
?>

<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background p-0 shadow-lg container justify-content-center">
    <?php include '../elements/header.php' ?>
    <main class="bg-white px-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0" id="page">
            <a class="fs-6 text-secondary my-3" href="allDeals.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <?php if (empty($getOneGallery)) { ?>
                <h2 class="text-center pt-5 fst-italic welcome">This gallery is empty</h2>
            <?php } else { ?>
                <h2 class="text-center pt-5 fst-italic welcome">Gallery for <?= $oneDealArray['deals_title'] ?> </h2>
            <?php } ?>

            <div class="container mx-auto">
                <div class="row justify-content-center mx-auto" data-masonry='{ "percentPosition": true }'>

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
                <div class="text-center my-5">
                    <a class="col-2 text-decoration-none" href="upload.php?deal=<?= $oneDealArray['deals_id']  ?>">
                        <button class="btn text-white bouton">Add an Image</button>
                    </a>
                    <?php if (!empty($getOneGallery[1])) { ?>
                        <a class="col-2 text-decoration-none" href="deleteimage.php?deal=<?= $oneDealArray['deals_id']  ?>">
                            <button class="btn text-white bg-danger">Delete an image</button>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <?php if (isset($_SESSION['swal'])) { ?>
        <script>
            Swal.fire({
                icon: '<?= $_SESSION['swal']['icon'] ?>',
                title: '<?= $_SESSION['swal']['title'] ?>',
                text: '<?= $_SESSION['swal']['text'] ?>'
            })
        </script>
    <?php
        unset($_SESSION['swal']);
    } ?>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>