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

$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $deals = new Deals;
        $getDealsbyCat = $deals->getDealsbyCat($_POST['delete']);

        foreach ($getDealsbyCat as $value) {
            $deals->deleteDeals($value['deals_id']);
        }

        $category->deleteCategory($_POST['delete']);

        $dealHasCatObj = new DealsHasCat();
        $dealHasCatObj->deleteCatCat($_POST['delete']);
    }
}
$allTagsCategoryArray = $category->getAllTagCategory();
