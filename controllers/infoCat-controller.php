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
$oneTagArray = $arr->getOneArrondissement($_GET['info']);
$GetDealsfromArr = $arr->GetDealsfromArr($_GET['info']); 
$getNumberofDealsbyArr = $arr->getNumberofDealsbyArr($_GET['info']);

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();

$getOneCat = $category->getOneCategory($_GET['info']);