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
                    <div class="form-group col-lg-6 col-12 my-3 text-center">
                        <label>Your email address:</label>
                        <input class="text-center form-control" id="emailAddress" placeholder="Email" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">
                        <p class="text-danger" id="erroremailAddress"><?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?></p>
                    </div>
                    <div class=" form-group col-lg-6 col-11 text-center">
                        <select class="text-center form-control" name="option" id="option">
                            <option selected disabled>choose an option</option>
                            <option value="New Deal">This concerns a new deal</option>
                            <option value="Mistake">There is a mistake in one of our ads</option>
                        </select>
                        <p class="text-danger" id="erroroption"><?= isset($errors['option']) ? $errors['option'] : '' ?></p>
                    </div>


                    <div class="form-group col-lg-6 col-12 my-3 text-center">
                        <label>Your message:</label>
                        <textarea class="form-control" name="review" rows="8" cols="40">
                            </textarea>

                        <p class="text-danger" id="errorreview"><?= isset($errors['review']) ? $errors['review'] : '' ?></p>
                    </div>

                    <div class="row text-center">
                        <div class="col-lg-12 col-12 my-1">
                            <p>J'ai lu et j'accèpte les conditions générales d'utilisation :</p>
                            <input type="checkbox" id="checkbox" name="checkbox" value="<?= isset($_POST['checkbox']) ? $_POST['checkbox'] : '' ?>">
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



        <p class="text-center fs-4 py-5">Thank you for contacting us, we will review your message as soon as possible.</p>


    <?php } ?>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>