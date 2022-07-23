<?php


$showForm = true;

// lance les test uniquement lors de la validation du formulaire de type POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // déclare un tableau d'erreur
    $errors = [];

    // déclare les regex 
    $regexName = "/^[a-zA-Z-éèëêâäàöôûùüîïç]+$/";

    // isset permet de vérifier si la variable existe
    if (isset($_POST['reviws'])) {
        if ($_POST['reviws'] == '') {
            // si vide, créé une clef dans le tableau d'erreur
            $errors['reviws'] = "* please leave a review";
        } else if (!preg_match($regexName, $_POST['reviws'])) {
            $errors['reviws'] = "* format invalide";
        }
    }




    if (isset($_POST['emailAddress'])) {
        if ($_POST['emailAddress'] == '') {
            $errors['emailAddress'] = "* please fill out your email address";
        } else if (!filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL)) {
            $errors['emailAddress'] = "* invalid email address";
        }
    }



    if (!isset($_POST['option'])) {
        $errors['option'] = "* please choose an option";
    }

    if (!isset($_POST['checkbox'])) {
        $errors['checkbox'] = "* Veuillez valider les conditions générales d'utilisation";
    }

    if (count($errors) == 0) {
        $showForm = false;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}

// protéger ce qu'on va controller, rentre ce qu'on récupère safe. utiliser la fonction trim et htmlspecialchar
// pour échapper les caractères HTML 
// trim sert à supprimer les espaces en début ou de fin de chaine

// faire un tableau associatif pour les formules pour les afficher correctement en fonction de l'index. 
$arrayFormula = [
    1 => 'étudiante',
    2 => 'normale',
    3 => 'prémium'
];
