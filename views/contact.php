<?php

require_once '../controllers/contact-controller.php';
require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <?php if ($showForm) { ?>
        <main class="bg-white">
            <h2 class="m-5 text-center fst-italics comments">Contact us</h2>
            <p class="text-center">You noticed a mistake in one of our ads ? Or you want to make us aware of a new deal ? Please let us know below.</p>

            <form action="" method="POST">
                <div class="container d-flex align-items-center flex-column  subway mt-1 mb-4 " id="page">
                    <div class="form-group col-lg-6 col-12 my-3r">
                        <label for="emailAddress">Your email address:</label>
                        <input class="form-control" id="emailAddress" placeholder="Email" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">
                        <span data-span="error-emailAddress" class="text-danger" id="erroremailAddress"><?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?></span>
                    </div>
                    <div class=" form-group col-lg-6 col-11r">
                        <label class="py-2" for="option">Reason for contact</label>
                        <select class="form-control" name="option" id="option">
                            <option value="">Please choose </option>
                            <option value="New Deal">This concerns a new deal</option>
                            <option value="Mistake">There is a mistake in one of our ads</option>
                        </select>
                        <span data-span="error-option" class="text-danger" id="erroroption"><?= isset($errors['option']) ? $errors['option'] : '' ?></span>
                    </div>


                    <div class="form-group col-lg-6 col-12 my-3r">
                        <label name="review">Your message: <span data-span="" class="text-danger" id="errorreview"><?= isset($errors['review']) ? $errors['review'] : '' ?></span></label>
                        <textarea class="form-control" name="review" rows="8" cols="40" value="<?= isset($_POST['review']) ? $_POST['review'] : '' ?>"></textarea>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12 col-12 my-1">
                            <input type="checkbox" id="checkbox" name="checkbox" value="<?= isset($_POST['checkbox']) ? $_POST['checkbox'] : '' ?>"><label for="checkbox">I agree with the terms and conditions </label>
                            <p class="text-danger" id="errorcheckbox"><?= isset($errors['checkbox']) ? $errors['checkbox'] : '' ?></p>
                        </div>
                    </div>
                    <div class=" text-center">
                        <button class="btn bouton text-white" id="submit" name="submit">Submit</button>
                    </div>

                </div>
            </form>
        </main>

    <?php } else { ?>


        <div class="container bg-light col-lg-8  bienvenue d-flex align-items-center flex-column rounded my-5 py-3 border border-dark shadow">
            <p class="text-center fs-4 py-5">Thank you for contacting us, we will review your message as soon as possible.</p>
        </div>

    <?php } ?>



    <?php require_once '../elements/footer.php' ?>


</body>

</html>