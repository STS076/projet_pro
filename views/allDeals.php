<?php
session_start();
require_once '../controllers/allDeals-controller.php';
// var_dump($getDealsByUser);
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column min-vh-100 backgroundAdmin">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column bg-light my-5 p-5 shadow">

        <div class="d-flex justify-content-start">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a category ..." class="px-5 my-2 shadow-sm myInput">
        </div>

        <div class="col-lg-12 col-11 text-center">
            <div class="table-responsive table-hover">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center">Title</th>
                            <th class="text-center">Arrondissement</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">More Info</th>
                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                <th class="text-center">Amend</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Delete</th>
                            <?php } ?>
                            <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
                                <th class="text-center">Status</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($_SESSION['user']['role_id_ROLE'] == 1) {
                            foreach ($AllDealsArray as $value) {
                        ?>

                                <tr>
                                    <td class="text-center"><?= $value['deals_title'] ?></td>
                                    <td class="text-center"><?= $value['tag_arr_name'] ?></td>
                                    <td class="text-center"><?= $value['DealsCatTag'] ?></td>
                                    <td class="text-center"><a class="text-light btn bouton" href="infoDeals.php?info=<?= $value['deals_id'] ?>"> + d'info</a></td>

                                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>

                                        <td class="text-center"><a class="text-light btn bouton" href="amendDeals.php?amend=<?= $value['deals_id'] ?>">Amend</a></td>
                                        <?php if ($value["deals_validate"] != 2) { ?>
                                            <form method="POST" action="allDeals.php" name="form-<?= $value["deals_id"] ?>">
                                                <td class="text-center">
                                                    <button class="text-light btn bg-warning" name="archive" value=<?= $value["deals_id"] ?>>Archive</button>
                                                </td>
                                            </form>
                                        <?php } else { ?>
                                            <form method="POST" action="allDeals.php" name="form-<?= $value["deals_id"] ?>">
                                                <td class="text-center">
                                                    <button class="text-light btn bg-success" name="reactivate" value=<?= $value["deals_id"] ?>>Re Activate</button>
                                                </td>
                                            </form>
                                        <?php } ?>
                                        <td class="text-center"><a class="text-light btn bg-danger" type="button" data-bs-toggle="modal" data-bs-target="#deals-<?= $value['deals_id'] ?>">Delete</a></td>
                                    <?php }
                                    ?>
                                </tr>

                                <!-- modale delete -->
                                <div class="modal fade" id="deals-<?= $value['deals_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title fs-4" id="exampleModalLabel"><?= $value['deals_title'] ?></p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Do you want to delete this deal ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="" method="POST">
                                                    <button class="btn btn-primary" name="delete" value="<?= $value['deals_id'] ?> ">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin modale delete -->

                        <?php }
                        } ?>

                        <?php
                        if ($_SESSION['user']['role_id_ROLE'] != 1) {
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
            <div class="mt-5">

                <a class="text-decoration-none" href="dashboard-deals.php">
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
    <script src="../assets/script/filter.js"></script>

</body>

</html>