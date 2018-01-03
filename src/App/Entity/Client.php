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
    // ajout des autres attributs dans le constructeur qui remplaceront
    // les setters et getters dans la classe
    public function __construct ($lastName, $firstName)
    {
    $this->lastName = $lastName;
    $this->firstName = $lastName;
    $this->createAt = new \DateTime('now');
    $this->code = $this->getHash(); // on généère le code auto en utilisant la fonction getHash
    }
// génère un hash à partir du nom et prénom
    private function getHash()
    {
        return sha1($this->lastName.$this->firstName);
    }

    public function __destruct () //s'exécute à la fin du script. Sauf si on le demande avant avec
        // la fonction unset
    {
        // TODO: Implement __destruct() method.
        echo '<p> L\'objet de type Client '.$this->getLastName().' a été détruit';
    }
}