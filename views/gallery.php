<?php
session_start();
require_once '../controllers/gallery-controller.php';
//  var_dump($getOneGallery); 
?>

<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg justify-content-center">
    <?php include '../elements/header.php' ?>

    <main>
        <div class="row justify-content-center mx-0 py-5 my-5" id="page">
            <div class="bg-white  shadow-sm col-lg-12 p-4 col-11">
                <a class="fs-6 text-secondary px-5 my-3" href="allDeals.php">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back
                </a>
                <?php if (empty($getOneGallery)) { ?>
                    <h2 class="text-center pt-5 fst-italic welcome">This gallery is empty</h2>
                <?php } else { ?>
                    <h2 class="text-center pt-5 fst-italic welcome">Gallery for <?= $oneDealArray['deals_title'] ?> </h2>
                <?php } ?>


                <div class="row justify-content-center mx-auto py-3" data-masonry='{ "percentPosition": true }'>

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
                <div class="text-center mt-5">
                    <a class="col-2 text-decoration-none" href="upload.php?deal=<?= $oneDealArray['deals_id']  ?>">
                        <button class="btn text-white bouton">Add an Image</button>
                    </a>
                    <?php if (!empty($getOneGallery[1]) ) { ?>
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