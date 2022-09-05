<?php

if (!isset($_SESSION['user'])) {
    header('Location: loginAdmin.php');
    exit;
}

require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Categories.php';
require_once '../models/Arrondissements.php';
require_once '../models/AddDeals.php';
require_once '../models/DealsHasCat.php';
require_once '../models/Images.php';
require_once '../models/Role.php';
require_once '../models/Users.php';

$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();


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

            echo "<p class='p-2'>Ce fichier est une image".  $check["mime"]  . "</p>";

            $uploadOk = 1;
        } else {

            echo " <p class='p-2'>Ce fichier n'est pas une image.</p>";

            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {

        echo "    <p class='p-2'>Ce fichier existe déjà.</p>";

        $uploadOk = 0;
    };
    if ($_FILES["fileToUpload"]["size"] > 8000000) {

        echo "  <p class='p-2'>Votre fichier est trop large.</p>";

        $uploadOk = 0;
    };

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"  && $imageFileType != "webp"
    ) {
        echo "   <p class='p-2'>Vous pouvez seulement télécharger des fichiers JPG, JPEG, PNG & GIF.</p>";

        $uploadOk = 0;
    };


    if ($uploadOk == 0) {
        echo " <p class='p-2'>Votre fichier n'a pas été téléchargé.</p>";


    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            echo "  <p class='p-2'>Le fichier" .  htmlspecialchars($_FILES['fileToUpload']['name']) . " a bien été téléchargé dans vos documents.</p>";
        } else {

            echo "    <p class='p-2'>Désolé, il y a eu une erreur dans le téléchargement de votre image.</p>";
        }
    }
}

