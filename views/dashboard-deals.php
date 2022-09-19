<?php

session_start();

require_once '../controllers/dashboard-deals-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <div class="container rounded d-flex align-items-center flex-column  bg-light border border-dark shadow-sm p-5 my-5 ">

        <div class="row align-item">
            <div class="col text-center m-3">
                <a href="allDeals.php"> <button class="text-center text-center text-light  rounded boutons">All of the Deals</button></a>
            </div>
            <div class="col text-center m-3">
                <a href="addDeal.php"> <button class="text-center text-center text-light rounded  boutons">Add a Deal</button></a>
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
                    <button class="btn text-white bg-info">Back</button>
                </a>
            </div>
        <?php } ?>

    </div>





    <?php require_once '../elements/footer.php' ?>

</body>

</html>