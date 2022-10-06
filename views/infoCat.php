<?php
session_start();
require_once '../controllers/infoCat-controller.php';
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center container">
    <?php include '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3" href="allTagsCategory.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <div class="col-8 mb-3 justify-content-start py-4">
                <p class="fs-5 text-center"><span class="text-decoration-underline">Name</span> : <?= $getOneCat['tag_categories_name'] ?></p>
                <p><span class="text-decoration-underline">Summary</span> :<br> <?= $getOneCat['tag_categories_summary'] ?></p>
                <p><span class="text-decoration-underline">Number of deals for the Arrondissement</span> : <?= $getNumberofDealsbyCat['count(tag_categories_id)'] ?></p>
            </div>
            <div class="col-8 mb-3 justify-content-start">
                <?php foreach ($getDealsfromCat as $value) { ?>
                    <p><?= $value['deals_title'] ?> <a href="deals.php?choice=<?= $value['deals_id'] ?>">Go to Deal</a></p>
                <?php } ?>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>