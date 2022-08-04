<?php

session_start();

require_once '../controllers/parameters-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <a href="upload.php" class="m-2 text-decoration-none text-dark p-2">upload</a>
    <a href="home.php" class="m-2 text-decoration-none text-dark p-2">retour</a>

    <form action="" method="POST">

        <div class="container d-flex align-items-center flex-column bg-light subway mt-1 mb-4 p-5 blanc border border-dark shadow-sm" id="page">
            <p class="fw-bold fst-italic fs-5">Hello <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['surname'] ?></p>
            <div class="text-center my-3">
                <span class="fs-6 text-dark fw-bold ">Upload a new deal : </span>
            </div>
            <div class="form-group text-center pt-3">
                <span class="me-5">Title : </span>
                <input>
            </div>
            <div class="form-group text-center pt-3">
                <span>Good Deal</span>
                <input>
            </div>
            <div class="form-group text-center pt-3">
                <span>When</span>
                <input>
            </div>
            <div class="form-group text-center pt-3">
                <span>Where</span>
                <input>
            </div>
            <div class="form-group text-center pt-3">
                <span>Price</span>
                <input>
            </div>
            <div class="form-group text-center pt-3">
                <span>How</span>
                <input>
            </div>
            <div class="form-group text-center pt-3">
                <span>Contact</span>
                <input>
            </div>
            <div class="form-group text-center pt-3">
                <span>Map</span>
                <input>
            </div>
            <div class=" mt-5 text-center">
                <button class="btn bouton text-white" id="submit">Save the changes</button>
            </div>

        </div>




    </form>



    <?php require_once '../elements/footer.php' ?>

</body>

</html>