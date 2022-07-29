<?php require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <a href="home.php" class="text-decoration-none text-dark border border-dark shadow-sm p-2 mx-2">retour</a>

    <h1 class="text-center p-5 ">Télécharger vos images</h1>


    <div class="row m-0 pt-5 px-0 justify-content-center">
        <div class="col-lg-8 col-11 charger border border-dark shadow-sm rounded p-5 mb-5 mx-0 text-center">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="file">Fichier <i class="ms-1 bi bi-cloud-arrow-up"></i></label>
                <div class="d-flex justify-content-center p-3">
                    <img id="imgPreview" id="fileToUpload">
                </div>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <button type="submit" class="btn border text-white border-dark bouton p-1 m-1">Enregistrer</button>
            </form>

            <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $id = uniqid();
                $newName = $id . '.webp';
                $target_dir = "../assets/images/gallery/";
                $target_file = $target_dir . basename($newName);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check == true) {
            ?>
                        <p class="p-2">Ce fichier est une image <?= $check["mime"] ?>.</p>
                    <?php
                        $uploadOk = 1;
                    } else { ?>

                        <p class="p-2">Ce fichier n'est pas une image.</p>
                    <?php
                        $uploadOk = 0;
                    }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    ?>
                    <p class="p-2">Ce fichier existe déjà.</p>
                <?php
                    $uploadOk = 0;
                };

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 8000000) { ?>

                    <p class="p-2">Votre fichier est trop large.</p>
                <?php
                    $uploadOk = 0;
                };

                // Allow certain file formats
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"  && $imageFileType != "webp"
                ) { ?>
                    <p class="p-2">Vous pouvez seulement télécharger des fichiers JPG, JPEG, PNG & GIF.</p>
                <?php
                    $uploadOk = 0;
                };

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {  ?>
                    <p class="p-2">Votre fichier n'a pas été téléchargé.</p>

                    <!-- if everything is ok, try to upload file -->
                    <?php } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { ?>

                        <p class="p-2">Le fichier <?= htmlspecialchars($_FILES["fileToUpload"]["name"]) ?> a bien été téléchargé dans vos documents.</p>
                    <?php  } else { ?>

                        <p class="p-2">Désolé, il y a eu une erreur dans le téléchargement de votre image.</p>
            <?php }
                }
            }
            ?>
        </div>
    </div>


    <?php require_once '../elements/footer.php' ?>

</body>

</html>