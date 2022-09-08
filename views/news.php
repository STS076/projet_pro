<?php require_once '../controllers/news-controller.php';
// var_dump($AllDealsArray);
?>

<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <h2 class="text-center fst-italic my-5 comments">News</h2>
    <div class="row justify-content-evenly mx-0 my-5">
            <?php foreach($lastTenDeals as $value) { ?>
                <div class="card mb-3 m-2 p-0 col-lg-5 col-11 shadow-sm">
                    <div class="row mx-0 p-0">
                        <div class="col-md-6 m-0 p-0 text-center">
                            <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid rounded-start" alt="picture Jardin des tuileries">
                        </div>
                        <div class="col-md-6 m-0 p-0">
                            <div class="card-body">
                                <p class="card-title text-center fw-bold fs-5"><?= $value['deals_title'] ?></p>
                                <p class="card-text"><?= $value['deals_mini_summary'] ?></p>
                                <a href="deals.php?choice=<?= $value['deals_title'] ?>">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php include '../elements/footer.php' ?>

</body>

</html>