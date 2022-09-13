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
require_once '../models/Comments.php';

$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();

$deals = new Deals();
$AllDealsArray = $deals->getAllDeals();
$oneDealArray = $deals->getOneDeal($_GET['choice']);

$comment = new Comments();
$getCommentByDeal = $comment->getCommentsByDeal($_GET['choice']);




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


    if (count($errors) == 0) {
        $date = date('d/m/Y');
        $deals = new Deals();
        $oneDealArray = $deals->getOneDeal($_GET['choice']);


        

        $comments = new Comments();


        $comments->addComments($_POST['dealRating'], $_POST['dealComment'], $date, $oneDealArray['deals_id'], ($_SESSION['user'] ? $_SESSION['user']['users_id']:18 ));

        header('location: deals.php?choice=' . $oneDealArray['deals_id']);
        exit;
    }
}
