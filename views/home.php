<?php
session_start();
require_once '../controllers/home-controller.php';
// var_dump($exploreColor);
// require_once '../data/data.php';
require_once '../elements/top.php' ?>

<body class="mx-auto min-vh-100 background p-0 shadow-lg justify-content-center container">
    <?php require_once '../elements/header.php' ?>

    <main class="bg-white py-5  px-0 container-fluid">

        <p class=" text-center welcome2 mt-2">Welcome To Paris</p>
        <div class="row m-0 p-0 justify-content-center bg-light">
            <div class="col-lg-5 col-11  mx-1 d-flex align-items-center justify-content-center">
                <p class="fs-6">
                    Paradise for museums, concerts and exibitions connoisseurs, Paris can be hell when it come to your wallet that cannot follow all of your adventures. And no one want to give up the pleasure of visiting the city of lights because of an empty purse. Thankfully, the city is more generous than we would expect for people with small means, you just have to know the good deals and free treasure than it can offer. <br>
                    There is a myriad of time slot where museums are free,
                </p>
            </div>
            <div class="col-lg-6 col-11 text-center d-lg-block d-none mx-1">
                <img src="../assets/images/images/adobestock-264549883-960x640.jpeg" alt="image paris sunset" class="imageHome">
            </div>
        </div>

        <div class="text-center py-5">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1OkLNPaeSeYtR3EM-UlL16JUNNjzlPHA&ehbc=2E312F" class="goodDealsMap" scrolling="NO"></iframe>
        </div>

        <div class=" row justify-content-evenly mx-0 p-0  mt-3 bg-light">
            <div class="col-lg-2 col-12 hotDeals py-5 d-flex align-items-center justify-content-center">
                <p class="text-light fw-bold fs-2 text-center welcome p-0 m-0">Our better rated deals</p>
            </div>
            <?php foreach ($hotDeals as $value) {
                if ($value['deals_validate'] == 1) { ?>
                    <div class="col-lg-2 col-11 bg-light shadow-sm mx-2 my-3 p-0">
                        <div class=" d-flex flex-column justify-content-between">
                            <div class="col  ">
                                <?php
                                $images = $image->getOneGallery($value['deals_id']);
                                ?>
                                <img src="data:image/png;base64,<?= $images[0]['images_name'] ?>" class="m-0 p-0 img-fluid imgCard" alt="<?= $value['deals_title'] ?>">
                                <p class="card-title text-center fw-bold welcome fs-4 newDealsWrite p-2"><?= $value['deals_title'] ?></p>
                                <p class="p-2 "><?= $value['deals_mini_summary'] ?></p>
                            </div>
                            <div class="col">
                                <div class="d-flex justify-content-evenly p-2">
                                    <p><?= $value['DealsCatTag'] ?></p>
                                    <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="newDealsWrite">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>

        <section class="bg-white">
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-8 col-11 py-4 my-4">
                    <p class="fs-5 text-center fw-bold newsletter">Sign up to our newsletter</p>
                    <p class="text-center">You never want to miss any good deal ? Well, sign up to our newsletter to keep up with Paris' best deals.</p>
                    <form method="post" class="d-flex justify-content-center">
                        <div class="form-group m-0 p-0">
                            <input class="m-0 p-0" type="text" name="mail" placeholder="Your email" />
                            <input class="m-0 p-0" type="submit" value="Sign up" />
                            <p class="text-danger" id="errorsurname"><?= isset($erreurs['mail']) ? $erreurs['mail'] : '' ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="row m-0 p-0 justify-content-center">
            <div class="col-12 text-center">
                <p>You would like to join our community and help us to add new deals and keep everything up to date ? <a href="SignUp.php" class="text-dark text-decoration-none fw-bold">Join us</a> </p>
            </div>
        </div>

        <p class="fs-1 text-center welcome pt-5">What to do today in Paris ?</p>
        <div class="row justify-content-evenly p-0 mx-0 bg-light">
            <?php
            $count = 2;
            $count2 = 1;
            foreach ($lastTenDeals as $value) {
                if ($value['deals_validate'] == 1) { ?>
                    <div class="col-lg-2 col-11 bg-light shadow-sm mx-2 my-3 p-0 order-lg-<?= $count2++ ?> order-<?= $count++ ?>">
                        <?php
                        $images = $image->getOneGallery($value['deals_id']);
                        ?>
                        <img src="data:image/png;base64,<?= $images[0]['images_name'] ?>" class="m-0 p-0 img-fluid imgCard" alt="<?= $value['deals_title'] ?>">
                        <p class="card-title text-center fw-bold welcome fs-4 newDealsWrite p-2"><?= $value['deals_title'] ?></p>
                        <p class="p-2"><?= $value['deals_mini_summary'] ?></p>
                        <div class="d-flex justify-content-evenly p-2">
                            <p><?= $value['DealsCatTag'] ?></p>
                            <a href="deals.php?choice=<?= $value['deals_id'] ?>" class="newDealsWrite">Explore</a>
                        </div>
                    </div>
            <?php }
            } ?>
            <div class="col-lg-2 col-12 newDeals py-5 d-flex align-items-center justify-content-center order-lg-4 order-1">
                <p class="text-light fw-bold fs-2 text-center welcome">Our brand new deals</p>
            </div>
        </div>
    </main>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>