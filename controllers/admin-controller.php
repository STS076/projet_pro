<?php

if (!isset($_SESSION['user'])) {
    header('Location: loginAdmin.php');
    exit;
}


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
    header('Location: admin.php');
};


