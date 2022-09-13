<?php
session_start();
require_once '../controllers/infoUsers-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>




    <div class="container bg-light  bienvenue rounded my-5 py-3 border border-dark shadow">
        <div class="row  alignement my-2">
            <div class="col-lg-11 col-11">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Surname</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><?= $oneUserArray['users_name'] ?></td>
                            <td class="text-center"><?= $oneUserArray['users_surname'] ?></td>
                            <td class="text-center"><?= $oneUserArray['users_username'] ?></td>
                            <td class="text-center"><?= $oneUserArray['users_mail'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row  alignement my-2">
            <div class="col-lg-11 col-11">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Deals submited</th>
                            <th class="text-center">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><?= $oneUserArray['users_name'] ?></td>
                            <td class="text-center"><?= $oneUserArray['users_surname'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row  alignement my-2">
            <div class="col-lg-11 col-11">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Comments submited</th>
                            <th class="text-center">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><?= $oneUserArray['users_name'] ?></td>
                            <td class="text-center"><?= $oneUserArray['users_surname'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-5 text-center">
            <a class="text-decoration-none" href="allUsers.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>

    </div>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>