<?php
/**
 * méthodes chainées
 */

namespace App\Entity;


class ArticleMethChainee
{
    private $name;

    private $description;

    private $price;

    // méthodes chainée créée avec ALT inser "getters et setters" en cochant fluent setters.
    // Celà permet au setters de retourner une valeur

    /**
     * @return mixed
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ArticleMethChainee
     */
    public function setName ($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription ()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return ArticleMethChainee
     */
    public function setDescription ($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice ()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return ArticleMethChainee
     */
    public function setPrice ($price)
    {
        $this->price = $price;
        return $this;
    }


}