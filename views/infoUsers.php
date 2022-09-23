<?php
session_start();
require_once '../controllers/infoUsers-controller.php';

require_once '../elements/top.php' ?>

<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <div class="container bg-light  bienvenue my-5 py-3 shadow">
        <p class="text-center py-3 fs-4">Information about <?= $oneUserArray['users_username'] ?></p>
        <div class="row justify-content-evenly">
            <div class="col-lg-4 col-11 ">
                <p>Name<span> :<?= $oneUserArray['users_name'] ?></span></p>
                <p>Surname<span> :<?= $oneUserArray['users_surname'] ?></span></p>
                <p>Mail<span> : <?= $oneUserArray['users_mail'] ?></span></p>
                <p>Role<span> : <?= $oneUserArray['role_role'] ?></span></p>
                <p>Registered since<span> : <?= $oneUserArray['users_joined'] ?></span></p>

            </div>
        </div>


        <div class="row justify-content-center my-5">
            <div class="col-lg-10 col-11">
                <p class="text-center fw-bold">Deals created<span> : <?= $getNumberofDealsByUser['count(deals_id)'] ?></span></p>
                <div class="table-responsive ">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Created on</th>
                                <th class="text-center">Deal title</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($getDealsByUser as $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $value['deals_created'] ?></td>
                                    <td class="text-center"><?= $value['deals_title'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-10 col-12">
                <p class="text-center fw-bold">Comments submited<span> : <?= $commentsNumberByUser['count(users_id_USERS)'] ?></span></p>
                <div class="table-responsive">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Comment Submited</th>
                                <th class="text-center">For Deal</th>
                                <th class="text-center">Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($commentByUser as $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $value['comments_date'] ?></td>
                                    <td class="text-center"><?= $value['deals_title'] ?></td>
                                    <td class="text-center d-flex justify-content-start ps-5"><?= $value['comments_comment'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="mt-5 text-center">
            <a class="text-decoration-none" href="allUsers.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>
    </div>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>