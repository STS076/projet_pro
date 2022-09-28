<?php
session_start();
require_once '../controllers/infoComments-controller.php';
// var_dump($getOnecomment);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center container">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary my-3" href="allComments.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>

            <h2 class="text-center  fs-4 welcome py-5">Comment on deal <?= $getOnecomment['deals_title'] ?></h2>
            <div class="row justify-content-evenly pb-5">
                <div class="col-lg-4 col-11 ">
                    <p>Comment submited on <span> : <?= $getOnecomment['comments_date'] ?></span></p>
                    <p>Submited by <span> : <?= $getOnecomment['users_username'] ?></span></p>
                    <p>Rating<span> : <?= $getOnecomment['comments_rating'] ?></span></p>
                    <p>Comment<span> : <?= $getOnecomment['comments_comment'] ?></span></p>
                </div>
            </div>

        </div>
    </main>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>
</body>

</html>