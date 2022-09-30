<?php

session_start();

require_once '../controllers/dashboard-controller.php';
// var_dump($numberofNewComments);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column container  mx-auto min-vh-100 background p-0 shadow-lg justify-content-center">


    <?php require_once '../elements/header.php' ?>

    <main class="container-fluid bg-white mx-auto  min-vh-100">
        <div class="row justify-content-center align items-center m-0 min-vh-100">
            <div class=" col-lg-12 col-11">
                <h2 class="fs-2 text-center welcome pt-5 pb-3"> Welcome <?= $_SESSION['user']['users_name'] ?> </h2>
                <div class="row align-item-center justify-content-center m-0 pb-5">

                    <div class="card col-lg-5 col-11 text-center m-3">
                        <div class="card-header my-2 headerCards">
                            Deals
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="allDeals.php">
                                        All Deals
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="list-group-item">
                                    <a class="text-decoration-none text-black " href="allDeals.php">
                                        My Deal
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="list-group-item my-2">
                                <a href="addDeal.php" class="text-decoration-none text-black ">
                                    Create a deal
                                </a>
                            </li>
                            <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="validateNewDeals.php">
                                        Validation
                                    </a>
                                    <?php
                                    if ($_SESSION['user']['role_id_ROLE'] != 3) {
                                        if ($numberofDealsToValidate['count(deals_id)'] != 0) { ?>
                                            <span class=" badge rounded-pill bg-danger">
                                                + <?= $numberofDealsToValidate['count(deals_id)'] ?>
                                            </span>
                                    <?php }
                                    } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="card col-lg-5 col-11 text-center m-3">
                            <div class="card-header my-2 headerCards">
                                Categories
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="allTagsCategory.php">
                                        All Categories
                                    </a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="addTagCategory.php">
                                        Add a category
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>


                    <div class="card col-lg-5 col-11 text-center m-3">
                        <div class="card-header my-2 headerCards">
                            Users
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="infoUsers.php?users=<?= $_SESSION['user']['users_id'] ?>">
                                        My profile
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="allUsers.php">
                                        All Users
                                    </a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="addUsers.php">
                                        Add an user
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>


                    <div class="card col-lg-5 col-11 text-center m-3">
                        <div class="card-header my-2 headerCards">
                            Comments
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="allComments.php">
                                        All Comments
                                    </a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="validateComments.php">
                                        Validate comments
                                    </a>
                                    <?php if ($numberofNewComments['count(comments_id)'] != 0) { ?>
                                        <span class="badge rounded-pill bg-danger">
                                            + <?= $numberofNewComments['count(comments_id)'] ?>
                                        </span>
                                    <?php }  ?>
                                </li>
                            <?php } else { ?>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="allUsers.php">
                                        My Comments
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="card col-lg-5 col-11 text-center m-3">
                            <div class="card-header my-2 headerCards">
                                Arrondissement
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="allTagsArr.php">
                                        All Arrondissements
                                    </a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="text-decoration-none text-black " href="addTagArr.php">
                                        Add an arrondissement
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>
    <?php require_once '../elements/footer.php' ?>

</body>

</html>