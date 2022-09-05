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


/*
Vous pouvez prendre tout le contenu de cette page pour l'insérer là où vous voulez sur votre site, attention à bien mettre ce code dans un page avec l'extension .php pour que le code fonctionne
*/
//enregistrer le mail dans une base de donnée ou le recevoir par mail ?
$queFaitOn = 'mail'; //'mail' ou 'bdd'
//votre mail pour recevoir les nouvelles adresses:
$mail_admin = 'sophfrom76@hotmail.com';
//si le bouton "S'inscrire" est cliqué, on traite le formulaire
if (!empty($_POST['mail'])) {
    $erreurs = [];
    //on vérifie la validité de l'adresse mail
    //pour une explication de cette regex, vous pouvez aller ici : https://www.c2script.com/scripts/verifier-une-adresse-mail-en-php-s2.html
    if (!preg_match("#^[-\w]+((\.[-\w]+){1,})?@[-\w]+\1?\.[a-z]{2,}$#i", $_POST['mail']))
        $erreurs['mail'] = "* format invalide";
    else {
        //soit on s'envoi le mail par courriel, soit un l'enregistre dans une base de données
        if ($queFaitOn == 'mail') {

            //l'envoyer par mail
            mail($mail_admin, "Nouveau mail", "Nouvelle inscription newsletter pour {$_SERVER['HTTP_HOST']} : " . $_POST['mail']);
        } else {

            //l'enregistrer en BDD
            //il vous faudra bien évidemment ouvrir un connexion MySQLi avec mysqli_connect() et créer la table newsletter
            //juste par sécurité, il vous faudra protéger contre les attaques de injections SQL mais avec la preg_match ya pas besoin :)
            mysqli_query($mysqli, "INSERT INTO newsletter SET mail='" . $_POST['mail'] . "'");
        }
    }
}
