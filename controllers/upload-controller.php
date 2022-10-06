<?php

if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_ROLE'] != 1 && $_SESSION['user']['role_id_ROLE'] != 2) {
    header('Location: loginAdmin.php');
    exit;
}

require_once '../.gitignore/config.php';
require_once '../models/Database.php';
require_once '../models/Categories.php';
require_once '../models/Arrondissements.php';
require_once '../models/AddDeals.php';
require_once '../models/DealsHasCat.php';
require_once '../models/Images.php';
require_once '../models/Role.php';
require_once '../models/Users.php';
require_once '../models/Form.php';

$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();


$deals = new Deals();
$AllDealsArray = $deals->getAllDeals();
$oneDealArray = $deals->getOneDeal($_GET['deal']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $paramUpload = [
        'size' => 4000000,
        'extension' => ['jpeg', 'jpg', 'webp', 'png'],
        'directory' => '../assets/images/images/',
        'extend' => 'png'
    ];

    $errors = [];

    $resultVerifyImg = Form::verifyImg('picture', $paramUpload);

    if ($resultVerifyImg['permissionToUpload'] === false) {
        $errors['picture'] = $resultVerifyImg['errorMessage'];
    }

    if (count($errors) == 0) {
        $resultUploadImage = Form::uploadImage('picture', $paramUpload);
        if ($resultUploadImage['success'] === true) {
            $picture = Form::convertImagetoBase64($paramUpload['directory'] . $resultUploadImage['imageName']);

            $image = new Images();
            $addImage = $image->addImage($picture, $_GET['deal']);

            // creation d'une variable de session swal
            $_SESSION['swal'] = [
                'icon' => 'success',
                'title' => 'Add an image',
                'text' => 'You have successfully added an image ! '
            ];

            header('Location:gallery.php?deal=' . $_GET['deal']);
        } else {
            $errors['picture'] = $resultUploadImage['messageError'];
        }
    }
}
