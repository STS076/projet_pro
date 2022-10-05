<?php
session_start();
require_once '../controllers/allUsers-controller.php';
// var_dump($_SESSION['user']['role_id_ROLE']);
?>

<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 container background p-0 shadow-lg justify-content-center">
    <?php include '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3 " href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="fs-2 text-center welcome ">All Users</h2>
            <div class="col-lg-8 col-11 mx-auto py-3">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for an user ..." class="px-5 my-2 shadow-sm myInput">
            </div>
            <div class="col-lg-10 col-12 text-center table-responsive pb-5">
                <table class="table  table-hover" id="myTable">
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
                        <?php foreach ($AllUsersArray as $value) {
                            if ($value['users_id'] != 13 && $value['users_id'] != 18) { ?>
                                <tr>
                                    <!-- <td class="text-center"><?= $value['users_id'] ?></td> -->
                                    <td class="text-center"><?= $value['users_username'] ?></td>
                                    <td class="text-center">
                                        <a class="btn bouton text-white" href="infoUsers.php?users=<?= $value['users_id'] ?>">
                                            Info
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn bouton text-white" href="amendUsers.php?amend=<?= $value['users_id'] ?>">
                                            Modify
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn bg-danger text-light" type="button" data-bs-toggle="modal" data-bs-target="#users-<?= $value['users_id'] ?>">
                                            Delete
                                        </a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="users-<?= $value['users_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title fs-4 welcome" id="exampleModalLabel"><?= $value['users_name'] ?> <?= $value['users_surname'] ?></p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body fs-5">
                                                Do you want to delete this user ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn text-white bouton" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="" method="POST">
                                                    <button class="btn btn-danger" name="delete" value="<?= $value['users_id'] ?> ">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <script src="../assets/script/filterImages.js"></script>
    <?php include '../elements/footer.php' ?>

</body>

</html>