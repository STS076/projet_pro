<?php require_once '../controllers/news-controller.php' ?>

<?php require_once '../elements/top.php' ?>

<body class="background">

    <?php require_once '../elements/header.php' ?>


    <main class=" py-5">
        <div class="row m-0 p-0 justify-content-center">
            <?php if (isset($costumes)) {
                // setlocale(LC_TIME, "fr_FR", "fra");
                $date_format = '%A %d %B %Y';
                foreach ($costumes as $value) { ?>
                    <div class="card col-lg-4 col-11 p-0 m-5">
                        <!-- <img src="<?= $value->enclosure['url'] ?>" alt="image couverture" class="image"> -->
                        <div class="card-body">
                            <p class="card-title"><?= $value->title ?></p>
                            <p><?= strftime($date_format, strtotime($value->pubDate)) ?></p>
                            <div class="d-flex justify-content-evenly">
                                <a href="<?= $value->link ?>" class="btn btn-secondary">Article</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </main>





    <?php require_once '../elements/footer.php' ?>

</body>

</html>