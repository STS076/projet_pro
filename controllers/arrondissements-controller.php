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
$oneArrondissement = $arr->getOneArrondissement($_GET['choice']);

$category = new Categories();
$allTagsCategoryArray = $category->getAllTagCategory();

$deals = new Deals();
$AllDealsArray = $deals->getAllDeals();
$getDealByArr = $deals->getDealsbyArr($_GET['choice']);

$exploreColor = [
    'Nature' => 'green',
    'Beauty' => 'pink',
    'Museum' => 'blue',
];

$image = new Images(); 

