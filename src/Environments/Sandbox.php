<?php

namespace WSW\dLocal\Environments;

/**
 * Class Sandbox
 *
 * @package WSW\dLocal\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Sandbox extends AbstractEnvironment
{
    /**
     * @var string
     */
    const WS_HOST = 'sandbox.dlocal.com';

    /**
     * @return string
     */
    public function getWsHost()
    {
        return static::WS_HOST;
    }
}
