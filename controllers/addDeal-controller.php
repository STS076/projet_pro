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
require_once '../models/Form.php';

// pour le header, appelle les deux fonctions pour récupérer le nom de toutes les catégories afin de les afficher dans la navbar. 
$arr = new Arrondissements();
$allTagsArrArray = $arr->getAllTagArr();
$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();

// si form est ok, alors va afficher un message de validation
$showForm = true;


// va faire les vérifications du formulaire, s'il est bien remplis, si aucune erreur. 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $paramUpload = [
        'size' => 4000000,
        'extension' => ['jpeg', 'jpg', 'webp', 'png'],
        'directory' => '../assets/images/gallery/',
        'extend' => 'png'
    ];

    $resultVerifyImg = Form::verifyImg('picture', $paramUpload);


    $errors = [];

    $regexName = "/^[a-zA-Z-0-9-éèëêâäàöôûùüîïç\ ]+$/";
    // $regexPhoneNumber = "/^[0-9]{10}+$/";

    if (isset($_POST['dealTitle'])) {
        if (empty($_POST['dealTitle'])) {
            $errors['dealTitle'] = '*Please enter a title';
        }
    }
    if (isset($_POST['dealMiniSummary'])) {
        if (empty($_POST['dealMiniSummary'])) {
            $errors['dealMiniSummary'] = '*Please write a mini summary ';
        }
    }
    if (isset($_POST['dealSummary'])) {
        if (empty($_POST['dealSummary'])) {
            $errors['dealSummary'] = '*Please write a summary';
        }
    }
    if (isset($_POST['dealWhen'])) {
        if (empty($_POST['dealWhen'])) {
            $errors['dealWhen'] = '*Please enter a date';
        }
    }
    if (isset($_POST['dealWhere'])) {
        if (empty($_POST['dealWhere'])) {
            $errors['dealWhere'] = '*Please enter an address';
        }
    }
    if (isset($_POST['dealPrice'])) {
        if (empty($_POST['dealPrice'])) {
            $errors['dealPrice'] = '*Please enter a price';
        }
    }
    if (isset($_POST['dealMap'])) {
        if (empty($_POST['dealMap'])) {
            $errors['dealMap'] = '*Please enter a map';
        }
    }
    if (isset($_POST['dealMetro'])) {
        if (empty($_POST['dealMetro'])) {
            $errors['dealMetro'] = '*Please enter a metro / RER';
        }
    }
    // if (isset($_POST['dealInfo'])) {
    //     if (empty($_POST['dealInfo'])) {
    //         $errors['dealInfo'] = '*Please enter more info';
    //     }
    // }

    if (isset($_POST['dealContact'])) {
        if (empty($_POST['dealContact'])) {
            $errors['dealContact'] = '*Please enter a contact';
        }
    }

    if (isset($_POST['dealTagArr'])) {
        if (empty($_POST['dealTagArr'])) {
            $errors['dealTagArr'] = '*Please select an Arrondissement';
        }
    }

    if (isset($_POST['dealTagCat'])) {
        if (empty($_POST['dealTagCat'])) {
            $errors['dealTagCat'] = '*Please select a Category';
        }
    }

    if ($resultVerifyImg['permissionToUpload'] === false) {
        $errors['picture'] = $resultVerifyImg['errorMessage'];
    }

    if (count($errors) == 0) {
        $showForm = false;
        $dealTitle = safeInput($_POST['dealTitle']);
        $dealWhen = safeInput($_POST['dealWhen']);
        $dealWhere = safeInput($_POST['dealWhere']);
        $dealPrice = safeInput($_POST['dealPrice']);
        $dealMap = $_POST['dealMap'];
        $dealMetro = safeInput($_POST['dealMetro']);
        $dealInfo = safeInput($_POST['dealInfo']);
        $dealTagArr = safeInput($_POST['dealTagArr']);
        $date = date('d/m/Y');



        // va créer un nouveau deal 
        $dealObj = new Deals();
        $idDeals = $dealObj->addDeals($dealTitle, $_POST['dealMiniSummary'], $_POST['dealSummary'], $dealWhen, $dealWhere, $dealPrice, $dealMap, $dealMetro, $dealInfo, $_POST['dealContact'], $dealTagArr, $_SESSION['user']['users_id'], $date);

        $category = new Categories();
        $allTagsCategoryArray = $category->getAllTagCategory();



        // va ajouter l'id des catégories dans la table intermédiaire
        foreach ($_POST['dealTagCat'] as $value) {
            $cat = new DealsHasCat();
            $cat->addDealCategory($value, $idDeals);
        };
        $allcatarray = $cat->getDealCategory($idDeals);

        $resultUploadImage = Form::uploadImage('picture', $paramUpload);

        if ($resultUploadImage['success'] === true) {
            $picture = Form::convertImagetoBase64($paramUpload['directory'] . $resultUploadImage['imageName']);
            var_dump($picture);

            $image = new Images();
            $addImage = $image->addImage($picture,$idDeals);

            // header('Location: upload.php?deal=' . $_GET['deal']);
        } else {
            $errors['picture'] = $resultUploadImage['messageError'];
        }

        // header('Location: allDeals.php');
        // exit;
    }
}




// va enlever les espaces inutiles et faire en sorte que les caractères HTML ne soient pas pris en compte
function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
