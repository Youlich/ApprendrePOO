<?php

namespace App\Entity;

class Article3
{

// création d'une variable de classe = commune à tous les objets de la classe
    public static $remise = 10;
    /**
     * @var string $reference référence de l'article
     */
    private $reference; // par défaut sa valeur est Null car pas de valeur. Si on ajoute
// une valeur = '', celle-ci s'affichera dans index.php
    /**
     * @var string $tradeName nom de l'article
     */
    private $tradeName;
    /**
     * @var float $price prix de l'article
     */
    private $price;

    /**
     * @param string $reference
     */
    public function setReference ($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param string $tradeName
     */
    public function setTradeName ($tradeName)
    {
        $this->tradeName = $tradeName;
    }

    /**
     * @param float $price
     */
    public function setPrice ($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getReference ()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getTradeName ()
    {
        return $this->tradeName;
    }

    /**
     * @return float
     */
    public function getPrice ()
    {
        return $this->price;
    }


}
