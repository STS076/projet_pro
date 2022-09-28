<?php

session_start();

require_once '../controllers/dashboard-deals-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column  container mx-auto min-vh-100 background p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>
    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">

            <a class="fs-6 text-secondary my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links  mx-2'></i> back
            </a>

            <div class="col-lg-7 col-11 mx-auto py-5">

                <h2 class="fs-2 text-center welcome ">Dashboard Deals</h2>

                <div class="row align-item m-0 py-4">
                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1 || $_SESSION['user']['role_id_ROLE'] == 2) { ?>
                        <div class="col text-center mx-auto my-2">
                            <a href="allDeals.php">
                                <button class="text-center text-center text-light  rounded boutons">
                                    All of the Deals <i class="bi bi-file-earmark-richtext ms-3"></i>
                                </button>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col text-center mx-auto my-2">
                            <a href="allDeals.php"> <button class="text-center text-center text-light  rounded boutons">My Deals</button></a>
                        </div>
                    <?php } ?>
                    <div class="col text-center mx-auto my-2">
                        <a href="addDeal.php">
                            <button class="text-center text-center text-light rounded  boutons">
                                Submit a new deal <i class="bi bi-file-earmark-plus text-white ms-3"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                    <div class="row align-item m-0 p-0">
                        <div class="col text-center mx-auto my-2">
                            <a href="validateNewDeals.php">
                                <button class="text-center text-center text-light rounded  boutons">
                                    Validate new deals <i class="bi bi-check-circle text-white ms-3"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </main>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>