<?php
session_start();
require_once '../controllers/allTagsArr-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column  my-5 p-5 bg-light shadow">
        <h2 class="fs-2 text-center welcome py-2">All Arrondissement
        </h2>
        <div class="table-responsive col-lg-8 col-12 text-center ">

            <table class="table  table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Arrondissements</th>
                        <th class="text-center">More info</th>
                        <th class="text-center">Amend</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allTagsArrArray as $value) { ?>
                        <tr>
                            <td class="text-center"><?= $value['tag_arr_name'] ?></td>
                            <td class="text-center">
                                <a class=" text-white btn bouton" href="infoArr.php?info=<?= $value['tag_arr_id'] ?>">
                                    More info
                                </a>
                            </td>
                            <td class="text-center">
                                <a class=" text-white btn bouton" href="amendArr.php?amend=<?= $value['tag_arr_id'] ?>">
                                    Amend
                                </a>
                            </td>
                            <td class="text-center">
                                <a class=" text-white btn bg-danger" type="button" data-bs-toggle="modal" data-bs-target="#tagArr-<?= $value['tag_arr_id'] ?>">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="tagArr-<?= $value['tag_arr_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title fs-4" id="exampleModalLabel">
                                            <?= $value['tag_arr_name'] ?>
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete this arrondissement ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <form action="" method="POST">
                                            <button class="btn btn-primary" name="delete" value="<?= $value['tag_arr_id'] ?> ">Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </tbody>
            </table>
            <div class="mt-5">

                <a class="text-decoration-none" href="dashboard-tagsArr.php">
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