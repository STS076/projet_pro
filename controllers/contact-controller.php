<?php
$showForm = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    $regexName = "/^[a-zA-Z-éèëêâäàöôûùüîïç]+$/";

    if (isset($_POST['reviws'])) {
        if ($_POST['reviws'] == '') {
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

/*
Vous pouvez prendre tout le contenu de cette page pour l'insérer là où vous voulez sur votre site, attention à bien mettre ce code dans un page avec l'extension .php pour que le code fonctionne
*/
//enregistrer le mail dans une base de donnée ou le recevoir par mail ?
// $queFaitOn = 'review'; //'mail' ou 'bdd'
// //votre mail pour recevoir les nouvelles adresses:
// $mail_admin = 'sophfrom76@hotmail.com';
// //si le bouton "S'inscrire" est cliqué, on traite le formulaire
// if (!empty($_POST['review'])) {
//     $errors = [];
//     //on vérifie la validité de l'adresse mail
//     //pour une explication de cette regex, vous pouvez aller ici : https://www.c2script.com/scripts/verifier-une-adresse-mail-en-php-s2.html
//     if (!preg_match("#^[-\w]+((\.[-\w]+){1,})?@[-\w]+\1?\.[a-z]{2,}$#i", $_POST['emailAddress']))
//     $errors['emailAddress'] = "* format invalide";
//     else {
//         //soit on s'envoi le mail par courriel, soit un l'enregistre dans une base de données
//         if ($queFaitOn == 'review') {

//             //l'envoyer par mail
//             mail($mail_admin, $_POST['option'], "Nouveau message bon plan {$_SERVER['HTTP_HOST']} : " . $_POST['review']);
//         } else {

//             //l'enregistrer en BDD
//             //il vous faudra bien évidemment ouvrir un connexion MySQLi avec mysqli_connect() et créer la table newsletter
//             //juste par sécurité, il vous faudra protéger contre les attaques de injections SQL mais avec la preg_match ya pas besoin :)
//             mysqli_query($mysqli, "INSERT INTO newsletter SET review='" . $_POST['review'] . "'");
//         }

       
//     }
// }

