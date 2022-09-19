<?php
session_start();
require_once '../controllers/allGallery-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">


        <div class="col-lg-10 col-11 text-center">
            <div class="table-responsive table-hover">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">#</th> -->
                            <th class="text-center">Title</th>
                            <th class="text-center">Add an Image</th>
                            <th class="text-center">Gallery</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($AllDealsArray as $value) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $value['deals_title'] ?></td>
                                <td class="text-center">
                                    <a class="text-light btn bouton" href="upload.php?deal=<?= $value['deals_id'] ?>">
                                        add an imge
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="text-light btn bouton" href="gallery.php?deal=<?= $value['deals_id'] ?>">
                                       Gallery
                                    </a>
                                </td>
                            </tr>

                            <div class="modal fade" id="deals-<?= $value['deals_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title fs-4" id="exampleModalLabel"><?= $value['deals_title'] ?></p>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to delete this deal ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="" method="POST">
                                                <button class="btn btn-primary" name="delete" value="<?= $value['deals_id'] ?> ">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-5">

                <a class="text-decoration-none" href="dashboard-deals.php">
                    <button class="btn text-white bg-info">back</button>
                </a>

            </div>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>

</body>

</html>