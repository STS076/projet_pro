<?php
session_start();
require_once '../controllers/amendUsers-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>




    <div class="container bg-light  bienvenue rounded my-5 py-3 border border-dark shadow">
        <div class="row  alignement">
            <div class="col-lg-12 col-11">
                <form action="" method="POST">
                    <div class="text-center">
                        <p class="fs-4 ms-4 pb-3 text-dark">Add an user : </p>
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
                        <button class="btn bouton border border-dark text-light" id="submit" name="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="mt-5 text-center">
            <a class="text-decoration-none" href="dashboard-users.php">
                <button class="btn text-white bg-info">back</button>
            </a>
        </div>

    </div>





    <?php require_once '../elements/footer.php' ?>

</body>

</html>