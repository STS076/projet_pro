<?php

session_start();

require_once '../controllers/dashboard-comments-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="row d-flex align-items-center flex-column  shadow-sm  mx-0 py-5 ">
        <div class="col-lg-7 col-11 bg-white p-4">
            <a class="fs-6 text-secondary px-5 my-3" href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="fs-2 text-center welcome ">Dashboard Comments</h2>
            <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
                <p class="fw-bold fs-4 fst-italic p-2 text-center"> Welcome <?= $_SESSION['user']['users_name'] ?> </p>
            <?php } ?>
            <div class="row align-item">
                <div class="col text-center m-3">
                    <a href="allComments.php"> <button class="text-center text-center text-light  rounded boutons">All commenst</button></a>
                </div>
                <div class="col text-center m-3">
                    <a href="validateComments.php"> <button class="text-center text-center text-light rounded  boutons">Validate comments</button></a>
                </div>
            </div>
        </div>
    </div>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>