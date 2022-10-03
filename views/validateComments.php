<?php
session_start();
require_once '../controllers/validatecomments-controller.php';
// var_dump($_POST);
// var_dump($allComments);

?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center">
    <?php include '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid ">
        <div class="row bg-white justify-content-center m-0 p-0 pb-5" id="page">
            <a class="fs-6 text-secondary  my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class="col-lg-12 col-11 pb-5">

                <h2 class="fs-2  pt-5 pb-3 text-center welcome">Validate Comments</h2>

                <?php if ($numberofNewComments['count(comments_id)'] == 0) { ?>
                    <p class="text-center fs-3">There no new review</p>
                <?php } else { ?>
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
                                    <th class="text-center">Archive</th>
                                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                        <th class="text-center">Delete</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($allComments as $value) {
                                    if ($value['comments_validate'] == 0) {
                                ?>
                                        <tr>
                                            <td class="text-center"><?= $value['users_username'] ?></td>
                                            <td class="text-center"><?= $value['comments_date'] ?></td>
                                            <td class="text-center"><?= $value['deals_title'] ?></td>
                                            <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_comment'] ?></td>
                                            <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_rating'] ?></td>
                                            <td class="text-center"><a class="text-light btn bouton" href="infoComments.php?info=<?= $value['comments_id'] ?>">Info</a></td>

                                            <!-- bouton approve -->
                                            <form method="POST" action="" name="form-<?= $value["comments_id"] ?>">
                                                <td class="text-center">
                                                    <button class="text-light btn bg-success" name="approve" value=<?= $value["comments_id"] ?>>
                                                        Approve
                                                    </button>
                                                </td>
                                            </form>
                                            <!-- fin bouton approve -->

                                            <!-- Bonton archiver -->
                                            <form method="POST" action="" name="archive-<?= $value["comments_id"] ?>">
                                                <td class="text-center">
                                                    <button class="text-light btn activated" name="archive" value=<?= $value["comments_id"] ?>>
                                                        Archive
                                                    </button>
                                                </td>
                                            </form>
                                            <!-- fin bouton archiver -->
                                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                                <!-- bouton delete -->
                                                <form method="POST" action="">
                                                    <td class="text-center">
                                                        <a class="text-light btn bg-danger" name="delete" data-bs-toggle="modal" data-bs-target="#comments-<?= $value['comments_id'] ?>">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </form>
                                                <!-- fin bouton delete -->
                                            <?php } ?>
                                        </tr>

                                        <!-- MODALE DELELTE -->
                                        <div class="modal fade" id="comments-<?= $value['comments_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="modal-title fs-4 welcome" id="exampleModalLabel">Comment for <?=$value['deals_title']  ?> </p>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        do you want to delete this comment ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn text-white bouton" data-bs-dismiss="modal">Close</button>
                                                        <form action="" method="POST">
                                                            <button class="btn btn-danger" name="delete" value="<?= $value['comments_id'] ?> ">Delete</button>
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
                <?php } ?>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <?php include '../elements/footer.php' ?>

</body>

</html>