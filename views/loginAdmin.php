<?php

session_start();
require_once '../controllers/loginAdmin-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100 mx-auto  background container p-0  container  justify-content-center">

    <?php require_once '../elements/header.php' ?>
    <main class="bg-white py-5">
        <div class="row  justify-content-center m-0 py-5" id="page">
            <div class="bg-white  col-lg-6 col-11">
                <h2 class="fs-2  pb-3 text-center welcome">Please enter below information to login : </h2>
                <form action="" method="POST">

                    <div class="d-flex flex-column">
                        <!-- <label class="text-dark">Email</label> -->
                        <input class="text-center form-control identify" placeholder="Email Address" id="pseudo" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo">
                        <p data-span="error-pseudo" class="text-danger"><?= isset($errors['pseudo']) ? $errors['pseudo'] : '' ?></p>
                    </div>

                    <div class="input-group  rounded mb-3">
                        <input type="password" class="identify text-center form-control" id="password" placeholder="Password" name="password">
                        <span class="input-group-text" id=""><i class="bi bi-eye-slash" id="togglePassword"></i></span>

                    </div>
                    <p data-span="error-password" class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
                    <div class="text-center">
                        <button class="btn bouton border border-dark text-light" id="submit" name="submit">Login</button>
                        <p class="text-danger" id="errorConnect"><?= isset($errors['connection']) ? $errors['connection'] : '' ?></p>
                    </div>


                </form>
                <div class="text-center py-3">
                    <a href="forgotpassword.php" class="text-dark fw-bold ">Forgot password</a>
                </div>
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
    <script src="../assets/script/password.js"></script>
    <?php require_once '../elements/footer.php' ?>

</body>

</html>