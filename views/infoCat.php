<?php
session_start();
require_once '../controllers/infoCat-controller.php';
// var_dump($oneTagArray);
?>
<?php include '../elements/top.php' ?>


<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-8 mb-3 justify-content-start">
            <p><span class="text-decoration-underline">Name</span> : <?= $getOneCat['tag_categories_name'] ?></p>
            <p><span class="text-decoration-underline">Summary</span> :<br> <?= $getOneCat['tag_categories_summary'] ?></p>
            <p><span class="text-decoration-underline">Number of deals for the Arrondissement</span> : <?= $getNumberofDealsbyCat['count(tag_categories_id)'] ?></p>
        </div>
        <div class="col-8 mb-3 justify-content-start">
            <?php foreach ($getDealsfromCat as $value) { ?>
                <p>Title : <?= $value['deals_title'] ?> <a href="">Go to Deal</a></p>
            <?php } ?>
        </div>

        <div class="mt-5">
            <a class="text-decoration-none" href="allTagsCategory.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>

</body>

</html>