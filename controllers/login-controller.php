<?php

$login = "sophie";
$passwordHash = '$2y$10$qzpuB2nn5O6Gr9SkFERwre7Nd2NN8.N0034dpUfeczvpj71Hh7kLe';
$password = password_hash('sophie', PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    $regexName = "/^[a-zA-Z-éèëêâäàöôûùüîïç]+$/";

    if (isset($_POST['pseudo'])) {
        if ($_POST['pseudo'] == '') {
            $errors['pseudo'] = "* Veuillez rentrer votre pseudo";
        } else if (!preg_match($regexName, $_POST['pseudo'])) {
            $errors['pseudo'] = "* format invalide";
        } else if (($_POST['pseudo']) != $login) {
            $errors['pseudo'] = "* Le pseudo est invalide";
        }
    }

    if (isset($_POST['password'])) {
        if ($_POST['password'] == '') {
            $errors['password'] = "* Veuillez rentrer un mot de passe";
        } else if (!password_verify($_POST['password'], $passwordHash)) {
            // si le champ qu'on rentre correspond au hash. 
            $errors['password'] = "* Le mot de passe est invalide";
        }
    }

    if (count($errors) == 0) {
        // $showForm = false;
        $_SESSION['user'] = [
            'surname' => 'Toussaint',
            'firstname' => 'Sophie',
            'role' => 2
        ];
        header('location: parameters.php');
        exit;
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars(($safeInput));
    return $safeInput;
}
