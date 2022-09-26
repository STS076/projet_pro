<?php

session_start();

require_once '../controllers/dashboard-deals-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="row d-flex align-items-center flex-column  my-5  mx-0 py-5 ">
        <div class="col-lg-7 col-11 bg-white p-4">

            <a class="fs-6 text-secondary px-5 my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>

            <h2 class="fs-2 text-center welcome ">Dashboard Deals</h2>

            <div class="row align-item">
                <?php if ($_SESSION['user']['role_id_ROLE'] == 1 ||$_SESSION['user']['role_id_ROLE'] == 2 ) { ?>
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
            <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                <div class="row align-item">
                    <div class="col text-center m-3">
                        <a href="validateNewDeals.php"> <button class="text-center text-center text-light rounded  boutons">Validate new deals</button></a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>





    <?php require_once '../elements/footer.php' ?>

</body>

</html>