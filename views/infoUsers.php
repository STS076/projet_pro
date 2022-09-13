<?php
session_start();
require_once '../controllers/infoUsers-controller.php';
// var_dump($allRoleArray);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>




    <div class="container bg-light  bienvenue rounded my-5 py-3 border border-dark shadow">
        <p class="text-center py-3 fs-4">Information about <?= $oneUserArray['users_username']?></p>
        <div class="row justify-content-evenly">
            <div class="col-lg-4 col-11 ">
                <p>Name<span> :<?= $oneUserArray['users_name']?></span></p>
                <p>Surname<span> :<?= $oneUserArray['users_surname']?></span></p>
                <p>Mail<span> : <?= $oneUserArray['users_mail']?></span></p>
                <p>Role<span> : <?= $oneUserArray['role_role']?></span></p>
                <p>Registered since<span> : <?= $oneUserArray['users_joined']?></span></p>
                <p>Deals created<span> : </span></p>
                <p>Comments submited<span> : </span></p>
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