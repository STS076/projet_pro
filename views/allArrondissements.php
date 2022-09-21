<?php
session_start();
require_once '../elements/top.php';
require_once '../controllers/allArrondissements-controller.php';
?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <main>

        <p class="fs-2 text-center welcome pt-5 comments">Arrondissements</p>

        <div class="row mx-0 my-5 justify-content-center">

            <?php foreach ($allTagsArrArray as $value) {
            ?>
                <div class="col-lg-3 col-11 m-3 p-0 cardarr">
                    <div class="card cadre m-0 p-0 shadow-sm">
                        <img class="image m-0 p-0" src="../assets/images/arrondissements/<?= $value['tag_arr_picture'] ?>.jpg">
                        <p class="arrondissement"><a class="text-white glass hoverNav text-decoration-none" href="arrondissements.php?choice=<?= $value['tag_arr_id'] ?>"><?= $value['tag_arr_name'] ?></a></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>