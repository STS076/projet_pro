<?php

session_start();

require_once '../controllers/dashboard-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg  justify-content-center">

    <?php require_once '../elements/header.php' ?>


    <div class="row d-flex align-items-center flex-column  shadow-sm bg-white  mx-0 py-5 my-5">
        <a class="fs-6 text-secondary px-5 my-2" href="dashboard.php">
            <i class='bi bi-caret-left-fill links mx-2'></i> back
        </a>
        <h2 class="fs-2 text-center welcome ">Dashboard Users</h2>
        <div class="col text-center m-3">
            <a href="allUsers.php"> <button class="text-center text-center text-light  rounded boutons">Users List</button></a>
        </div>
        <div class="col text-center m-3">
            <a href="addUsers.php"> <button class="text-center text-center text-light rounded  boutons">Add User</button></a>
        </div>
    </div>

    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>