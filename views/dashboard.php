<?php

session_start();

require_once '../controllers/dashboard-controller.php';
// var_dump($numberofNewComments);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column container  mx-auto min-vh-100 background p-0 shadow-lg justify-content-center">


    <?php require_once '../elements/header.php' ?>

    <main class="container-fluid bg-white mx-auto  min-vh-100">
        <div class="row justify-content-center align items-center m-0 min-vh-100">
            <div class=" col-lg-6 col-11">
                <h2 class="fs-2 text-center welcome py-5"> Welcome <?= $_SESSION['user']['users_name'] ?> </h2>
                <div class="row align-item-center m-0">
                    <div class="col text-center  mx-auto mt-2">
                        <a href="dashboard-deals.php">
                            <button class="text-center text-center text-light rounded  boutons  position-relative">
                                Manage deals <i class="bi bi-journal-richtext text-white ms-3"></i>
                                <?php
                                if ($_SESSION['user']['role_id_ROLE'] != 3) {
                                    if ($numberofDealsToValidate['count(deals_id)'] != 0) { ?>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            + <?= $numberofDealsToValidate['count(deals_id)'] ?>
                                        </span>
                                <?php }
                                } ?>
                            </button>
                        </a>
                    </div>
                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="col text-center  mx-auto mt-2">
                            <a href="dashboard-tagsCategories.php">
                                <button class="text-center text-center text-light  rounded boutons">
                                    Tags Categories <i class="bi bi-tag text-white ms-3"></i>
                                </button>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
                        <div class="col text-center  mx-auto mt-2">
                            <a  href="infoUsers.php?users=<?= $_SESSION['user']['users_id'] ?>">
                                <button class="text-center text-center rounded text-light  boutons">
                                    Your profile
                                </button>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                        <div class="col text-center  mx-auto mt-2">
                            <a href="dashboard-comments.php">

                                <button type="button" class="text-center text-center rounded text-light  boutons position-relative">
                                    Comments <i class="bi bi-chat-dots text-white ms-3"></i>
                                    <?php if ($numberofNewComments['count(comments_id)'] != 0) { ?>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            + <?= $numberofNewComments['count(comments_id)'] ?>
                                        </span>
                                    <?php }  ?>
                                </button>
                            </a>

                        </div>
                    <?php } else { ?>
                        <div class="col text-center  mx-auto mt-2">
                            <a href="allcomments.php">
                                <button class="text-center text-center rounded text-light  boutons">
                                    My comments <i class="bi bi-chat-dots text-white ms-3"></i>
                                </button>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="col text-center  mx-auto mt-2">
                            <a href="dashboard-tagsArr.php">
                                <button class="text-center text-center rounded text-light  boutons">
                                    Tags Arrondissements <i class="bi bi-tag text-white ms-3"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col text-center  mx-auto mt-2">
                            <a href="dashboard-users.php">
                                <button class="text-center text-center rounded text-light  boutons">
                                    Users<i class="bi bi-people text-white ms-3"></i>
                                </button>
                            </a>
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