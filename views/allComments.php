<?php
session_start();
require_once '../controllers/allComments-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg justify-content-center">
    <?php include '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0 pb-5" id="page">
            <?php if ($_SESSION['user']['role_id_ROLE'] == 3) { ?>
                <a class="fs-6 text-secondary my-3" href="dashboard.php">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back
                </a>
            <?php } else { ?>
                <a class="fs-6 text-secondary  my-3" href="dashboard.php">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back
                </a>
            <?php } ?>
            <div class="col-lg-12 col-11">
                <?php if ($_SESSION['user']['role_id_ROLE'] != 1 && $_SESSION['user']['role_id_ROLE'] != 2) { ?>
                    <h2 class="fs-2  pt-5 pb-3 text-center welcome ">Comments submited by <?= $_SESSION['user']['users_username'] ?></h2>
                <?php } else { ?>
                    <h2 class="fs-2  pt-5 pb-3 text-center welcome ">All comments</h2>
                <?php } ?>

                <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                    <div class="col-lg-8 col-11 mx-auto">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for an user ..." class="px-5 my-2 shadow-sm myInput">
                    </div>
                <?php } ?>
                <div class="col-lg-12 col-11 text-center pt-5">
                    <div class="table-responsive table-hover">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                                        <th class="text-center">User</th>
                                    <?php } ?>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Deal</th>
                                    <th class="text-center">Rating</th>
                                    <th class="text-center">More Info</th>
                                    <th class="text-center">Status</th>
                                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                        <th class="text-center">Delete</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($_SESSION['user']['role_id_ROLE'] != 3) {
                                    foreach ($allComments as $value) {
                                ?>
                                        <tr>
                                            <td class="text-center"><?= $value['users_username'] ?></td>
                                            <td class="text-center"><?= $value['comments_date'] ?></td>
                                            <td class="text-center"><?= $value['deals_title'] ?></td>
                                            <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_rating'] ?></td>
                                            <td class="text-center">
                                                <a class="text-light btn bouton" href="infoComments.php?info=<?= $value['comments_id'] ?>">
                                                    Info
                                                </a>
                                            </td>

                                            <?php if ($value["comments_validate"] == 1) { ?>
                                                <form method="POST" action="" name="form-<?= $value["comments_id"] ?>">
                                                    <td class="text-center">
                                                        <button class="text-light btn activated" name="archive" value=<?= $value["comments_id"] ?>>
                                                            Activated</button>
                                                    </td>
                                                </form>
                                            <?php } else if ($value["comments_validate"] == 2) { ?>
                                                <form method="POST" action="" name="form-<?= $value["comments_id"] ?>">
                                                    <td class="text-center">
                                                        <button class="text-light btn archive" name="reactivate" value=<?= $value["comments_id"] ?>>
                                                            Achived</button>
                                                    </td>
                                                </form>
                                            <?php } else { ?>
                                                <td class="text-center">
                                                    <p class="text-danger">Submited</p>
                                                </td>
                                            <?php } ?>

                                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                                <form method="POST" action="">
                                                    <td class="text-center">
                                                        <a class="text-light btn bg-danger" name="delete" data-bs-toggle="modal" data-bs-target="#comments-<?= $value['comments_id'] ?>">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </form>
                                            <?php }  ?>
                                        </tr>
                                        <div class="modal fade" id="comments-<?= $value['comments_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="modal-title fs-4 welcome" id="exampleModalLabel"><?= $value['users_username'] ?> for <?= $value['deals_title'] ?></p>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        do you want to delete this comment ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bouton text-white" data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <form action="" method="POST">
                                                            <button class="btn btn-danger" name="delete" value="<?= $value['comments_id'] ?> ">
                                                                Supprimer
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                }
                                ?>
                                <?php
                                if ($_SESSION['user']['role_id_ROLE'] == 3) {
                                    foreach ($getCommentsByUser as $value) {
                                ?>
                                        <tr>
                                            <td class="text-center"><?= $value['comments_date'] ?></td>
                                            <td class="text-center"><?= $value['deals_title'] ?></td>
                                            <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_rating'] ?></td>
                                            <td class="text-center"><a class="text-light btn bouton" href="infoComments.php?info=<?= $value['comments_id'] ?>"> + d'info</a></td>
                                            <?php if ($value['comments_validate'] == 0) { ?>
                                                <td class="text-center text-danger">Submited</td>
                                            <?php } else if ($value['comments_validate'] == 1) { ?>
                                                <td class="text-center text-success">Validated</td>
                                            <?php } else if ($value['comments_validate'] == 2) { ?>
                                                <td class="text-center text-info">Archived</td>
                                            <?php } ?>

                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </main>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>
    <script src="../assets/script/filterImages.js"></script>

</body>

</html>