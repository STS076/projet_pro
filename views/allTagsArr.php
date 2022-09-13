<?php
session_start();
require_once '../controllers/allTagsArr-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-lg-8 col-12 text-center fw-bold">

            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <!-- <th class="text-center">#</th> -->
                        <th class="text-center">Arrondissements</th>
                        <th class="text-center">More info</th>
                        <th class="text-center">Amend</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allTagsArrArray as $value) { ?>
                        <tr>
                            <!-- <th class="text-center"><?= $value['tag_arr_id'] ?></th> -->
                            <th class="text-center"><?= $value['tag_arr_name'] ?></th>

                            <td class="text-center"><a class=" text-white btn bouton" href="infoArr.php?info=<?= $value['tag_arr_id'] ?>">More info</a></td>
                            <td class="text-center"><a class=" text-white btn bouton" href="amendArr.php?amend=<?= $value['tag_arr_id'] ?>">Amend</a></td>
                            <td class="text-center"><a class=" text-white btn bg-danger" type="button" data-bs-toggle="modal" data-bs-target="#tagArr-<?= $value['tag_arr_id'] ?>">Delete</a></td>
                        </tr>

                        <!-- <div class="modal fade" id="tagArr-<?= $doctors['doctors_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title fs-4" id="exampleModalLabel"><?= $doctors['doctors_lastname'] ?> <?= $doctors['doctors_name'] ?></p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Voulez vous supprimer le médecin ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <form action="" method="POST">
                                            <button class="btn btn-primary" name="delete" value="<?= $doctors['doctors_id'] ?> ">Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->

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

    <?php include '../elements/footer.php' ?>

</body>

</html>