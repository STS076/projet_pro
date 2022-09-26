<?php

session_start();
// var_dump($_POST);
// var_dump($_SESSION);

require_once '../controllers/loginAdmin-controller.php';
// var_dump($errors);
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 backgroundAdmin p-0  justify-content-center">

    <?php require_once '../elements/header.php' ?>
    <main>
        <div class="row  justify-content-center mx-0 py-5" id="page">
            <div class="bg-white  shadow-sm col-lg-6 p-4 col-11">
                <h2 class="py-3 text-center welcome ">Please enter below information to login : </h2>
                <form action="" method="POST">


                    <div class="d-flex flex-column">
                        <!-- <label class="text-dark">Email</label> -->
                        <input class="text-center form-control identify" placeholder="Email Address" id="pseudo" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo">
                        <p data-span="error-pseudo" class="text-danger"><?= isset($errors['pseudo']) ? $errors['pseudo'] : '' ?></p>
                    </div>

                    <div class="d-flex flex-column">
                        <!-- <label class="text-dark">Password:</label> -->
                        <input type="password" class="identify text-center form-control" id="password" placeholder="Password" name="password">
                        <p data-span="error-password" class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
                    </div>

                    <div class="text-center">
                        <button class="btn bouton border border-dark text-light" id="submit" name="submit">Login</button>
                        <p class="text-danger" id="errorConnect"><?= isset($errors['connection']) ? $errors['connection'] : '' ?></p>
                    </div>


                </form>
                <div class="text-center py-3">
                    <a href="signUp.php" class="text-dark fw-bold filAriane">Sign up if you do not have already an account </a>
                </div>
            </div>

        </div>
    </main>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <script src="../assets/script/contact.js"></script>
    <?php require_once '../elements/footer.php' ?>

</body>

</html>