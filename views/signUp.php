<?php
session_start();
require_once '../controllers/signUp-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>

    <?php if ($showForm) { ?>
        <main class="bg-white py-5  px-0 container-fluid ">
            <div class="row  justify-content-center m-0" id="page">
                <div class=" col-lg-5 p-4 col-11">
                    <h2 class="fs-2  pt-5 pb-3 text-center welcome">Please enter below information to Sign Up : </h2>
                    <form action="" method="POST">

                        <div class="d-flex flex-column">
                            <!-- <label class="text-dark">Name : </label> -->
                            <input class="text-center form-control " placeholder="Name" id="firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" name="firstname">
                            <p data-span="error-firstname" class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></p>
                        </div>

                        <div class="d-flex flex-column">
                            <!-- <label class="text-dark">Surname : </label> -->
                            <input class="text-center form-control " placeholder="Surname" id="surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : '' ?>" name="surname">
                            <p data-span="error-surname" class="text-danger"><?= isset($errors['surname']) ? $errors['surname'] : '' ?></p>
                        </div>

                        <div class="d-flex flex-column">
                            <!-- <label class="text-dark">Username :</label> -->
                            <input class=" text-center form-control" id="username" placeholder="Username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
                            <p data-span="error-username" class="text-danger"><?= isset($errors['username']) ? $errors['username'] : '' ?></p>
                        </div>

                        <div class="d-flex flex-column">
                            <!-- <label class="text-dark">Email Address :</label> -->
                            <input type="emailAddress" class=" text-center form-control" id="emailAddress" placeholder="Email Address" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">
                            <p data-span="error-emailAddress" class="text-danger"><?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?></p>
                        </div>

                        <div class="input-group rounded mb-3">
                            <input type="password" class="form-control text-center" id="password" placeholder="Password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                            <span class="input-group-text" id="">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </span>
                           
                        </div>
                        <p data-span="error-password" class="text-danger">
                                <?= isset($errors['password']) ? $errors['password'] : '' ?>
                            </p>

                        <div class="input-group rounded mb-1">
                            <input type="password" class=" text-center form-control" id="passwordconfirm" placeholder="Confirm Password" name="passwordconfirm" value="<?= isset($_POST['passwordconfirm']) ? $_POST['passwordconfirm'] : '' ?>" />
                            <span class="input-group-text" id="">
                                <i class="bi bi-eye-slash" id="toggleConfirmPassword"></i>
                            </span>

                        </div>
                        <p data-span="error-passwordconfirm" class="text-danger">
                            <?= isset($errors['passwordconfirm']) ? $errors['passwordconfirm'] : '' ?>
                        </p>
                        <div class="my-5 text-center">
                            <button class="btn bouton border border-dark text-light" id="submit" name="submit">Sign Up</button>
                        </div>
                        <p class="pt-2 text-center filAriane">*Password need a lowercase, an uppercase, a number, a special character and minimum 8 characters</p>

                    </form>
                </div>
            </div>
        </main>
    <?php } else { ?>

        <main class="bg-white py-5  px-0 container-fluid ">
            <div class="row  justify-content-center m-0" id="page">
                <p class="text-center fs-6 py-5">
                    Thank you for signing up <?= $_POST['firstname']  ?>, you can now login with your username and password.
                </p>
            </div>
        </main>
    <?php } ?>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <script src="../assets/script/contact.js"></script>
    <script src="../assets/script/password.js"></script>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>