<?php require_once '../controllers/news-controller.php';

?>

<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">
    <?php include '../elements/header.php' ?>

    <main>
        <h2 class="text-center fst-italic my-5 comments">News</h2>
        <article>
            <div class="row justify-content-center mx-0 my-5">

                <?php foreach ($lastTenDeals as $value) { ?>

                    <div class="col-lg-3 col-11 bg-light shadow-sm mx-2 my-3 py-3">
                        <img src="../assets/images/tuileriesDeal.webp" class="m-0 p-0 img-fluid" alt="picture Jardin des tuileries">
                        <div class="">
                            <p class="text-center fw-bold fs-5"><?= $value['deals_title'] ?></p>
                            <p class=""><?= $value['deals_mini_summary'] ?></p>
                            <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="links">Explore</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </article>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php include '../elements/footer.php' ?>

</body>

</html>