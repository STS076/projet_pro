<?php
session_start();
require_once '../controllers/allDeals-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg justify-content-center">
    <?php include '../elements/header.php' ?>
    <main class="bg-white px-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0" id="page">

            <a class="fs-6 text-secondary my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>

            <?php if ($_SESSION['user']['role_id_ROLE'] != 1 && $_SESSION['user']['role_id_ROLE'] != 2) { ?>
                <h2 class="fs-2 text-center welcome ">Deals submited by <?= $_SESSION['user']['users_username'] ?></h2>
            <?php } else { ?>
                <h2 class="fs-2 text-center welcome ">All Deals</h2>
            <?php } ?>

            <div class="col-lg-12 col-11 py-4">
                <div class="col-lg-8 col-11 mx-auto">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a category ..." class="px-5 my-2 shadow-sm myInput">
                </div>

                <div class="col-lg-12 col-11 text-center pt-5 table-responsive">
                    <div class=" table-hover">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <!-- <th class="text-center">ID</th> -->
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Arrondissement</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">More Info</th>
                                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                                        <th class="text-center">Amend</th>
                                        <th class="text-center">Images</th>
                                        <th class="text-center">Status</th>
                                    <?php } ?>
                                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                        <th class="text-center">Delete</th>
                                    <?php } ?>
                                    <?php if ($_SESSION['user']['role_id_ROLE'] == 3) { ?>
                                        <th class="text-center">Status</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) {
                                    foreach ($AllDealsArray as $value) {
                                ?>

                                        <tr>
                                            <!-- <td class="text-center"><?= $value['deals_id'] ?></td> -->
                                            <td class="text-center"><?= $value['deals_title'] ?></td>
                                            <td class="text-center"><?= $value['tag_arr_name'] ?></td>
                                            <td class="text-center"><?= $value['DealsCatTag'] ?></td>
                                            <td class="text-center"><a class="text-light btn bouton" href="infoDeals.php?info=<?= $value['deals_id'] ?>">Info</a></td>

                                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>

                                                <td class="text-center"><a class="text-light btn bouton" href="amendDeals.php?amend=<?= $value['deals_id'] ?>">Amend</a></td>
                                                <td class="text-center"><a class="text-light btn bouton" href="gallery.php?deal=<?= $value['deals_id'] ?>">Images</a></td>
                                                <?php if ($value["deals_validate"] == 1) { ?>
                                                    <form method="POST" action="" name="form-<?= $value["deals_id"] ?>">
                                                        <td class="text-center">
                                                            <button class="text-light btn activated" name="archive" value=<?= $value["deals_id"] ?>>Activated</button>
                                                        </td>
                                                    </form>
                                                <?php } else  if ($value["deals_validate"] == 2) { ?>
                                                    <form method="POST" action="" name="form-<?= $value["deals_id"] ?>">
                                                        <td class="text-center">
                                                            <button class="text-light btn archive" name="reactivate" value=<?= $value["deals_id"] ?>>Achived</button>
                                                        </td>
                                                    </form>
                                                <?php } else { ?>
                                                    <td class="text-center text-danger">
                                                        Submited
                                                    </td>
                                                <?php }  ?>
                                            <?php }
                                            ?>
                                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                                <td class="text-center">
                                                    <a class="text-light btn bg-danger" type="button" data-bs-toggle="modal" data-bs-target="#deals-<?= $value['deals_id'] ?>">
                                                        Delete
                                                    </a>
                                                </td>
                                            <?php }
                                            ?>
                                        </tr>

                                        <!-- modale delete -->
                                        <div class="modal fade" id="deals-<?= $value['deals_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="modal-title fs-4 welcome" id="exampleModalLabel"><?= $value['deals_title'] ?></p>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body my-2">
                                                        Do you want to delete this deal ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bouton text-white" data-bs-dismiss="modal">Close</button>
                                                        <form action="" method="POST">
                                                            <button class="btn btn-danger" name="delete" value="<?= $value['deals_id'] ?> ">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fin modale delete -->

                                <?php }
                                } ?>

                                <?php
                                if ($_SESSION['user']['role_id_ROLE'] == 3) {
                                    foreach ($getDealsByUser as $value) {
                                ?>
                                        <tr>
                                            <td class="text-center"><?= $value['deals_title'] ?></td>
                                            <td class="text-center"><?= $value['tag_arr_name'] ?></td>
                                            <td class="text-center"><?= $value['DealsCatTag'] ?></td>
                                            <td class="text-center"><a class="text-light btn bouton" href="infoDeals.php?info=<?= $value['deals_id'] ?>"> + d'info</a></td>

                                            <?php if ($value['deals_validate'] == 0) { ?>
                                                <td class="text-center text-danger">Submited</td>
                                            <?php } else if ($value['deals_validate'] == 1) { ?>
                                                <td class="text-center text-success">Validated</td>
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
    <script src="../assets/script/filter.js"></script>

</body>

</html>