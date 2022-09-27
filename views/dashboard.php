<?php

session_start();
// var_dump($_SESSION);
require_once '../controllers/dashboard-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column container  mx-auto min-vh-100 background p-0 shadow-lg justify-content-center">


    <?php require_once '../elements/header.php' ?>

    <main class="container-fluid bg-white py-5 my-3">
        <div class="row   justify-content-center m-0 " id="page">
            <div class=" col-lg-8 p-4 col-11">
                <h2 class="fs-2 text-center welcome py-3"> Welcome <?= $_SESSION['user']['users_name'] ?> </h2>
                <div class="row align-item">
                    <div class="col text-center m-3">
                        <a href="dashboard-deals.php"> <button class="text-center text-center text-light rounded  boutons">Manage deals</button></a>
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
                    <div class="row align-item">
                        <div class="col text-center m-3">
                            <a href="dashboard-tagsArr.php"><button class="text-center text-center rounded text-light  boutons">Tags Arrondissements</button></a>
                        </div>

                        <div class="col text-center m-3">
                            <a href="dashboard-users.php"> <button class="text-center text-center rounded text-light  boutons">Users</button></a>
                        </div>
                    </div>
                <?php } ?>

                <div class="row align-item">
                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                        <div class="col text-center m-3">
                            <a href="dashboard-comments.php"><button class="text-center text-center rounded text-light  boutons">Comments</button></a>
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