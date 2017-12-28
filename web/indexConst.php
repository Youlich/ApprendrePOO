<?php
//inclusion du fichier
require_once "../src/App/Entity/ArticleConstClasse.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\ArticleConstClasse;

$article1 = new ArticleConstClasse();
$article1->setPrice(100);

echo ArticleConstClasse::REMISE_MAX;


//ArticleConstClasse::REMISE_MAX = 50; // impossible de mettre une valeur à une constante,
// elle est déjà initialisée dans la classe




