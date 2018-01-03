<?php

//inclusion du fichier
require_once "../src/App/Entity/Client.php";
include "../src/App/Entity/Address.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Client;
use App\Entity\Address;

$client = new Client('Dupond','Jean');

$adressFacturation = new Address();
$adressFacturation->setStreet('7 rue du Moulin');
$adressFacturation->setPostalCode('75000');
$adressFacturation->setCity('Paris');

$client->addAdress($adressFacturation);

$adressFacturation2 = new Address();
$adressFacturation2->setStreet('8 rue du pays');
$adressFacturation2->setPostalCode('75000');
$adressFacturation2->setCity('Paris');

$client->addAdress($adressFacturation2);


var_dump($client->getAddressCollection());

//parcourir la collection comme un tableau avec foreach
foreach ($client->getAddressCollection() as $address){
    var_dump($address->getCity());
}