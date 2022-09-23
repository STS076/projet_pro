<?php
session_start();
require_once '../controllers/manageGalleries-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">

        <div class="d-flex justify-content-start">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a title ..." class="px-5 my-2 shadow-sm myInput">
        </div>

        <div class="col-lg-10 col-11 text-center">
            <div class="table-responsive table-hover">
                <table class="table" id="myTable" >
                    <thead>
                        <tr>
                            <!-- <th class="text-center">#</th> -->
                            <th class="text-center">Title</th>
                            <th class="text-center">Delete an Image</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php foreach ($getDealsWithImages as $value) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $value['deals_title'] ?></td>
                                <td class="text-center">
                                    <a class="text-light btn bg-danger" href="deleteImage.php?deal=<?= $value['deals_id'] ?>">
                                        Delete
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

                <a class="text-decoration-none" href="dashboard-images.php">
                    <button class="btn text-white bg-info">back</button>
                </a>

            </div>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>
    <script src="../assets/script/filterImages.js"></script>
</body>

</html>