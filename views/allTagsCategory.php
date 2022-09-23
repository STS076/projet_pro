<?php
session_start();
require_once '../controllers/allTagsCategory-controller.php';
?>
<?php include '../elements/top.php' ?>

<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex bg-light align-items-center flex-column my-5 p-5  shadow">
        <div class="col-lg-8 col-12 text-center ">
            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Category</th>
                        <th class="text-center">More Info</th>
                        <th class="text-center">Amend</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allTagsCategoryArray as $value) { ?>
                        <tr>
                            <!-- <td class="text-center"><?= $value['tag_categories_id'] ?></td> -->
                            <td class="text-center"><?= $value['tag_categories_name'] ?></td>
                            <td class="text-center">
                                <a class="btn bouton text-light" href="infoCat.php?info=<?= $value['tag_categories_id'] ?>">
                                    + d'info
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn bouton text-light" href="amendCategories.php?amend=<?= $value['tag_categories_id'] ?>">
                                    Modifier
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn bg-danger text-light" type="button" data-bs-toggle="modal" data-bs-target="#categories-<?= $value['tag_categories_id'] ?>">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade" id="categories-<?= $value['tag_categories_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title fs-4" id="exampleModalLabel"><?= $value['tag_categories_name'] ?></p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete this category ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Fermer
                                        </button>
                                        <form action="" method="POST">
                                            <button class="btn btn-primary" name="delete" value="<?= $value['tag_categories_id'] ?> ">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
            <div class="mt-5">
                <a class="text-decoration-none" href="dashboard-tagsCategories.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>
        </div>
    </div>

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

    <?php include '../elements/footer.php' ?>

</body>

</html>