<?php

namespace WSW\dLocal\Aggregators;

use WSW\dLocal\Entities\Address;
use WSW\dLocal\Entities\Customer;
use WSW\Money\Money;
use JMS\Serializer\Annotation;

/**
 * Class InvoiceRoot
 *
 * @Annotation\AccessType("public_method")
 * @package WSW\dLocal\Aggregators
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class InvoiceRoot extends AbstractAggregate
{
    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_invoice")
     */
    private $id;

    /**
     * @var Address
     * @Annotation\Inline()
     */
    private $address;

    /**
     * @var Customer
     * @Annotation\Inline()
     */
    private $customer;

    /**
     * @var Money
     * @Annotation\Exclude()
     */
    private $amount;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_bank")
     */
    private $bank;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_description")
     */
    private $description;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_sub_code")
     */
    private $subCode;

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
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     *
     * @return $this
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Money $amount
     *
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     *
     * @return $this
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubCode()
    {
        return $this->subCode;
    }

    /**
     * @param string $subCode
     *
     * @return $this
     */
    public function setSubCode($subCode)
    {
        $this->subCode = $subCode;

        return $this;
    }

    /**
     * @return string
     * @Annotation\VirtualProperty()
     * @Annotation\SerializedName("x_amount")
     */
    public function getValueAmount()
    {
        return $this->getAmount()->getRound();
    }

    /**
     * @return string
     * @Annotation\VirtualProperty()
     * @Annotation\SerializedName("x_currency")
     */
    public function getCurrencyAmount()
    {
        return $this->getAmount()->getCurrency()->getCode();
    }
}
