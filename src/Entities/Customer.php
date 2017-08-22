<?php

namespace WSW\dLocal\Entities;

use DateTime;
use WSW\Email\Email;

/**
 * Class Customer
 *
 * @package WSW\dLocal\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Customer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Email
     */
    private $email;

    /**
     * @var int
     */
    private $personalIdentification;

    /**
     * @var DateTime
     */
    private $dateBirth;

    /**
     * @var string
     */
    private $phone;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $email
     *
     * @return $this
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return int
     */
    public function getPersonalIdentification()
    {
        return $this->personalIdentification;
    }

    /**
     * @param int $personalIdentification
     *
     * @return $this
     */
    public function setPersonalIdentification($personalIdentification)
    {
        $this->personalIdentification = (int) preg_replace('/[^0-9]/', '', $personalIdentification);

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * @param \DateTime $dateBirth
     *
     * @return $this
     */
    public function setDateBirth(DateTime $dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
}
