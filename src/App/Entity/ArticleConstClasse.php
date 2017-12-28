<?php

namespace App\Entity;


class ArticleConstClasse
{
    private $price;
// variable de classe

    private static $remise = 10;

    //constante de classe, elle est static et publique

    const REMISE_MAX = 20 ; // elle est initialisée ici et ne pourra plus changer

    /**
     * @param int $remise
     */
    public static function setRemise ($remise)
    {
        if ($remise > self::REMISE_MAX) {
            self::$remise = self::REMISE_MAX;
        }else
        {
            self::$remise = $remise;
        }
        self::$remise = $remise;
    }

    /**
     * @return int
     */
    public static function getRemise ()
    {
        return self::$remise;
    }

    /**
     * @param mixed $price
     */
    public function setPrice ($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice ()
    {
        return $this->price;
    }


}