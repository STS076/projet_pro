<?php

session_start();

require_once '../controllers/dashboard-controller.php';
// var_dump($numberofNewComments);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column container  mx-auto min-vh-100 background p-0 shadow-lg justify-content-center">


    <?php require_once '../elements/header.php' ?>

    <main class="bg-white py-5 px-0 m-0 container-fluid">
        <div class="row justify-content-center m-0" id="page">
            <div class=" col-lg-8 col-11">
                <h2 class="fs-2 text-center welcome py-3"> Welcome <?= $_SESSION['user']['users_name'] ?> </h2>
                <div class="row align-item m-0">
                    <div class="col text-center m-3">
                        <a href="dashboard-deals.php">
                            <button class="text-center text-center text-light rounded  boutons  position-relative">
                                Manage deals

                                <?php
                                if ($_SESSION['user']['role_id_ROLE'] != 3) {
                                    if ($numberofDealsToValidate['count(deals_id)'] != 0) { ?>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            <?= $numberofDealsToValidate['count(deals_id)'] ?>
                                        </span>
                                <?php }
                                } ?>

                            </button>
                        </a>


                    </div>
                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="col text-center m-3">
                            <a href="dashboard-tagsCategories.php"> <button class="text-center text-center text-light  rounded boutons">Tags Categories</button></a>
                        </div>
                    <?php } ?>
                    <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
                        <div class="col text-center m-3">
                            <a href="amendUsers.php?amend=<?= $_SESSION['user']['users_id'] ?>"> <button class="text-center text-center rounded text-light  boutons">Modify your profile</button></a>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                    <div class="row align-item m-0">
                        <div class="col text-center m-3">
                            <a href="dashboard-tagsArr.php"><button class="text-center text-center rounded text-light  boutons">Tags Arrondissements</button></a>
                        </div>

                        <div class="col text-center m-3">
                            <a href="dashboard-users.php"> <button class="text-center text-center rounded text-light  boutons">Users</button></a>
                        </div>
                    </div>
                <?php } ?>

                <div class="row align-item m-0">
                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                        <div class="col text-center m-3">
                            <a href="dashboard-comments.php">

                                <button type="button" class="text-center text-center rounded text-light  boutons position-relative">
                                    Comments
                                    <?php if ($numberofNewComments['count(comments_id)'] != 0) { ?>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            <?= $numberofNewComments['count(comments_id)'] ?>
                                        </span>
                                    <?php }  ?>
                                </button>
                            </a>

                        </div>
                    <?php } else { ?>
                        <div class="col text-center m-3">
                            <a href="allcomments.php"> <button class="text-center text-center rounded text-light  boutons">My comments</button></a>
                        </div>
                    <?php } ?>
                </div>

            </div>




        </div>
    </main>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>