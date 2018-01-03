<?php

namespace App\Entity;


class Adresse
{
    private $street;
    private $postalCode;
    private $city;

    /**
     * @return mixed
     */
    public function getStreet ()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet ($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getPostalCode ()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode ($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getCity ()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity ($city)
    {
        $this->city = $city;
    }



}