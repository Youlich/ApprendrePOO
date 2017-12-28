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

    //mutateur = setter de la propriété reference
    public function setReference($reference)
    {
        if (strlen($reference)>4)
        {
            echo 'La référence '. $reference . 'dépasse 4 caractères';
        } else {
            $this->reference = $reference; //on affecte le nom reference à l'objet  pour pouvoir
            // l'utiliser, contourne le pb d'attribut private
        }
    }

    /**
     * @param string $tradeName
     */
    public function setTradeName ($tradeName)
    {
        $this->tradeName = $tradeName;
    }

    /**
     * @param mixed $description
     */
    public function setDescription ($description)
    {
        $this->description = $description;
    }

}
