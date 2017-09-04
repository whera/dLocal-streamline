<?php

namespace WSW\dLocal\Entities;

use DateTime;
use WSW\Email\Email;
use JMS\Serializer\Annotation;

/**
 * Class Customer
 *
 * @Annotation\AccessType("public_method")
 * @package WSW\dLocal\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Customer
{
    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_iduser")
     */
    private $id;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_name")
     */
    private $name;

    /**
     * @var Email
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_email")
     */
    private $email;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_cpf")
     */
    private $personalIdentification;

    /**
     * @var DateTime
     * @Annotation\Type("DateTime<'Ymd'>")
     * @Annotation\SerializedName("x_bdate")
     */
    private $dateBirth;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_mobile")
     */
    private $phone;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
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
