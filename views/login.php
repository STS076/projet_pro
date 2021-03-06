<?php 

session_start();

require_once '../controllers/login-controller.php';

require_once '../elements/top.php' ?>

<body class="background">

    <?php require_once '../elements/header.php' ?>

    <form action="" method="POST">

        <div class="container bg-light col-lg-8  bienvenue d-flex align-items-center flex-column rounded my-5 py-3 border border-dark shadow">
            <div>
                <span class="fs-4 ms-4 pb-3 text-dark">Please enter below information to login : </span>
            </div>

            <div class=" form-group col-lg-6 col-12 my-3 text-center">
                <label class="text-dark">Name</label>
                <input class="text-center form-control identify" placeholder="Name" id="pseudo" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo">
                <p class="text-danger"><?= isset($errors['pseudo']) ? $errors['pseudo'] : '' ?></p>
            </div>

            <div class="form-group col-lg-6 col-12 my-3 text-center">
                <label class="text-dark">Password:</label>
                <input type="password" class="identify text-center form-control" id="password" placeholder="Password" name="password">
                <p class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
            </div>

            <div class="my-3 text-center">
                <button class="btn bouton border border-dark text-dark" id="submit" name="submit">Login</button>
            </div>

        </div>
    </form>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>