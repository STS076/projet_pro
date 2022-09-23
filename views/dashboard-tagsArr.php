<?php

session_start();

require_once '../controllers/dashboard-tagArr-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="row d-flex align-items-center flex-column  shadow-sm  mx-0 py-5 my-5">
        <div class="col-lg-7 col-11 bg-white p-4">

            <a class="fs-6 text-secondary px-5 my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="fs-2 text-center welcome ">Dashboard Arrondissements</h2>
            <div class="col text-center m-3">
                <a href="allTagsArr.php"> <button class="text-center text-center text-light rounded  boutons">All tags Arrondissement</button></a>
            </div>
            <div class="col text-center m-3">
                <a href="addTagArr.php"> <button class="text-center text-center text-light  rounded boutons">Add a Tag Arrondissement</button></a>
            </div>
        </div>

    </div>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>