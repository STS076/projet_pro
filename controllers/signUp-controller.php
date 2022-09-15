<?php

// if (!isset($_SESSION['user'])) {
//     header('Location: signUp.php');
//     exit;
// }

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
        $user = new Users();
        $obj = $user->checkIfUsernameExists($_POST['username']);
        if ($user->checkIfUsernameExists($_POST['username'])) {
            $errors['username'] = '*This username is already taken';
        }
        if (($_POST['username']) == '') {
            $errors['username'] = "* Please enter your username";
        }
    }

    if (isset($_POST['emailAddress'])) {
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


    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors['password'] = "* Please enter a password";
        }
    }

    if (isset($_POST['passwordconfirm'])) {
        if (empty($_POST['passwordconfirm'])) {
            $errors['passwordconfirm'] = "* Please confirm your password";
        } else if (($_POST['password']) != ($_POST['passwordconfirm'])) {
            $errors['passwordconfirm'] = "* Please enter an identical password to the one above";
        }
    }

    if (count($errors) == 0) {
        $showForm = false;

        $prenom = safeInput($_POST['firstname']);
        $nom = safeInput($_POST['surname']);
        $pseudo = safeInput($_POST['username']);
        $adresseEmail = safeInput($_POST['emailAddress']);
        $motDePasse = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $date = date('d/m/Y');

        $usersObj = new Users();
        $usersObj->addUsers($pseudo,  $prenom,  $nom,  $adresseEmail,  $motDePasse, $date);

        // header('location: admin.php');
        // exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
