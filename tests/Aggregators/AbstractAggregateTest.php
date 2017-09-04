<?php

namespace WSW\dLocal\Aggregators;

use WSW\dLocal\TestCase;

/**
 * Class AbstractAggregateTest
 *
 * @package WSW\dLocal\Aggregators
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AbstractAggregateTest extends TestCase
{
    public function testMethodsSetsAndGets()
    {
        $invoice = $this->getMockForAbstractClass(AbstractAggregate::class);

        $invoice->setReturnUrl('http://adcrew.com.br');
        $invoice->setConfirmationUrl('http://adcrew.com.br?confirmation=1');
        $invoice->setLogin('xpto');
        $invoice->setTransKey('0a7dad79a8d7a98d7a98d7a9d7');
        $invoice->setControl('9A87DA908D7A9D7A098D7A9D87A9D87A9D87A98D7A09D87');

        $this->assertEquals('http://adcrew.com.br', $invoice->getReturnUrl());
        $this->assertEquals('http://adcrew.com.br?confirmation=1', $invoice->getConfirmationUrl());
        $this->assertEquals('xpto', $invoice->getLogin());
        $this->assertEquals('0a7dad79a8d7a98d7a98d7a9d7', $invoice->getTransKey());
        $this->assertEquals('9A87DA908D7A9D7A098D7A9D87A9D87A9D87A98D7A09D87', $invoice->getControl());
    }
}
