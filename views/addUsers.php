<?php
session_start();
require_once '../controllers/addUser-controller.php';
require_once '../elements/top.php' ?>

<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">

    <?php require_once '../elements/header.php' ?>




    <div class="row  justify-content-evenly mx-0 py-5">

        <div class="bg-light shadow-sm col-lg-5 py-4  col-11">
            <p class="fs-4 ms-4 pb-3 text-dark text-center">Add an user : </p>
            <form action="" method="POST">

                <div class="d-flex flex-column my-1 ">
                    <label class="text-dark" for="firstname">
                        Name :
                        <span data-span="error-firstname" class="text-danger">
                            <?= isset($errors['firstname']) ? $errors['firstname'] : '' ?>
                        </span>
                    </label>
                    <input class=" form-control " placeholder="ex : Sophie" id="firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" name="firstname">

                </div>

                <div class=" d-flex flex-column my-1 ">
                    <label class="text-dark " for="surname">
                        Surname :
                        <span data-span="error-surname" class="text-danger">
                            <?= isset($errors['surname']) ? $errors['surname'] : '' ?>
                        </span>
                    </label>
                    <input class=" form-control " placeholder="ex : Toussaint" id="surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : '' ?>" name="surname">

                </div>

                <div class=" d-flex flex-column my-1 ">
                    <label class="text-dark " for="username">
                        Username :
                        <span data-span="error-username" class="text-danger">
                            <?= isset($errors['username']) ? $errors['username'] : '' ?>
                        </span>
                    </label>
                    <input class="  form-control" id="username" placeholder="ex : LoveParis75" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
                </div>

                <div class=" d-flex flex-column my-1 ">
                    <label class="text-dark " for="emailAddress">
                        Email Address :
                        <span data-span="error-emailAddress" class="text-danger">
                            <?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?>
                        </span>
                    </label>
                    <input type="emailAddress" class="  form-control" id="emailAddress" placeholder="ex : sophie@sophie.com" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">
                </div>

                <div class=" d-flex flex-column my-1 ">
                    <label class="text-dark " for="password">
                        Password:
                        <span data-span="error-password" class="text-danger">
                            <?= isset($errors['password']) ? $errors['password'] : '' ?>
                        </span>
                    </label>
                    <input type="password" class="  form-control" id="password" placeholder="Password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">

                </div>

                <div class=" d-flex flex-column my-1 ">
                    <label class="text-dark " for="passwordconfirm">
                        Confirm Password :
                        <span data-span="error-passwordconfirm" class="text-danger">
                            <?= isset($errors['passwordconfirm']) ? $errors['passwordconfirm'] : '' ?>
                        </span>
                    </label>
                    <input type="password" class="  form-control" id="passwordconfirm" placeholder="Confirm Password" name="passwordconfirm" value="<?= isset($_POST['surname']) ? $_POST['passwordconfirm'] : '' ?>">

                </div>

                <div class="d-flex flex-column my-1 ">
                    <label class=" " for="role_id">
                        Role :
                        <span data-span="error-role_id" class="text-danger">
                            <?= isset($errors['role_id']) ? $errors['role_id'] : '' ?>
                        </span>
                    </label>
                    <select id="role_id" value="<?= isset($_POST['role_id']) ? $_POST['role_id'] : '' ?>" name="role_id">
                        <option value="">Please select a role</option>
                        <?php foreach ($allRoleArray as $value) { ?>
                            <option value="<?= $value['role_id'] ?>" name="role_id[<?= $value['role_id'] ?>]"><?= $value['role_role'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="my-4 text-center my-1 ">
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
    <script src="../assets/script/contact.js"></script>
</body>

</html>