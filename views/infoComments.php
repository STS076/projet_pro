<?php
session_start();
require_once '../controllers/infoComments-controller.php';
// var_dump($getOnecomment);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <div class="container bg-light  bienvenue rounded my-5 py-3 border border-dark shadow">
        <p class="text-center py-3 fs-4">Comment on deal by </p>
        <div class="row justify-content-evenly">
            <div class="col-lg-4 col-11 ">
                <p>Comment submited on <span> : <?= $getOnecomment['comments_date'] ?></span></p>
                <p>Submited by <span> : <?= $getOnecomment['users_username'] ?></span></p>
                <p>Rating<span> : <?= $getOnecomment['comments_rating'] ?></span></p>
                <p>Comment<span> : <?= $getOnecomment['comments_comment'] ?></span></p>
            </div>
        </div>

        <div class="mt-5 text-center">
            <a class="text-decoration-none" href="dashboard-comments.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>
</body>
</html>