<?php

session_start();

// require_once '../controllers/dashboard-deals-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <div class="container rounded d-flex align-items-center flex-column  bg-light border border-dark shadow-sm p-5 my-5 ">
        <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
            <p class="fw-bold fs-4 fst-italic p-2 text-center"> Welcome <?= $_SESSION['user']['users_name'] ?> </p>
        <?php } ?>
        <div class="row align-item">
            <div class="col text-center m-3">
                <a href="validateComments.php"> <button class="text-center text-center text-light rounded  boutons">Validate comments</button></a>
            </div>
            <div class="col text-center m-3">
                <a href="allComments.php"> <button class="text-center text-center text-light  rounded boutons">All comments</button></a>
            </div>
        </div>

        <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>

            <div class="mt-5">
                <a class="text-decoration-none" href="dashboard.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>
        <?php  } else { ?>
            <div class="text-center py-3">
                <a class="text-decoration-none" href="logout.php">
                    <button class="btn text-white bg-info"> DECONNEXION</button>
                </a>
            </div>
        <?php } ?>

    </div>





    <?php require_once '../elements/footer.php' ?>

</body>

</html>