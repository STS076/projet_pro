<?php
session_start();
require_once './controllers/error404-controller.php';
require_once './elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center">
    <?php include './elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid ">
        <div class="row m-0 p-5" id="page">
            <div class="col-lg-12 p-5 my-5 col-11 fs-4 text-center ">
                    Sorry, this page does not exist. You can go back to our <a href="home.php" class="text-decoration-none text-black fw-bold">homepage</a>

            </div>
        </div>
    </main>

    <?php require_once './elements/footer.php' ?>

</body>

</html>