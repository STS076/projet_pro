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

$showForm = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];


    if (isset($_POST['pseudo'])) {
        $user = new Users();
        $obj = $user->checkIfMailExists($_POST['pseudo']);
        if ($user->checkIfMailExists($_POST['pseudo'])) {
            $user->checkIfMailExists($_POST['pseudo']);
        } else {
            $errors['pseudo'] = '* This email address does not exist';
        }
        if (empty($_POST['pseudo'])) {
            $errors['pseudo'] = '*Please enter your email address';
        } else if (!filter_var($_POST['pseudo'], FILTER_VALIDATE_EMAIL)) { // si ça ne passe pas le filter var : FILTER_VALIDATE_EMAIL
            $errors['pseudo'] = '* Email not valid, ex. mail@mail.com';
        }
    }

    if (count($errors) == 0) {
        $showForm = false;
    }
}
