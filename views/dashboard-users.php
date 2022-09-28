<?php

session_start();

require_once '../controllers/dashboard-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 container background p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class="col-lg-12 col-12">
                <h2 class="fs-2 text-center welcome py-3">Dashboard Users</h2>
                <div class="col text-center m-3">
                    <a href="allUsers.php"> <button class="text-center text-center text-light  rounded boutons">Users List</button></a>
                </div>
                <div class="col text-center m-3">
                    <a href="addUsers.php"> <button class="text-center text-center text-light rounded  boutons">Add User</button></a>
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