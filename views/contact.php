<?php
session_start();
require_once '../controllers/contact-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column  mx-auto min-vh-100 background container p-0 shadow-lg  justify-content-center">

    <?php require_once '../elements/header.php' ?>



    <main class="bg-white p-0 m-0 container-fluid">
        <?php if ($showForm) { ?>
            <div class="row bg-white justify-content-center m-0 p-0">
                <div class="col-lg-7 col-11">
                    <h2 class="pb-3 text-center welcome comments py-5">Contact us</h2>
                    <p class="text-center">You noticed a mistake in one of our deals ? Please let us know below.</p>

                    <form action="" method="POST">

                        <div class="d-flex flex-column">
                            <label for="emailAddress">
                                Your email address:
                                <span data-span="error-emailAddress" class="text-danger" id="erroremailAddress">
                                    <?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?>
                                </span>
                            </label>
                            <input class="form-control" id="emailAddress" placeholder="Email" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">

                        </div>


                        <div class="d-flex flex-column">
                            <label name="review">Your message: <span data-span="" class="text-danger" id="errorreview"><?= isset($errors['review']) ? $errors['review'] : '' ?></span></label>
                            <textarea class="form-control" name="review" rows="8" cols="40" value=""><?= isset($_POST['review']) ? $_POST['review'] : '' ?></textarea>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-12 col-12 my-1">
                                <input type="checkbox" id="checkbox" name="checkbox" value="<?= isset($_POST['checkbox']) ? $_POST['checkbox'] : '' ?>">
                                <label for="checkbox" class="text-decoration-underline">
                                    I agree with the terms and conditions
                                </label>
                                <p class="text-danger" id="errorcheckbox"><?= isset($errors['checkbox']) ? $errors['checkbox'] : '' ?></p>
                            </div>
                        </div>
                        <div class=" text-center">
                            <button class="btn bouton text-white" id="submit" name="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        <?php } else { ?>


            <div class="row bg-white justify-content-center m-0 p-0 py-5">
                <p class="text-center fs-4 py-5">Thank you for contacting us, we will review your message as soon as possible.</p>
            </div>

        <?php } ?>

    </main>


    <button type="button" class="btn bouton btn-floating " id="btn-back-to-top">
        <i class="bi bi-arrow-up-short text-white"></i>
    </button>

    <script src="../assets/script/contact.js"></script>

    <?php require_once '../elements/footer.php' ?>


</body>

</html>