<?php

session_start();

require_once '../controllers/dashboard-deals-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column min-vh-100 backgroundAdmin">

    <?php require_once '../elements/header.php' ?>

    <div class="container d-flex align-items-center flex-column  bg-light shadow-sm p-5 my-5 ">

        <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
            <h2 class="fs-2 text-center welcome ">Dashboard Deals
            </h2>
        <?php } ?>
        <div class="row align-item">
            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                <div class="col text-center m-3">
                    <a href="allDeals.php"> <button class="text-center text-center text-light  rounded boutons">All of the Deals</button></a>
                </div>
            <?php } else { ?>
                <div class="col text-center m-3">
                    <a href="allDeals.php"> <button class="text-center text-center text-light  rounded boutons">My Deals</button></a>
                </div>
            <?php } ?>
            <div class="col text-center m-3">
                <a href="addDeal.php"> <button class="text-center text-center text-light rounded  boutons">Submit a new deal</button></a>
            </div>
        </div>
        <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
            <div class="row align-item">
                <div class="col text-center m-3">
                    <a href="validateNewDeals.php"> <button class="text-center text-center text-light rounded  boutons">Validate new deals</button></a>
                </div>
            </div>
        <?php } ?>


        <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
            <div class="mt-5">
                <a class="text-decoration-none" href="dashboard.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>
        <?php  } else { ?>
            <div class="text-center py-3">
                <a class="text-decoration-none" href="dashboard.php">
                    <button class="btn text-dark back shadow-sm">Back</button>
                </a>
            </div>
        <?php } ?>

    </div>





    <?php require_once '../elements/footer.php' ?>

</body>

</html>