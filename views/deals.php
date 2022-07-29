<?php
session_start();
$gallerie = scandir('../assets/images/gallery/');
require_once '../elements/top.php';
?>

<body class="m-0 p-0">

    <?php require_once '../elements/header.php' ?>

    <main>
        <div class="row mx-0 my-5 justify-content-evenly p-0">
            <h2 class="fst-italic fw-bold text-center mb-5">Jardin des Tuileries</h2>
            <div class="col-lg-4 col-11 m-0 p-0">
                <p><span class="fw-bolder">Good Deal : </span>Walking through history<br>
                    Close to the Louvre, Le Jardin des Tuileries is one of the most sought after spot in Paris and from its inhabitants. You can learn all about this place in a free visit by the city of Paris, they will tell you about the key moments of the gardens and the characteristics that made history.
                </p>
                <p><span class="fw-bolder">Where : </span>Meeting point at L'arc de triomphe du Carousel du Louvre</p>
                <p><span class="fw-bolder">When : </span>From the last sunday of september to the last saturday of march : everyday 7h30 - 19h30<br>
                    From the last sunday of March to the last saturday of September : everyday 7h - 21h

                </p>
                <p><span class="fw-bolder">Price : </span>Free</p>
                <p><span class="fw-bolder">contact : </span>01 40 20 90 43</p>
                <p><span class="fw-bolder">How to get here : </span>Metro Concorde, Tuileries<br>
                    RER Musée d'orsay
                </p>
                <p><span class="fw-bolder">More info : </span>Free toilets on the Concorde entry of the garden</p>
                <p> <span class="fw-bolder">Tags : </span>
                    <a href="arrondissements.php?choice=1"># 1st Arrondissement</a>
                    <a href="categories.php?choice=nature"># Nature</a>
                </p>
            </div>
            <div class="col-lg-5 carte">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6882148443183!2d2.3228064656745855!3d48.86415552928805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2c30000001%3A0xc219db09e1bfefc7!2sJardin%20des%20Tuileries!5e0!3m2!1sfr!2sfr!4v1658575489794!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            <h3 class="fst-italic comments fw-bold text-center p-5">Gallery</h3>
            <div class="container m-5 p-5 border border-danger">
                
                <div class="row" data-masonry='{"percentPosition": true }'>


                    <?php
                    foreach ($gallerie as $key => $value) {
                        if ($value == '.' || $value == '..') {
                        } else {
                    ?>
                            <div class="col-sm-6 col-lg-4 mb-2">
                                <div class="">
                                    <a class="example-image-link" href="../assets/images/gallery/<?= $value ?>" data-lightbox="galerie"><img src="../assets/images/gallery/<?= $value ?>" data-lightbox="cozy" class="galleryPicture"></a>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>



                </div>
            </div>

            <div class="row m-0 p-0 justify-content-evenly">
                <div class="col-lg-8 col-11">
                    <a href="contact.php" class="text-secondary">You noticed any mistake on this deal ? please contact us.</a>
                </div>
            </div>
        </div>


        <div class="row mx-0 p-0 my-5 bg-light">
            <h3 class="fst-italic text-center fw-bold comments pt-3">Reviews</h3>
            <div class="col-lg-8 col-11 d-flex justify-content-center">
                <form action="" method="post" accept-charset="utf-8" class="d-flex justify-content-center">
                    <fieldset>
                        <p><label for="rating">Rating</label><input type="radio" name="rating" value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
                            <input type="radio" name="rating" value="3" /> 3 <input type="radio" name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1
                        </p>
                        <p><textarea name="review" rows="8" cols="40">
                            </textarea>
                        </p>
                        <p><input type="submit" value="Submit Review"></p>
                        <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
                        <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
                    </fieldset>
                </form>
            </div>

        </div>
    </main>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>