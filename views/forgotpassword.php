<?php

session_start();
require_once '../controllers/forgotpassword-controller.php';
// var_dump($usersInfos);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100 mx-auto  background container p-0  container  justify-content-center">

    <?php require_once '../elements/header.php' ?>
    <main class="bg-white py-5">
        <div class="row  justify-content-center m-0 py-5" id="page">
            <div class="bg-white  col-lg-6 col-11">
                <?php if ($showForm) { ?>
                    <h2 class="fs-2  pb-3 text-center welcome">Please enter your email address so we can send you an email to reset your password : </h2>
                    <form action="" method="POST">

                        <div class="d-flex flex-column">
                            <label class="text-dark">Email</label>
                            <input class="text-center form-control identify" placeholder="Email Address" id="pseudo" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo">
                            <p data-span="error-pseudo" class="text-danger"><?= isset($errors['pseudo']) ? $errors['pseudo'] : '' ?></p>
                        </div>

                        <div class="my-5 text-center">
                            <button class="btn bouton border border-dark text-light" id="submit" name="submit">Submit</button>
                        </div>
                    </form>
                <?php } else { ?>
                    <p class="text-center fs-5">A request has been send to change your password. You will receive an email shortly.</p>
                <?php } ?>
            </div>
        </div>
    </main>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <script src="../assets/script/contact.js"></script>
    <script src="../assets/script/password.js"></script>
    <?php require_once '../elements/footer.php' ?>

</body>

</html>