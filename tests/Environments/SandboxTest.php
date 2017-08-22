<?php

namespace WSW\dLocal\Environments;

use WSW\dLocal\TestCase;

/**
 * Class SandboxTest
 *
 * @package WSW\dLocal\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class SandboxTest extends TestCase
{
    public function testGetWsHostShouldReturnTheConstantValue()
    {
        $env = new Sandbox();
        $this->assertEquals(Sandbox::WS_HOST, $env->getWsHost());
    }
}
