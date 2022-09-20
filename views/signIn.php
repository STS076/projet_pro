<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>

    <form action="" method="POST">

        <div class="container bg-light col-lg-8  bienvenue d-flex align-items-center flex-column my-5 py-3 shadow">
            <div>
                <span class="fs-4 ms-4 pb-3 text-dark text-center">Login : </span>
            </div>

            <div class=" form-group col-lg-6 col-12 my-3 text-center">
                <label class="text-dark">Username : </label>
                <input class="text-center form-control identify" placeholder="Username" id="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>" name="pseudo">
                <p class="text-danger"><?= isset($errors['username']) ? $errors['username'] : '' ?></p>
            </div>

            <div class="form-group col-lg-6 col-12 my-3 text-center">
                <label class="text-dark">Password : </label>
                <input type="password" class="identify text-center form-control" id="password" placeholder="Password" name="password">
                <p class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
            </div>

            <div class="my-3 text-center">
                <button class="btn bouton border border-dark text-light" id="submit" name="submit">Login</button>
            </div>

        </div>
    </form>

    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>