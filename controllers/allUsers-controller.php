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

$role = new Role();
$allRoleArray = $role->getAllRole();

$users = new Users();
$AllUsersArray = $users->getAllUsers();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $deal = new Deals;
        $deal->changeDealsToAnonymous($_POST['delete']);
        $users = new Users();
        $users->deleteUser($_POST['delete']);
    }
}
$AllUsersArray = $users->getAllUsers();
