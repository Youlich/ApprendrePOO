<?php

namespace App\Entity;


class Article4
{
    // variable de classe

    private static $remise = 10;

    public static function setRemise($remise)
    {
        self::$remise = (int)$remise; //self remplace le nom de la classe
    }

    /**
     * @return int
     */
    public static function getRemise ()
    {
        return self::$remise;
    }

    /**
     * @var string $tradeName nom de l'article
     */
    private $tradeName;

    /**
     * @var float $price prix de l'article
     */
    private $price;

    /**
     * @return float
     */
    public function getPrice ()
    {
        return $this->price;
    }
    /**
     * @var string $tradeName
     */
    public function getTradeName ()
    {
        return $this->tradeName;
    }/**
 * @param float $price
 */
    public function setPrice ($price)
    {
        $this->price = $price;
    }
    public function setTradeName ($tradeName)
    {
        $this->price = $tradeName;
    }
    public function getPriceAfterDiscount()
{
    return $this->price * (1-self::getRemise() / 100);

}

}