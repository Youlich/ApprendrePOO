<?php

//inclusion du fichier
require_once "../src/App/Entity/Client.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Client;

$clientA = new Client();
$clientA->setLastName('Dupond');
$clientA->setFirstName('Jean');


var_dump($clientA);