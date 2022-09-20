<?php

session_start();

require_once '../controllers/dashboard-images-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100 backgroundAdmin">

    <?php require_once '../elements/header.php' ?>

    <div class="container d-flex align-items-center flex-column  bg-light shadow-sm p-5 my-5 ">
        <div class="row align-item">
            <div class="col text-center m-3">
                <a href="allGallery.php"> <button class="text-center text-center text-light rounded  boutons">Add an image to a gallery</button></a>
            </div>
            <!-- <div class="col text-center m-3">
                <a href="galleries.php"> <button class="text-center text-center text-light  rounded boutons">all galleries</button></a>
            </div> -->
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