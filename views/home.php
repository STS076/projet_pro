<?php

session_start();

require_once '../controllers/home-controller.php';

require_once '../elements/top.php' ?>

<body class="background">

    <?php require_once '../elements/header.php' ?>

    <div class="container my-5">
        <main class="bg-light py-5">
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-8 col-11">
                    <p class="fs-6">Welcome on <span class="fst-italic">All about costumes</span>, if you want to know anything about the most beautiful costumes in Hollywood.</p>
                </div>
            </div>
        </main>
    </div>

    <div class="container my-5">
        <main class="bg-light py-5">
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-8 col-11">
                    <p class="fs-5 text-center fw-bold">Abonnez vous à notre Newsletter</p>
                    <form method="post" class="d-flex justify-content-center">
                        <div class="form-group">
                            <input type="text" name="mail" placeholder="Votre email" />
                            <input type="submit" value="S'inscrire" />
                            <p class="text-danger" id="errorsurname"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>