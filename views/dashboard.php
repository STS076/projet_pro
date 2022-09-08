<?php

session_start();
// var_dump($_SESSION);
// require_once '../controllers/dashboard-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="container rounded d-flex align-items-center flex-column  bg-light border border-dark shadow-sm p-5 my-5 ">
        <p class="fw-bold fs-4 fst-italic p-2 text-center"> Welcome <?= $_SESSION['user']['users_name'] ?> </p>
        <div class="row align-item">
            <div class="col text-center m-3">
                <a href="dashboard-deals.php"> <button class="text-center text-center text-light rounded  boutons">Deals</button></a>
            </div>
            <div class="col text-center m-3">
                <a href="dashboard-tagsCategories.php"> <button class="text-center text-center text-light  rounded boutons">Tags Categories</button></a>
            </div>
        </div>
        <div class="row align-item">
            <div class="col text-center m-3">
                <a href="dashboard-tagsArr.php"><button class="text-center text-center rounded text-light  boutons">Tags Arrondissements</button></a>
            </div>
            <div class="col text-center m-3">
                <a href="dashboard-comments.php"><button class="text-center text-center rounded text-light  boutons">Comments</button></a>
            </div>
        </div>
        <div class="row align-item">
            <div class="col text-center m-3">
                <a href="dashboard-users.php"> <button class="text-center text-center rounded text-light  boutons">Users</button></a>
            </div>
            <div class="col text-center m-3">
                <a href="dashboard-images.php"> <button class="text-center text-center rounded text-light  boutons">Images</button></a>
            </div>
        </div>
        <div class="mt-5">
            <a class="text-decoration-none" href="logout.php">
                <button class="btn text-white bg-info"> Log Out</button>
            </a>
        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>