<?php

//inclusion du fichier
require_once "../src/App/Entity/Client.php";
// namespace utilisé donc il faut le rajouter avec use
use App\Entity\Client;

$clientA = new Client('Dupond','Jean');



var_dump($clientA);

unset ($clientA);

echo '<p> Ceci est la fin du script</p>';