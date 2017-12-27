<?php

namespace App\Entity;


class Article
{
    /**
     * @var string $reference
     */
    private $reference; // par défaut sa valeur est Null car pas de valeur. Si on ajoute
    // une valeur = '', celle-ci s'affichera dans index.php
    /**
     * @var string $tradeName
     */
    private $tradeName;
    /**
     * @var $description
     */
    private $description;

}
