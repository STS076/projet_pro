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
$oneCatArray = $category->getOneCategory($_GET['category']);

$deals = new Deals();
$AllDealsArray = $deals->getAllDeals();
$getDealByCat = $deals->getDealsbyCat($_GET['category']);

$image = new Images();

$cardColors = [
    'Museums' => 'beige',
    'Beauty' => 'pink',
    'Nature' => 'green',
    'Music' => 'blue',
    'Restaurants and Bars' => 'purple',
    'Sport' => 'yellow',
    'Cinema and Theatre' => 'red', 
    'Culture' => 'orange'
];
