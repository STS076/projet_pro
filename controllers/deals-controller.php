<?php

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

$deals = new Deals();
$AllDealsArray = $deals->getAllDeals();
$oneDealArray = $deals->getOneDeal($_GET['choice']);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (isset($_POST['dealRating'])) {
        if (empty($_POST['dealRating'])) {
            $errors['dealRating'] = '*Please chose a rating';
        }
    }
    if (isset($_POST['dealComment'])) {
        if (empty($_POST['dealComment'])) {
            $errors['dealComment'] = '*Please a comment';
        }
    }


    // if (count($errors) == 0) {
    //     $date = date('d/m/Y');

    //     $tagArrObj = new Arrondissements();
    //     $tagArrObj->addTagArr($tagArr, $_POST['tagArrImage'], $_POST['tagArrSummary']);

    //     header('location: dashboard-tagsArr.php');
    //     exit;
    // }
}
