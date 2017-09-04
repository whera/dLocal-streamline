<?php

namespace WSW\dLocal\Entities;

use JMS\Serializer\Annotation;

/**
 * Class Address
 *
 * @Annotation\AccessType("public_method")
 * @package WSW\dLocal\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Address
{
    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_address")
     */
    private $address;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_city")
     */
    private $city;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_state")
     */
    private $state;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_country")
     */
    private $country;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_zip")
     */
    private $zipCode;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }
}
