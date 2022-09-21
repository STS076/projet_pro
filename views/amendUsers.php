<?php
session_start();

require_once '../controllers/amendUsers-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100 backgroundAdmin">

    <?php require_once '../elements/header.php' ?>

    <div class="row  justify-content-evenly mx-0 py-5">
        <?php if ($_SESSION['user']['role_id_ROLE'] != 1 && $_SESSION['user']['users_id'] == $_GET['amend'] || $_SESSION['user']['role_id_ROLE'] == 1) { ?>
            <div class="bg-light  border border-dark shadow-sm col-lg-5 py-4 rounded col-11">

                <p class="text-center fs-5 my-4 fw-bold">Modify your profile : </p>
                <form action="" method="POST">

                    <div class=" d-flex flex-column">
                        <label class="text-dark">Name : </label>
                        <input class="text-center form-control " placeholder="ex : Sophie" id="firstname" value="<?= $getOneUser['users_name'] ?>" name="firstname">
                        <p class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></p>
                    </div>

                    <div class=" d-flex flex-column">
                        <label class="text-dark">Surname : </label>
                        <input class="text-center form-control " placeholder="ex : Toussaint" id="surname" value="<?= $getOneUser['users_surname'] ?>" name="surname">
                        <p class="text-danger"><?= isset($errors['surname']) ? $errors['surname'] : '' ?></p>
                    </div>

                    <div class="d-flex flex-column">
                        <label class="text-dark">Username :</label>
                        <input class=" text-center form-control" id="username" placeholder="ex : LoveParis75" name="username" value="<?= $getOneUser['users_username'] ?>">
                        <p class="text-danger"><?= isset($errors['username']) ? $errors['username'] : '' ?></p>
                    </div>

                    <div class="d-flex flex-column">
                        <label class="text-dark">Email Address :</label>
                        <input type="emailAddress" class=" text-center form-control" id="emailAddress" placeholder="ex : sophie@sophie.com" name="emailAddress" value="<?= $getOneUser['users_mail'] ?>">
                        <p class="text-danger"><?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?></p>
                    </div>

                    <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                        <div class="d-flex flex-column">
                            <label class="py-2 text-center">Role : <span class="text-danger">
                                    <?= isset($errors['role_id_ROLE']) ? $errors['role_id_ROLE'] : '' ?>
                            </label>
                            <select id="role_id_ROLE" value="<?= $getOneUser['role_role'] ?>" name="role_id_ROLE">
                                <option value="">Please select a role</option>

                                <?php foreach ($allRoleArray as $value) { ?>
                                    <option value="<?= $value['role_id'] ?>" <?= $value['role_id'] == $getOneUser['role_id_ROLE'] ? 'selected' : '' ?> name="role_id_ROLE[<?= $value['role_id'] ?>]">
                                        <?= $value['role_role'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } ?>

                    <div class="my-3 text-center">
                        <button class="btn bouton border border-dark text-light" id="submit" name="submit">Submit</button>
                    </div>
                </form>

                <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                    <div class="mt-5 text-center">
                        <a class="text-decoration-none" href="allUsers.php">
                            <button class="btn text-white bg-info">back</button>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="mt-5 text-center">
                        <a class="text-decoration-none" href="dashboard.php">
                            <button class="btn text-white bg-info">back</button>
                        </a>
                    </div>
                <?php } ?>
            </div>

        <?php } else { ?>
            <div class="row justify-content-center mx-0 py-5">
                <div class="bg-light border border-dark shadow-sm col-lg-10 py-5 rounded col-11 text-center">
                    You are not authorised to access to this page
                    <div class="mt-5 text-center">
                        <a class="text-decoration-none" href="amendUsers.php?amend=<?= $_SESSION['user']['users_id'] ?>">
                            <button class="btn text-white bg-info">back</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php }
        ?>

    </div>




    <?php require_once '../elements/footer.php' ?>

</body>

</html>