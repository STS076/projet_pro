<?php

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
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



// si je fais un POST, alors je vais créer un cookie. 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('preference', $_POST['preference'], time() + 3600);
    setcookie('affichage', $_POST['affichage'], time() + 3600);

    // il faut controller si la checkbox est cochée
    if(isset($_POST['main'])){
        setcookie('main', $_POST['main'], time() + 3600);
    } else{
        setcookie('main', '', time() -3600); 
    }
    header('Location: upload.php');
};
