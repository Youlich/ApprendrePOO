<?php

namespace App\Entity;


class Article2
{
    // création d'une variable de classe = commune à tous les objets de la classe
    public static $remise;
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

   // d'autres méthodes d'objet

    public function increasePrice($percent) //fonction qui augmente le prix
    {
        $this->price = $this->price * (1 + $percent/100);// le prix de l'objet
        // courant doit recevoir son prix * son prix/100
    }
    public function decreasePrice($percent) //fonction qui réduit le prix
    {
        $this->price = $this->price * (1 - $percent/100);
    }
    private function generateReference() //méthode privée qui sera utilisée par la
        //méthode public autoAssignment qui sera ensuite utilisée dans index2
    {
        $words = explode(" ",$this->tradeName);
        $letters = " ";
        foreach ($words as $word)
        {
            $letters .= strtoupper(substr($word,0,1));
        }
        return $letters;
    }
    public function autoAssignmentReference() // méthode d'objet qui sera utilisée
        // dans index2 et qui utilise la méthode private ci-dessus
    {
        $this->reference = $this->generateReference();
    }

}