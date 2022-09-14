<?php
session_start();
require_once '../controllers/allUsers-controller.php';
?>

<?php include '../elements/top.php' ?>


<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-lg-10 col-12 text-center">
            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <!-- <th class="text-center">#</th> -->
                        <th class="text-center">Username</th>
                        <th class="text-center">More Info</th>
                        <th class="text-center">Amends</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($AllUsersArray as $value) { ?>
                        <tr>
                            <!-- <td class="text-center"><?= $value['users_id'] ?></td> -->
                            <td class="text-center"><?= $value['users_username'] ?></td>
                            <td class="text-center">
                                <a class="btn bouton text-white" href="infoUsers.php?users=<?= $value['users_id'] ?>">
                                    + d'info
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn bg-warning" href="amendUsers.php?amend=<?= $value['users_id'] ?>">
                                    Modifier
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn bg-danger text-light" type="button" data-bs-toggle="modal" data-bs-target="#users-<?= $value['users_id'] ?>">
                                    Supprimer
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="users-<?= $value['users_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title fs-4" id="exampleModalLabel"><?= $value['users_name'] ?> <?= $value['users_surname'] ?></p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete this user ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Fermer
                                        </button>
                                        <form action="" method="POST">
                                            <button class="btn btn-primary" name="delete" value="<?= $value['users_id'] ?> ">
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
                <a class="text-decoration-none" href="dashboard-users.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>

</body>

</html>