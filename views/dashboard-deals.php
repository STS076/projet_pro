<?php

session_start();

// require_once '../controllers/dashboard-controller.php';

require_once '../elements/top.php';

?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <!-- <main class=""> -->


        <div class="container rounded d-flex align-items-center flex-column  bg-light border border-dark shadow-sm p-5 my-5 ">
            <!-- <p class="fw-bold fs-4 fst-italic p-2 text-center"> BIENVENUE <?= $_SESSION['user']['users_mail'] ?> </p> -->
            <div class="row align-item">
                <div class="col text-center m-3">
                    <a href="addDeal.php"> <button class="text-center text-center text-light rounded  boutons">Add a Deal</button></a>
                </div>
                <div class="col text-center m-3">
                    <a href="patientList.php"> <button class="text-center text-center text-light  rounded boutons">All of the Deals</button></a>
                </div>
            </div>
        
      
            <div class="mt-5">

                <a class="text-decoration-none" href="dashboard.php">
                    <button class="btn text-white bg-info">back</button>
                </a>

            </div>
        </div>

    <!-- </main> -->

    <?php require_once '../elements/footer.php' ?>

</body>

</html>