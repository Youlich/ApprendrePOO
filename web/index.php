<?php
//inclusion du fichier
require_once "../src/App/Entity/Article.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Article;

//création d'un objet INSTANCIATION
//INSTANCE = objet

$article1 = new Article();

//affichage
var_dump ($article1);
