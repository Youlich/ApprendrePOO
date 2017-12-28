<?php

//inclusion du fichier
require_once "../src/App/Entity/ArticleMethChainee.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\ArticleMethChainee;

//création d'un objet INSTANCIATION
//INSTANCE = objet

$article = new ArticleMethChainee();

// on affiche tous les setters à la chaine, sans ; à chaque fois : juste à la fin

$article->setName('Nom du produit')
    ->setDescription('Description du produit')
    ->setPrice(10.23);





