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
require_once '../models/Comments.php';

$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();
$getOneCat = $category->getOneCategory($_GET['amend']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    $regexName = "/^[a-zA-Z-0-9-éèëêâäàöôûùüîïç\ ]+$/";
    $regexPhoneNumber = "/^[0-9]{10}+$/";

    if (isset($_POST['tag_categories_name'])) {
        if (empty($_POST['tag_categories_name'])) {
            $errors['tag_categories_name'] = '*Please enter a tag';
        } 
    }

    if (isset($_POST['tag_categories_summary'])) {
        if ($_POST['tag_categories_summary'] == '') {
            $errors['tag_categories_summary'] = '*Please enter a summary';
        }
    }

    if (count($errors) == 0) {
        $tagCategory = safeInput($_POST['tag_categories_name']);

        $tagCatObj = new Categories();
        $tagCatObj->amendCategory($_GET['amend'], $tagCategory, $_POST['tag_categories_summary']);

        header('location: allTagsCategory.php');
        exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}