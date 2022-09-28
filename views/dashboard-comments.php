<?php

session_start();

require_once '../controllers/dashboard-comments-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="fs-2 text-center welcome pb-3">Dashboard Comments</h2>
            <div class="col-lg-7 col-11 bg-white mx-auto">
                <?php if ($_SESSION['user']['role_id_ROLE'] == 3) { ?>
                    <p class="fw-bold fs-4 fst-italic p-2 text-center welcome"> Welcome <?= $_SESSION['user']['users_name'] ?> </p>
                <?php } ?>
                <?php if ($_SESSION['user']['role_id_ROLE'] != 3) { ?>
                    <div class="row align-item m-0">
                        <div class="col text-center m-3">
                            <a href="allComments.php">
                                <button class="text-center text-center text-light  rounded boutons">
                                    All commenst
                                </button>
                            </a>
                        </div>
                        <div class="col text-center m-3">
                            <a href="validateComments.php">
                                <button class="text-center text-center text-light rounded  boutons">
                                    Validate comments
                                </button>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col text-center m-3">
                            <a href="allComments.php"> <button class="text-center text-center text-light  rounded boutons">My Comments</button></a>
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