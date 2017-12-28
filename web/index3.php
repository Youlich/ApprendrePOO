<?php
//inclusion du fichier
require_once "../src/App/Entity/Article3.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Article3;

//création d'un objet INSTANCIATION
//INSTANCE = objet

$article1 = new Article3();
$article1->setTradeName('article1');

$article2 = new Article3();
$article2->setTradeName('article2');

$article1->setPrice(100);

//affichage de la remise via la classe

echo Article3::$remise;

//ou affichage de la remise via un des objet

echo $article1::$remise;

//modification de la valeur de la remise

Article3::$remise = 15; // on obtiendra 15 pour les 2 objets
// car la variable est commune à tous les objets

echo $article1::$remise;

echo $article2::$remise;