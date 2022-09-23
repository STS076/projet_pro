<?php
session_start();
require_once '../controllers/validatecomments-controller.php';
// var_dump($_POST);
// var_dump($allComments);

?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg  justify-content-center">
    <?php include '../elements/header.php' ?>

    <div class="row  justify-content-center mx-0 py-5 my-5" id="page">
        <div class="bg-white  shadow-sm col-lg-12 p-5 col-11">
            <a class="fs-6 text-secondary  my-3" href="dashboard-comments.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="text-center p-5 fst-italic welcome">Validate Comments</h2>
            <div class="table-responsive table-hover">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">User</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Deal</th>
                            <th class="text-center">Comment</th>
                            <th class="text-center">Rating</th>
                            <th class="text-center">More Info</th>
                            <th class="text-center">Approve</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($allComments as $value) {
                            if ($value['comments_validate'] != 1) {
                        ?>
                                <tr>
                                    <td class="text-center"><?= $value['users_username'] ?></td>
                                    <td class="text-center"><?= $value['comments_date'] ?></td>
                                    <td class="text-center"><?= $value['deals_title'] ?></td>
                                    <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_comment'] ?></td>
                                    <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_rating'] ?></td>
                                    <td class="text-center"><a class="text-light btn bouton" href="infoComments.php?info=<?= $value['deals_id'] ?>"> + d'info</a></td>

                                    <!-- bouton approve -->
                                    <form method="POST" action="" name="form-<?= $value["comments_id"] ?>">
                                        <td class="text-center">
                                            <button class="text-light btn bg-success" name="approve" value=<?= $value["comments_id"] ?>>
                                                Approve
                                            </button>
                                        </td>
                                    </form>
                                    <!-- fin bouton approve -->

                                    <!-- bouton delete -->
                                    <form method="POST" action="">
                                        <td class="text-center">
                                            <a class="text-light btn bg-danger" name="delete" data-bs-toggle="modal" data-bs-target="#comments-<?= $value['comments_id'] ?>">
                                                Delete
                                            </a>
                                        </td>
                                    </form>
                                    <!-- fin bouton delete -->
                                </tr>

                                <!-- MODALE DELELTE -->
                                <div class="modal fade" id="comments-<?= $value['comments_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title fs-4" id="exampleModalLabel"><?= $value['comments_id'] ?> </p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                do you want to delete this comment ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                <form action="" method="POST">
                                                    <button class="btn btn-primary" name="delete" value="<?= $value['comments_id'] ?> ">Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIN MODALE DELETE -->

                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <?php include '../elements/footer.php' ?>

</body>

</html>