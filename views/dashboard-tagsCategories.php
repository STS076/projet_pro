<?php

session_start();

require_once '../controllers/dashboard-tagCategories-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class="col-lg-7 col-11 bg-white p-4">

                <h2 class="fs-2 text-center welcome ">Dashboard Categories</h2>
                <div class="row align-item">
                    <div class="col text-center m-3">
                        <a href="allTagsCategory.php"> <button class="text-center text-center text-light rounded  boutons">All tags Categories</button></a>
                    </div>
                    <div class="col text-center m-3">
                        <a href="addTagCategory.php"> <button class="text-center text-center text-light  rounded boutons">Add a Tag Category</button></a>
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