<?php
session_start();
require_once '../controllers/logout-controller.php';
?>

<?php include '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 container backgroundAdmin p-0 shadow-lg justify-content-center">
    <?php include '../elements/header.php' ?>
    <div class="row  mx-0 align-item-center  py-5 my-5" id="page">
        <div class="bg-white shadow-sm col-lg-6 p-4 col-11 mx-auto">
            <p class="text-center fs-4 welcome">You have been deconnected from your account.</p>
        </div>
    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>