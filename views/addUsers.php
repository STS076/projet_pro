<?php
session_start();
require_once '../controllers/addUser-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 container background p-0 shadow-lg justify-content-center">
    <?php include '../elements/header.php' ?>

    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">
            <a class="fs-6 text-secondary  my-3 " href="dashboard.php">
                <i class='bi bi-caret-left-fill links mx-2'></i> back
            </a>
            <h2 class="fs-2  pt-5 pb-3 text-center welcome ">Add a new user</h2>
            <div class=" col-lg-6  col-12">

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

        </div>
    </main>
    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>
    <script src="../assets/script/contact.js"></script>
</body>

</html>