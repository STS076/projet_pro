<?php

if (!isset($_SESSION['user'])) {
    header('Location: loginAdmin.php');
    exit;
}

require_once '../config.php';
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

    $regexName = "/^[a-zA-Z-0-9-éèëêâäàöôûùüîïç\ ]+$/";
    // $regexPhoneNumber = "/^[0-9]{10}+$/";

    if (isset($_POST['dealTitle'])) {
        if (empty($_POST['dealTitle'])) {
            $errors['dealTitle'] = '*Please enter a title';
        } else if (!preg_match($regexName, $_POST['dealTitle'])) {
            $errors['dealTitle'] = "* Tag not valid";
        }
    }
    if (isset($_POST['dealWhen'])) {
        if (empty($_POST['dealWhen'])) {
            $errors['dealWhen'] = '*Please enter an address';
        } else if (!preg_match($regexName, $_POST['dealWhen'])) {
            $errors['dealWhen'] = "* Tag not valid";
        }
    }
    if (isset($_POST['dealWhere'])) {
        if (empty($_POST['dealWhere'])) {
            $errors['dealWhere'] = '*Please enter a date';
        } else if (!preg_match($regexName, $_POST['dealWhere'])) {
            $errors['dealWhere'] = "* Tag not valid";
        }
    }
    if (isset($_POST['dealPrice'])) {
        if (empty($_POST['dealPrice'])) {
            $errors['dealPrice'] = '*Please enter a price';
        } else if (!preg_match($regexName, $_POST['dealPrice'])) {
            $errors['dealPrice'] = "* Tag not valid";
        }
    }
    if (isset($_POST['dealMap'])) {
        if (empty($_POST['dealMap'])) {
            $errors['dealMap'] = '*Please enter a map';
        } else if (!preg_match($regexName, $_POST['dealMap'])) {
            $errors['dealMap'] = "* Tag not valid";
        }
    }
    if (isset($_POST['dealMetro'])) {
        if (empty($_POST['dealMetro'])) {
            $errors['dealMetro'] = '*Please enter a metro / RER';
        } else if (!preg_match($regexName, $_POST['dealMetro'])) {
            $errors['dealMetro'] = "* Tag not valid";
        }
    }
    if (isset($_POST['dealInfo'])) {
        if (empty($_POST['dealInfo'])) {
            $errors['dealInfo'] = '*Please enter more info';
        } else if (!preg_match($regexName, $_POST['dealInfo'])) {
            $errors['dealInfo'] = "* Tag not valid";
        }
    }
    if (isset($_POST['dealTagArr[]'])) {
        if (empty($_POST['dealTagArr[]'])) {
            $errors['dealTagArr[]'] = '*Please select an Arrondissement';
        }
    }

    if (count($errors) == 0) {
        $showForm = false;
        $tagArr = safeInput($_POST['tagArr']);

        // $tagArrObj = new Arrondissements();
        // $tagArrObj->addTagArr($tagArr);

        header('location: dashboard-deals.php');
        exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
