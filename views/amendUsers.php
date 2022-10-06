<?php
session_start();

require_once '../controllers/amendUsers-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 container background p-0 shadow-lg justify-content-center">

    <?php require_once '../elements/header.php' ?>


    <main class="bg-white p-0 m-0 container-fluid">
        <div class="row bg-white justify-content-center m-0 p-0" id="page">

            <?php if ($_SESSION['user']['role_id_ROLE'] == 1) { ?>
                <a class="fs-6 text-secondary  my-3" href="allUsers.php">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back
                </a>
            <?php } else { ?>
                <a class="fs-6 text-secondary  my-3" href="infoUsers.php?users=<?= $_SESSION['user']['users_id'] ?>">
                    <i class='bi bi-caret-left-fill links mx-2'></i> back
                </a>
            <?php } ?>


            <?php if ($_SESSION['user']['role_id_ROLE'] != 1 && $_SESSION['user']['users_id'] == $_GET['amend'] || $_SESSION['user']['role_id_ROLE'] == 1) { ?>
                <h2 class="text-center py-3 fst-italic welcome">Modify your profile : </h2>
                <div class="col-lg-5 py-4  col-11">
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
                                <label class="py-2 ">Role : <span class="text-danger">
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

                        <div class="my-3 pt-4 text-center">
                            <button class="btn bouton border border-dark text-light" id="submit" name="submit">Submit</button>
                        </div>
                    </form>


                </div>

            <?php } else { ?>
                <div class="row justify-content-center mx-0 py-5">
                    <div class="col-lg-10 py-5 rounded col-11 text-center">
                        You are not authorised to access to this page
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </main>

 


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>