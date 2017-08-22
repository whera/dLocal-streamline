<?php

namespace WSW\dLocal\Entities;

use DateTime;
use WSW\dLocal\TestCase;
use WSW\Email\Email;

/**
 * Class CustomerTest
 *
 * @package WSW\dLocal\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CustomerTest extends TestCase
{
    public function testMethodSet()
    {
        $user = new Customer;
        $user->setId(123);
        $user->setName('Ronaldo Matos Rodrigues');
        $user->setPhone('+55 48 9 9999 9999');
        $user->setDateBirth(DateTime::createFromFormat('d/m/Y', '01/12/1987'));
        $user->setEmail(new Email('ronaldo@whera.com.br'));
        $user->setPersonalIdentification('12345678909');

        $this->assertAttributeEquals(123, 'id', $user);
        $this->assertAttributeEquals('Ronaldo Matos Rodrigues', 'name', $user);
        $this->assertAttributeEquals('+55 48 9 9999 9999', 'phone', $user);
        $this->assertAttributeEquals(12345678909, 'personalIdentification', $user);
        $this->assertAttributeInstanceOf(DateTime::class, 'dateBirth', $user);
        $this->assertAttributeInstanceOf(Email::class, 'email', $user);
    }

    public function testMethodGets()
    {
        $user = new Customer;
        $user->setId(123);
        $user->setName('Ronaldo Matos Rodrigues');
        $user->setPhone('+55 48 9 9999 9999');
        $user->setDateBirth(DateTime::createFromFormat('d/m/Y', '01/12/1987'));
        $user->setEmail(new Email('ronaldo@whera.com.br'));
        $user->setPersonalIdentification('123.456.789-09');

        $this->assertEquals(123, $user->getId());
        $this->assertEquals('Ronaldo Matos Rodrigues', $user->getName());
        $this->assertEquals('+55 48 9 9999 9999', $user->getPhone());
        $this->assertEquals(12345678909, $user->getPersonalIdentification());
        $this->assertInstanceOf(DateTime::class, $user->getDateBirth());
        $this->assertInstanceOf(Email::class, $user->getEmail());
    }
}
