<?php

if (!isset($_SESSION['user'])) {
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

$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();


$showForm = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    $regexName = "/^[a-zA-Z-0-9-éèëêâäàöôûùüîïç\ ]+$/";
    $regexPhoneNumber = "/^[0-9]{10}+$/";

    if (isset($_POST['tagCategory'])) {
        if (empty($_POST['tagCategory'])) {
            $errors['tagCategory'] = '*Please enter a tag';
        } else if (!preg_match($regexName, $_POST['tagCategory'])) {
            $errors['tagCategory'] = "* Tag not valid";
        }
    }

    if (isset($_POST['tagCategorySummary'])) {
        if (empty($_POST['tagCategorySummary'])) {
            $errors['tagCategorySummary'] = '*Please enter a summary';
        }
    }

    if (count($errors) == 0) {
        $showForm = false;
        $tagCategory = safeInput($_POST['tagCategory']);

        $tagCatObj = new Categories();
        $tagCatObj->addTagCategory($tagCategory, $_POST['tagCategorySummary']);

        header('location: dashboard-tagsCategories.php');
        exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
