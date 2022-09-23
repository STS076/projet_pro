<?php
session_start();
require_once '../controllers/infoCat-controller.php';
// var_dump($oneTagArray);
?>
<?php include '../elements/top.php' ?>


<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column my-5 p-5 shadow">
        <div class="col-8 mb-3 justify-content-start">
            <p><span class="text-decoration-underline">Name</span> : <?= $getOneCat['tag_categories_name'] ?></p>
            <p><span class="text-decoration-underline">Summary</span> :<br> <?= $getOneCat['tag_categories_summary'] ?></p>
            <p><span class="text-decoration-underline">Number of deals for the Arrondissement</span> : <?= $getNumberofDealsbyCat['count(tag_categories_id)'] ?></p>
        </div>
        <div class="col-8 mb-3 justify-content-start">
            <?php foreach ($getDealsfromCat as $value) { ?>
                <p>Title : <?= $value['deals_title'] ?> <a href="deals.php?choice=<?= $value['deals_id'] ?>">Go to Deal</a></p>
            <?php } ?>
        </div>

        <div class="mt-5">
            <a class="text-decoration-none" href="allTagsCategory.php">
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