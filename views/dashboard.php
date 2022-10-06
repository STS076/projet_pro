<?php

session_start();

require_once '../controllers/dashboard-controller.php';
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
                            Deals<i class="ms-3 bi bi-file-earmark-richtext"></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                                <a class="text-decoration-none text-black " href="allDeals.php">
                                    <li class="list-group-item my-2">
                                        All Deals
                                    </li>
                                </a>
                            <?php } else { ?>
                                <a class="text-decoration-none text-black bg-danger" href="allDeals.php">
                                    <li class="list-group-item">
                                        My Deal
                                    </li>
                                </a>
                            <?php } ?>
                            <a href="addDeal.php" class="text-decoration-none text-black ">
                                <li class="list-group-item my-2">
                                    Create a deal
                                </li>
                            </a>
                            <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                                <a class="text-decoration-none text-black " href="validateNewDeals.php">
                                    <li class="list-group-item my-2">
                                        Validation
                                        <?php
                                        if ($_SESSION['user']['role_id_ROLE'] != 3) {
                                            if ($numberofDealsToValidate['count(deals_id)'] != 0) { ?>
                                                <span class=" badge rounded-pill bg-danger">
                                                    + <?= $numberofDealsToValidate['count(deals_id)'] ?>
                                                </span>
                                        <?php }
                                        } ?>
                                    </li>
                                </a>
                            <?php } ?>
                        </ul>
                    </div>



                    <div class="card col-lg-5 col-11 text-center m-3">
                        <div class="card-header my-2 headerCards">
                            Comments <i class="ms-3 fa-regular fa-comments"></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                                <a class="text-decoration-none text-black " href="allComments.php">
                                    <li class="list-group-item my-2">
                                        All Comments
                                    </li>
                                </a>
                                <a class="text-decoration-none text-black " href="validateComments.php">
                                    <li class="list-group-item my-2">
                                        Validate comments
                                        <?php if ($numberofNewComments['count(comments_id)'] != 0) { ?>
                                            <span class="badge rounded-pill bg-danger">
                                                + <?= $numberofNewComments['count(comments_id)'] ?>
                                            </span>
                                        <?php }  ?>
                                    </li>
                                </a>
                            <?php } else { ?>
                                <a class="text-decoration-none text-black " href="allComments.php">
                                    <li class="list-group-item my-2">
                                        My Comments
                                    </li>
                                </a>
                            <?php } ?>
                        </ul>
                    </div>

                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="card col-lg-5 col-11 text-center m-3">
                            <div class="card-header my-2 headerCards">
                                Categories <i class="ms-3 fa-solid fa-book"></i>
                            </div>
                            <ul class="list-group list-group-flush">
                                <a class="text-decoration-none text-black " href="allTagsCategory.php">
                                    <li class="list-group-item my-2">
                                        All Categories
                                    </li>
                                </a>
                                <a class="text-decoration-none text-black " href="addTagCategory.php">
                                    <li class="list-group-item my-2">
                                        Add a category
                                    </li>
                                </a>
                            </ul>
                        </div>
                    <?php } ?>



                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="card col-lg-5 col-11 text-center m-3">
                            <div class="card-header my-2 headerCards">
                                Arrondissement<i class="ms-3 fa-solid fa-city"></i>
                            </div>
                            <ul class="list-group list-group-flush">
                                <a class="text-decoration-none text-black " href="allTagsArr.php">
                                    <li class="list-group-item my-2">
                                        All Arrondissements
                                    </li>
                                </a>
                                <a class="text-decoration-none text-black " href="addTagArr.php">
                                    <li class="list-group-item my-2">
                                        Add an arrondissement
                                    </li>
                                </a>
                            </ul>
                        </div>
                    <?php } ?>


                    <div class="card col-lg-5 col-11 text-center m-3">
                        <div class="card-header my-2 headerCards">
                            Users <i class="ms-3 fa-solid fa-user-group"></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
                                <a class="text-decoration-none text-black " href="infoUsers.php?users=<?= $_SESSION['user']['users_id'] ?>">
                                    <li class="list-group-item my-2">
                                        My profile
                                    </li>
                                </a>
                            <?php } else { ?>
                                <a class="text-decoration-none text-black " href="allUsers.php">
                                    <li class="list-group-item my-2">
                                        All Users
                                    </li>
                                </a>
                            <?php } ?>
                        </ul>
                    </div>

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