<?php
session_start();
require_once '../controllers/validateNewDeals-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center">
    <?php include '../elements/header.php' ?>

    <div class="row  justify-content-center mx-0 py-5 my-5" id="page">
        <div class="bg-white  shadow-sm col-lg-12 p-5 col-11">
            <a class="fs-6 text-secondary  my-3" href="dashboard-deals.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="text-center p-5 fst-italic welcome">New deals validation</h2>
            <div class="table-responsive table-hover">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">#</th> -->
                            <th class="text-center">Title</th>
                            <th class="text-center">Arrondissement</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">More Info</th>

                            <th class="text-center">Approve</th>
                            <th class="text-center">Amend</th>
                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                <th class="text-center">Delete</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($AllDealsArray as $value) {
                            if ($value['deals_validate'] != 1) { ?>
                                <tr>
                                    <!-- <th class="text-center"><?= $value['deals_id'] ?></th> -->
                                    <th class="text-center"><?= $value['deals_title'] ?></th>
                                    <th class="text-center"><?= $value['tag_arr_name'] ?></th>
                                    <th class="text-center"><?= $value['DealsCatTag'] ?></th>
                                    <td class="text-center"><a class="text-light btn bouton" href="infoDeals.php?info=<?= $value['deals_id'] ?>"> + d'info</a></td>


                                    <td class="text-center">
                                        <form action="validateNewDeals.php" method="POST" name="form-<?= $value["deals_id"] ?>">
                                            <button class="text-light btn bg-success" name="approve" value=<?= $value["deals_id"] ?>>Approve</button>
                                        </form>
                                    </td>
                                    <td class="text-center"><a class="text-light btn bouton" href="amendDeals.php?amend=<?= $value['deals_id'] ?>">Amend</a></td>
                                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                                        <td class="text-center"><a class="text-light btn bg-danger" type="button" data-bs-toggle="modal" data-bs-target="#deals-<?= $value['deals_id'] ?>">Supprimer</a></td>
                                <?php }
                                } ?>
                                </tr>

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

                            <?php } ?>
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