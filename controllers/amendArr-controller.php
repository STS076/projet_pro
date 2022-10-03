<?php

if (!isset($_SESSION['user']) ||   $_SESSION['user']['role_id_ROLE'] != 1) {
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
require_once '../models/Comments.php';
require_once '../models/Form.php';

$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();
$getOneArrondissement = $arr->getOneArrondissement($_GET['amend']);

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    // $paramUpload = [
    //     'size' => 4000000,
    //     'extension' => ['jpeg', 'jpg', 'webp', 'png'],
    //     'directory' => '../assets/images/images/',
    //     'extend' => 'png'
    // ];

    // $resultVerifyImg = Form::verifyImg('picture', $paramUpload);

    $errors = [];

    $regexName = "/^[a-zA-Z-0-9-éèëêâäàöôûùüîïç\ ]+$/";
    // $regexPhoneNumber = "/^[0-9]{10}+$/";

    if (isset($_POST['tagArr'])) {
        if (empty($_POST['tagArr'])) {
            $errors['tagArr'] = '*Please enter a tag';
        } else if (!preg_match($regexName, $_POST['tagArr'])) {
            $errors['tagArr'] = "* Tag not valid";
        }
    }
    if (isset($_POST['tagArrSummary'])) {
        if (empty($_POST['tagArrSummary'])) {
            $errors['tagArrSummary'] = '*Please write a summary';
        }
    }

    // if ($resultVerifyImg['permissionToUpload'] === false) {
    //     $errors['picture'] = $resultVerifyImg['errorMessage'];
    // }

    if (count($errors) == 0) {
        $tagArr = safeInput($_POST['tagArr']);

        // $resultUploadImage = Form::uploadImage('picture', $paramUpload);
        // if ($resultUploadImage['success'] === true) {
        //     $picture = Form::convertImagetoBase64($paramUpload['directory'] . $resultUploadImage['imageName']);
        //     // var_dump($picture);

        // } else {
        //     $errors['picture'] = $resultUploadImage['messageError'];
        // }

        $tagArrObj = new Arrondissements();
        $tagArrObj->amendArr($_GET['amend'], $tagArr, $_POST['tagArrSummary']);


        // creation d'une variable de session swal
        $_SESSION['swal'] = [
            'icon' => 'success',
            'title' => 'Modify Arrondissement',
            'text' => 'You have successfully modified ' . $_POST['tagArr'] . ' ! '
        ];

        header('location: allTagsArr.php');
        exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
