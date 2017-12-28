<?php
//inclusion du fichier
require_once "../src/App/Entity/Article.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Article;

//création d'un objet INSTANCIATION
//INSTANCE = objet

$article1 = new Article();
$article1->reference = GFTYR; // fonctionne que si l'attribut est public
echo $article1->reference; // fonctionne que si l'attribut est public

//affichage
var_dump ($article1);
