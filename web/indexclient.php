<?php

//inclusion du fichier
require_once "../src/App/Entity/Client.php";
include "../src/App/Entity/Adresse.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Client;
use App\Entity\Adresse;

$clientA = new Client('Dupond','Jean');

$adresse = new Adresse();
$adresse->setStreet('7 rue du Moulin');
$adresse->setPostalCode('75000');
$adresse->setCity('Paris');

$clientA->setAdresse($adresse);

// on affiche la ville
echo $clientA->getAdresse()->getCity();
//on modifie la ville
$adresse->setCity('Rennes');
echo '<br/>';
//on l'affiche
var_dump($clientA->getAdresse()->getCity());


