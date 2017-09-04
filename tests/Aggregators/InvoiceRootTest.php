<?php

namespace WSW\dLocal\Aggregators;

use WSW\dLocal\Entities\Address;
use WSW\dLocal\Entities\Customer;
use WSW\dLocal\TestCase;
use WSW\Money\Currency;
use WSW\Money\Money;

/**
 * Class InvoiceRootTest
 *
 * @package WSW\dLocal\Aggregators
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class InvoiceRootTest extends TestCase
{
    public function testMethodsSetsAndGets()
    {
        $invoice = new InvoiceRoot();
        $invoice->setId(123654)
            ->setAddress(new Address())
            ->setCustomer(new Customer())
            ->setAmount(new Money('150.99', new Currency('USD')))
            ->setBank('VI')
            ->setDescription('Test PHPUnit')
            ->setSubCode('a9s8d7a98sd');

        $this->assertEquals(123654, $invoice->getId());
        $this->assertEquals('150.99', $invoice->getValueAmount());
        $this->assertEquals('USD', $invoice->getCurrencyAmount());
        $this->assertEquals('VI', $invoice->getBank());
        $this->assertEquals('Test PHPUnit', $invoice->getDescription());
        $this->assertEquals('a9s8d7a98sd', $invoice->getSubCode());
        $this->assertInstanceOf(Address::class, $invoice->getAddress());
        $this->assertInstanceOf(Customer::class, $invoice->getCustomer());
        $this->assertInstanceOf(Money::class, $invoice->getAmount());
    }
}
