<?php
session_start();
require_once '../controllers/infoComments-controller.php';
// var_dump($getOnecomment);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="container bg-light  bienvenue my-5 py-5 shadow">
        <a class="fs-6 text-secondary px-5 my-3" href="allComments.php">
            <i class='bi bi-caret-left-fill links mx-2'></i> back
        </a>
        <p class="text-center py-3 fs-4 welcome">Comment on deal <?= $getOnecomment['deals_title'] ?></p>
        <div class="row justify-content-evenly">
            <div class="col-lg-4 col-11 ">
                <p>Comment submited on <span> : <?= $getOnecomment['comments_date'] ?></span></p>
                <p>Submited by <span> : <?= $getOnecomment['users_username'] ?></span></p>
                <p>Rating<span> : <?= $getOnecomment['comments_rating'] ?></span></p>
                <p>Comment<span> : <?= $getOnecomment['comments_comment'] ?></span></p>
            </div>
        </div>

    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>
</body>

</html>