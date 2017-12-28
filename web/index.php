<?php
//inclusion du fichier
require_once "../src/App/Entity/Article.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Article;

//création d'un objet INSTANCIATION
//INSTANCE = objet

$article1 = new Article();
$article2 = new Article();
// on récupère le setter créé dans index.php et on lui
// affecte une valeur
$article1->setReference('GFTR');
$article1->setTradeName('Mon article 1');
$article1->setDescription('Cet article est joli');
//affichage
var_dump($article1);


