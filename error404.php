<?php
session_start();
require_once './controllers/error404-controller.php';
require_once './elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg  justify-content-center">
    <?php include './elements/header.php' ?>

    <div class="row  justify-content-center mx-0 py-5 my-5" id="page">
        <div class="bg-white  shadow-sm col-lg-5 p-5 col-11">
            <p class="text-center">
                Sorry, this page does not exist. You can go back to our <a href="home.php" class="text-decoration-none text-black fw-bold">homepage</a>
            </p>
        </div>
    </div>


    <?php require_once './elements/footer.php' ?>

</body>

</html>