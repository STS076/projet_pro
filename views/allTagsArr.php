<?php
session_start();
require_once '../controllers/allTagsArr-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center container">
    <?php include '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0 pb-5" id="page">
            <a class="fs-6 text-secondary my-3 " href="dashboard-tagsArr.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="fs-2 text-center welcome pb-4">All Arrondissement
            </h2>
            <div class="table-responsive col-lg-8 col-12 text-center pb-5">
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
                                        Info
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