<?php
session_start();
require_once '../controllers/logout-controller.php';
?>

<?php include '../elements/top.php' ?>


<body class="d-flex flex-column min-vh-100 background">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column bg-light my-5 p-5  shadow">
        <div class="col-lg-8 col-12 text-center fw-bold">
            <p>You have been deconnected from your account.</p>
        </div>
    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>