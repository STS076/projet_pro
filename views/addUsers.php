<?php
session_start();
require_once '../controllers/addUser-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>




    <div class="row  justify-content-center mx-0 py-5">

        <div class="bg-light  border border-dark shadow-sm col-lg-5 py-4 rounded col-11">
            <p class="fs-4 ms-4 pb-3 text-dark text-center">Add an user : </p>
            <form action="" method="POST">

                <div class=" d-flex flex-column">
                    <label class="text-dark text-center">Name : </label>
                    <input class="text-center form-control " placeholder="ex : Sophie" id="firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" name="firstname">
                    <p class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></p>
                </div>

                <div class=" d-flex flex-column">
                    <label class="text-dark text-center">Surname : </label>
                    <input class="text-center form-control " placeholder="ex : Toussaint" id="surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : '' ?>" name="surname">
                    <p class="text-danger"><?= isset($errors['surname']) ? $errors['surname'] : '' ?></p>
                </div>

                <div class=" d-flex flex-column">
                    <label class="text-dark text-center">Username :</label>
                    <input class=" text-center form-control" id="username" placeholder="ex : LoveParis75" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['username']) ? $errors['username'] : '' ?></p>
                </div>

                <div class=" d-flex flex-column">
                    <label class="text-dark text-center">Email Address :</label>
                    <input type="emailAddress" class=" text-center form-control" id="emailAddress" placeholder="ex : sophie@sophie.com" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?></p>
                </div>

                <div class=" d-flex flex-column">
                    <label class="text-dark text-center">Password:</label>
                    <input type="password" class=" text-center form-control" id="password" placeholder="Password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
                </div>

                <div class=" d-flex flex-column">
                    <label class="text-dark text-center">Confirm Password : </label>
                    <input type="password" class=" text-center form-control" id="passwordconfirm" placeholder="Confirm Password" name="passwordconfirm" value="<?= isset($_POST['surname']) ? $_POST['passwordconfirm'] : '' ?>">
                    <p class="text-danger"><?= isset($errors['passwordconfirm']) ? $errors['passwordconfirm'] : '' ?></p>
                </div>

                <div class="d-flex flex-column">
                    <label class=" text-center">Role : <span class="text-danger"><?= isset($errors['role_id']) ? $errors['role_id'] : '' ?></label>
                    <select id="role_id" value="<?= isset($_POST['role_id']) ? $_POST['role_id'] : '' ?>" name="role_id">
                        <option value="">Please select a role</option>
                        <?php foreach ($allRoleArray as $value) { ?>
                            <option value="<?= $value['role_id'] ?>" name="role_id[<?= $value['role_id'] ?>]"><?= $value['role_role'] ?></option>
                        <?php } ?>
                    </select>
                </div>



                <div class="my-4 text-center">
                    <button class="btn bouton border border-dark text-light" id="submit" name="submit">Submit</button>
                </div>

            </form>
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