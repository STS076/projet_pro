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


$showForm = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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

    if (count($errors) == 0) {
        $showForm = false;
        $tagArr = safeInput($_POST['tagArr']);

        $tagArrObj = new Arrondissements();
        $tagArrObj->addTagArr($tagArr);

        header('location: dashboard-tagsArr.php');
        exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
