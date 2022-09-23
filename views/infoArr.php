<?php
session_start();
require_once '../controllers/infoArr-controller.php';
// var_dump($oneTagArray);
?>
<?php include '../elements/top.php' ?>


<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="row bienvenue d-flex align-items-center flex-column my-5 mx-0 p-5">
        <div class="col-8 mb-3 py-5 justify-content-start bg-light">
            <p><span class="text-decoration-underline">Name</span> : <?= $oneTagArray['tag_arr_name'] ?></p>
            <p><span class="text-decoration-underline">Summary</span> :<br> <?= $oneTagArray['tag_arr_summary'] ?></p>
            <p><span class="text-decoration-underline">Number of deals for the Arrondissement</span> : <?= $getNumberofDealsbyArr['count(tag_arr_id)'] ?></p>
        </div>
        <div class="col-8 mb-3 justify-content-start">
            <?php foreach ($GetDealsfromArr as $value) { ?>
                <p>Title : <?= $value['deals_title'] ?> <a href="deals.php?choice=<?= $value['deals_id'] ?>">Go to Deal</a></p>
            <?php } ?>
        </div>

        <div class="mt-5 text-center">
            <a class="text-decoration-none" href="allTagsArr.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>
    </div>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>