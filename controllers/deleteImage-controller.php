<?php
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_ROLE'] != 1 && $_SESSION['user']['role_id_ROLE'] != 2){
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

$gallery = new Images(); 
$getOneGallery = $gallery->getOneGallery($_GET['deal']); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $gallery = new Images(); 
        $deleteImage = $gallery->deleteImage($_POST['delete']);
    }
    header('Location:gallery.php?deal=' . $_GET['deal']);
}
$getOneGallery = $gallery->getOneGallery($_GET['deal']); 