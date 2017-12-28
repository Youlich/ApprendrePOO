<?php
//inclusion du fichier
require_once "../src/App/Entity/Article4.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Article4;

$article1 = new Article4();
$article1->setPrice(100);

Article4::setRemise(20);


echo $article1->getPriceAfterDiscount();


