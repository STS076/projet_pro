<?php
session_start();
require_once '../controllers/infoUsers-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 container background p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>
    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0 pb-5" id="page">
            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                <a class="fs-6 text-secondary  my-3" href="allUsers.php">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back
                </a>
            <?php } else { ?>
                <a class="fs-6 text-secondary  my-3" href="dashboard.php">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back
                </a>
            <?php } ?>

            <?php if ($_SESSION['user']['role_id_ROLE'] != 1 && $_SESSION['user']['users_id'] == $_GET['users'] || $_SESSION['user']['role_id_ROLE'] == 1) { ?>
                <h2 class="fs-2  pt-5 pb-3 text-center welcome">Information about <?= $oneUserArray['users_username'] ?></h2>
                <div class="row justify-content-evenly">
                    <div class="col-lg-4 col-11 ">
                        <p>Name<span> : <?= $oneUserArray['users_name'] ?></span></p>
                        <p>Surname<span> : <?= $oneUserArray['users_surname'] ?></span></p>
                        <p>Mail<span> : <?= $oneUserArray['users_mail'] ?></span></p>
                        <p>Role<span> : <?= $oneUserArray['role_role'] ?></span></p>
                        <p>Registered since<span> : <?= $oneUserArray['users_joined'] ?></span></p>

                    </div>
                    <?php if ($_SESSION['user']['role_id_ROLE'] != 1) { ?>
                        <a class="text-secondary text-center" href="amendUsers.php?amend=<?= $oneUserArray['users_id'] ?>">Modify your profile</a>
                    <?php } else { ?>
                        <a class="text-secondary text-center" href="amendUsers.php?amend=<?= $oneUserArray['users_id'] ?>">Modify the profile</a>
                    <?php } ?>
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
                                            <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_comment'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row justify-content-center mx-0 py-5">
                    <div class="col-lg-10 py-5 rounded col-11 text-center">
                        You are not authorised to access to this page
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </main>


    <?php if (isset($_SESSION['swal'])) { ?>
        <script>
            Swal.fire({
                icon: '<?= $_SESSION['swal']['icon'] ?>',
                title: '<?= $_SESSION['swal']['title'] ?>',
                text: '<?= $_SESSION['swal']['text'] ?>'
            })
        </script>
    <?php
        unset($_SESSION['swal']);
    } ?>



    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>