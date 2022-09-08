<?php
session_start();
require_once '../controllers/allComments-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-lg-12 col-11 text-center fw-bold">
            <div class="table-responsive table-hover">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">User</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Deal</th>
                            <th class="text-center">Comment</th>
                            <th class="text-center">Approve</th>
                            <th class="text-center">Delete</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allComments as $value) { ?>
                            <tr>
                                <th class="text-center"><?= $value['comments_id'] ?></th>
                                <th class="text-center"><?= $value['users_username'] ?></th>
                                <th class="text-center"><?= $value['comments_date'] ?></th>
                                <th class="text-center"><?= $value['deals_title'] ?></th>
                                <th class="text-center"><?= $value['comments_comment'] ?></th>
                                <td class="text-center"><a class="text-light btn bg-success">Approve</a></td>
                                <td class="text-center"><a class="text-light btn bg-danger" type="button" data-bs-toggle="modal" data-bs-target="#doctors-">Delete</a></td>

                            </tr>

                            <!-- <div class="modal fade" id="doctors-<?= $value['doctors_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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