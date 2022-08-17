<?php

session_start();

require_once '../controllers/parameters-controller.php';

require_once '../elements/top.php' ?>

<body class="d-flex flex-column min-vh-100">

    <?php require_once '../elements/header.php' ?>


    <a href="upload.php" class="m-2 text-decoration-none text-dark p-2">upload gallery</a>
    <a href="home.php" class="m-2 text-decoration-none text-dark p-2">retour</a>
    <p class="fw-bold fst-italic fs-3 py-3 text-center">Hello <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['surname'] ?></p>
    <div class="container d-flex align-items-center flex-column bg-light subway mt-1 mb-4 p-4 blanc border border-dark shadow-sm" id="page">
        <form action="" method="POST">

            <p class=" text-center fs-5 my-4 fw-bold">Upload a new deal</p>
            <div class="row m-0 p-0">


                <div class="table-responsive">
                    <table>
                        <tr>
                            <td>Title :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>Good Deal :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>Where :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>When :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>Price :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>How :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>Contact :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>More info :</td>
                            <td><input></td>
                        </tr>
                        <tr>
                            <td>Map :</td>
                            <td><input></td>
                        </tr>
                    </table>
                </div>
            </div>



        </form>
        <div class="row m-0 pt-5 px-0 justify-content-center">
            <p class="text-center">Upload images for the gallery</p>
            <div class="col-lg-8 col-11 charger rounded  mb-5 mx-0 text-center">
                <form action="parameters.php" method="post" enctype="multipart/form-data">
                    <label for="file">File <i class="ms-1 bi bi-cloud-arrow-up"></i></label>
                    <div class="d-flex justify-content-center p-3">
                        <img id="imgPreview" id="fileToUpload">
                    </div>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <button type="submit" class="btn border text-white border-dark bouton p-1 m-1">Save</button>
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
            <div class=" mt-5 text-center">
                <button class="btn bouton text-white" id="submit">Save the changes</button>
            </div>
        </div>


    </div>

    <div class="container d-flex align-items-center flex-column bg-light subway mt-1 mb-4 p-5 blanc border border-dark shadow-sm" id="page">
        <p class="text-center fs-5 my-4 fw-bold">Deals waiting for confirmation</p>

        <div class="row m-0">
            <div class="col-lg-4 col-11">

                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn bouton text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                </div>
            

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require_once '../elements/footer.php' ?>

</body>

</html>