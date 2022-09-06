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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (isset($_POST['pseudo'])) {
        if (empty($_POST['pseudo'])) {
            $errors['pseudo'] = "* Veuillez rentrer votre identifiant";
        }
    }
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors['password'] = "* Veuillez rentrer un mot de passe";
        }
    }

    if (count($errors) == 0) {
        $usersObj = new Users();
        if ($usersObj->checkIfMailExists($_POST['pseudo'])) {
            $usersInfos =  $usersObj->getInfosUsers($_POST['pseudo']);
            if (password_verify($_POST['password'], $usersInfos['users_password'])) {
                $_SESSION['user'] = $usersInfos;

                if ($_SESSION['user']['role_id_ROLE'] == 1) {
                    header('Location: dashboard.php');
                } else {
                    header('Location: dashboard-deals.php');
                    exit;
                }
            } else {
                $errors['connection'] = "Identifiant ou MDP incorrect";
            }
        } else {
            $errors['connection'] = "Identifiant ou MDP incorrect";
        }
    }
}
