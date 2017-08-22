<?php

namespace WSW\dLocal\Environments;

use WSW\dLocal\TestCase;

/**
 * Class ProductionTest
 *
 * @package WSW\dLocal\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ProductionTest extends TestCase
{
    public function testGetWsHostShouldReturnTheConstantValue()
    {
        $env = new Production();
        $this->assertEquals(Production::WS_HOST, $env->getWsHost());
    }
}
