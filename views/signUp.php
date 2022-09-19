<?php
session_start();
require_once '../controllers/signUp-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <?php if ($showForm) { ?>
        <form action="" method="POST">

            <div class="container bg-light col-lg-8  bienvenue d-flex align-items-center flex-column rounded my-5 py-3 border border-dark shadow">
                <div>
                    <span class="fs-4 ms-4 pb-3 text-dark">Please enter below information to Sign Up : </span>
                </div>

                <div class=" form-group col-lg-6 col-12 my-3 text-center">
                    <label class="text-dark">Name : </label>
                    <input class="text-center form-control " placeholder="ex : Sophie" id="firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" name="firstname">
                    <p class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></p>
                </div>

                <div class=" form-group col-lg-6 col-12 my-3 text-center">
                    <label class="text-dark">Surname : </label>
                    <input class="text-center form-control " placeholder="ex : Toussaint" id="surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : '' ?>" name="surname">
                    <p class="text-danger"><?= isset($errors['surname']) ? $errors['surname'] : '' ?></p>
                </div>

                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label class="text-dark">Username :</label>
                    <input class=" text-center form-control" id="username" placeholder="ex : LoveParis75" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['username']) ? $errors['username'] : '' ?></p>
                </div>

                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label class="text-dark">Email Address :</label>
                    <input type="emailAddress" class=" text-center form-control" id="emailAddress" placeholder="ex : sophie@sophie.com" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?></p>
                </div>

                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label class="text-dark">Password:</label>
                    <input type="password" class=" text-center form-control" id="password" placeholder="Password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
                </div>


                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label class="text-dark">Confirm Password : </label>
                    <input type="password" class=" text-center form-control" id="passwordconfirm" placeholder="Confirm Password" name="passwordconfirm" value="<?= isset($_POST['surname']) ? $_POST['passwordconfirm'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['passwordconfirm']) ? $errors['passwordconfirm'] : '' ?></p>
                </div>

                <div class="my-3 text-center">
                    <button class="btn bouton border border-dark text-light" id="submit" name="submit">Sign Up</button>
                </div>
                <div>
                    <a href="loginAdmin.php" class="text-dark">Log in if you already have an account </a>
                </div>

            </div>
        </form>

    <?php } else { ?>

        <div class="container bg-light col-lg-8  bienvenue d-flex align-items-center flex-column rounded my-5 py-3 border border-dark shadow">
            <p class="text-center fs-6 py-5">Thank you for signing up <?= $_POST['firstname']  ?>, you can now login with your username and passoword. .</p>
        </div>

    <?php } ?>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>