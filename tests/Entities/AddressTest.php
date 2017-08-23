<?php

namespace WSW\dLocal\Entities;

use WSW\dLocal\TestCase;

/**
 * Class AddressTest
 *
 * @package WSW\dLocal\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AddressTest extends TestCase
{
    public function testMethodSet()
    {
        $entity = new Address();
        $entity->setAddress('Rua Manoel Silveira Azevedo');
        $entity->setCity('Urubici');
        $entity->setState('SC');
        $entity->setCountry('BR');
        $entity->setZipCode('88650-000');

        $this->assertAttributeEquals('Rua Manoel Silveira Azevedo', 'address', $entity);
        $this->assertAttributeEquals('Urubici', 'city', $entity);
        $this->assertAttributeEquals('SC', 'state', $entity);
        $this->assertAttributeEquals('BR', 'country', $entity);
        $this->assertAttributeEquals('88650-000', 'zipCode', $entity);
    }

    public function testMethodGets()
    {
        $entity = new Address();
        $entity->setAddress('Rua Manoel Silveira Azevedo');
        $entity->setCity('Urubici');
        $entity->setState('SC');
        $entity->setCountry('BR');
        $entity->setZipCode('88650-000');

        $this->assertEquals('Rua Manoel Silveira Azevedo', $entity->getAddress());
        $this->assertEquals('Urubici', $entity->getCity());
        $this->assertEquals('SC', $entity->getState());
        $this->assertEquals('BR', $entity->getCountry());
        $this->assertEquals('88650-000', $entity->getZipCode());
    }
}
