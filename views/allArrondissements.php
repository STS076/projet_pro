<?php
session_start();
require_once '../elements/top.php';
require_once '../controllers/allArrondissements-controller.php';
?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center container">

    <?php require_once '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">

            <p class="fs-2 text-center welcome pt-5 comments">Arrondissements</p>
            <div class="row m-0 p-0 justify-content-center">
                <?php foreach ($allTagsArrArray as $value) {
                ?>

                    <div class="col-lg-3 col-11 m-3 cardarr shadow-sm card cadre m-0 p-0 ">
                        <a href="arrondissements.php?choice=<?= $value['tag_arr_id'] ?>">
                            <img class="image m-0 p-0" src="../assets/images/arrondissements/<?= $value['tag_arr_picture'] ?>.jpg">
                            <div class="arrondissement px-2 m-0 fs-5">
                                <p class="text-white glass hoverNav text-decoration-none">
                                    <?= $value['tag_arr_name'] ?>
                                </p>
                            </div>
                        </a>
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