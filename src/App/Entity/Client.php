<?php


namespace App\Entity;


class Client
{
private $lastName;

private $firstName;

private $createAt;

private $code;

    /**
     * @return mixed
     */
    public function getLastName ()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName ($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName ()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName ($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getCreateAt ()
    {
        return $this->createAt;
    }

    /**
     * @param mixed $createAt
     */
    public function setCreateAt ($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * @return mixed
     */
    public function getCode ()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode ($code)
    {
        $this->code = $code;
    }

    // constructeur qui va permettre d'obtenir la date de création du compte client.
    // Appelé avec le new dans indexclient.php
    public function __construct ()
    {
    $this->createAt = new \DateTime('now');
    }
}