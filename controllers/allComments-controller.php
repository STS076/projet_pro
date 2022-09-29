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

$comments = new Comments(); 



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['archive'])) {
        $comments = new Comments(); 
        $archiveComment = $comments->archiveComment($_POST['archive']);
    }
}
$comments = new Comments();
$allComments = $comments->getAllComments();
$getCommentsByUser = $comments->getCommentsByUser($_SESSION['user']['users_id']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['reactivate'])) {
        $comments = new Comments(); 
        $approveComments = $comments->approveComments($_POST['reactivate']); 
    }
}
$comments = new Comments(); 
$allComments = $comments->getAllComments();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $deals = new Comments();
        $deleteDeal = $deals->deleteComments($_POST['delete']);
    }
}
$allComments = $comments->getAllComments();