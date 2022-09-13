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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['archive'])) {
        $deals = new Deals();
        $archiveDeals = $deals->archiveDeals($_POST['archive']);
    }
}

$deals = new Deals(); 
$AllDealsArray = $deals->getAllDeals(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['reactivate'])) {
        $deals = new Deals();
        $archiveDeals = $deals->changeDealValidationStatus($_POST['reactivate']);
    }
}

$deals = new Deals(); 
$AllDealsArray = $deals->getAllDeals(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $specificDoctor = $doctor->getSpecificDoctor($_POST['delete']); 
        $user->deleteUser($specificDoctor[0]['doctors_mail']);
        $doctor->deleteDoctor($_POST['delete']);
    }
}
$AllDealsArray = $deals->getAllDeals(); 
