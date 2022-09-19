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

$role = new Role();
$allRoleArray = $role->getAllRole();

$user = new Users();
$allUsers = $user->getAllUsers();
$getOneUser = $user->getOneUser($_GET['amend']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new Users();
    $getOneUser = $user->getOneUser($_GET['amend']);

    $errors = [];

    $regexName = "/^[a-zA-Z-éèëêâäàöôûùüîïç]+$/";
    $regexPhoneNumber = "/^[0-9]{10}+$/";

  
    if (isset($_POST['firstname'])) {
        if (empty($_POST['firstname'])) {
            $errors['firstname'] = '*Please enter you name';
        } else if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = "* Name not valid";
        }
    }

    if (isset($_POST['surname'])) {
        if (empty($_POST['surname'])) {
            $errors['surname'] = '*Please enter your surname';
        } else if (!preg_match($regexName, $_POST['surname'])) {
            $errors['surname'] = "* Surname not valid";
        }
    }

    if (isset($_POST['username'])) {
        if ($_POST['username'] != $getOneUser['users_username']) {
            $user = new Users();
            $obj = $user->checkIfUsernameExists($_POST['username']);
            if ($user->checkIfUsernameExists($_POST['username'])) {
                $errors['username'] = '*This username is already taken';
            }
            if (($_POST['username']) == '') {
                $errors['username'] = "* Please enter your username";
            }
        }
    }

    if (isset($_POST['emailAddress'])) {
        if ($_POST['emailAddress'] != $getOneUser['users_mail']) {
            $user = new Users();
            $obj = $user->checkIfMailExists($_POST['emailAddress']);
            if ($user->checkIfMailExists($_POST['emailAddress'])) {
                $errors['emailAddress'] = '*Cet email existe déjà';
            }
            if (empty($_POST['emailAddress'])) {
                $errors['emailAddress'] = '*Please enter your email address';
            } else if (!filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL)) { // si ça ne passe pas le filter var : FILTER_VALIDATE_EMAIL
                $errors['emailAddress'] = '* Email not valid, ex. mail@mail.com';
            }
        }
    }

    if (isset($_POST['role_id_ROLE'])) {
        if ($_POST['role_id_ROLE'] == '') {
            $errors['role_id_ROLE'] = "* Please chose a role";
        }
    }

    if (count($errors) == 0) {
        $prenom = safeInput($_POST['firstname']);
        $nom = safeInput($_POST['surname']);
        $pseudo = safeInput($_POST['username']);
        $adresseEmail = safeInput($_POST['emailAddress']);

        $user = new Users();
        $user->amendUser($pseudo,  $prenom,  $nom,  $adresseEmail, $_POST['role_id_ROLE'], $_GET['amend']);

        header('location: amendUsers.php?amend=' . $_GET['amend']);
        exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
