<?php

//inclusion du fichier
require_once "../src/App/Entity/Article2.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Article2;

$article1 = new Article2();

$article1->setPrice(100); // on affecte une valeur à price grâce au setter
$article1->increasePrice(5); // on utilise la fonction qui augmente le prix
echo $article1->getPrice(); // on l'affiche grâce au getter

$article1->setTradeName('Le clavier est noir');
$article1->autoAssignmentReference();
echo $article1->getReference();
