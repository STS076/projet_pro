<?php

session_start();

require_once '../controllers/dashboard-comments-controller.php';

require_once '../elements/top.php';
?>

<body class="d-flex flex-column min-vh-100 backgroundAdmin">

    <?php require_once '../elements/header.php' ?>


    <div class="container  d-flex align-items-center flex-column  bg-light shadow-sm p-5 my-5 ">
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

        <div class="mt-5">
            <a class="text-decoration-none" href="dashboard.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>
    </div>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>