<?php

session_start();

require_once '../controllers/dashboard-tagArr-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="container rounded d-flex align-items-center flex-column  bg-light border border-dark shadow-sm p-5 my-5 ">
        <div class="row align-item">
            <div class="col text-center m-3">
                <a href="allTagsArr.php"> <button class="text-center text-center text-light rounded  boutons">All tags Arrondissement</button></a>
            </div>
            <div class="col text-center m-3">
                <a href="addTagArr.php"> <button class="text-center text-center text-light  rounded boutons">Add a Tag Arrondissement</button></a>
            </div>
        </div>
        <div class="mt-5">
            <a class="text-decoration-none" href="dashboard.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>